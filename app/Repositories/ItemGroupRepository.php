<?php

namespace App\Repositories;

use Exception;
use App\Models\ItemGroup;
use Illuminate\Support\Facades\Route;
use App\Repositories\Interfaces\ItemGroupRepositoryInterface;

class ItemGroupRepository implements ItemGroupRepositoryInterface
{
    public function getItemGroupById($itemGroupId):array
    {
        return ItemGroup::with('department')->find($itemGroupId)->toArray();
    }


    public function getItemGroupAll()
    {
        $list=ItemGroup::with('department')->get()->toArray();
        return $list;
    }


    public function getItemGroupPagination($request)
    {
        $this->role = explode('.', Route::current()->getName())[0];

        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = ItemGroup::select('count(*) as allcount')->count();
        $totalRecordswithFilter = ItemGroup::select('count(*) as allcount')->where('name', 'like', '%' .$searchValue . '%')->count();

        // Fetch records
        $records = ItemGroup::with('department')->orderBy($columnName,$columnSortOrder)
            ->where('item_groups.name', 'like', '%' .$searchValue . '%')
            ->select('item_groups.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        //dd($records);
        $data_arr = array();
        $sno = $start+1;

        foreach($records as $record){
            $editRoute=route($this->role.'.item_group.edit',$record->id);
            $deleteRoute=route($this->role.'.item_group.delete',$record->id);
            $id = $record->id;
            $name = $record->name;
            $department = $record->department->name;
            //$updateButton = "<button class='btn btn-sm btn-info updateUser' data-id='".$record->id."' data-toggle='modal' data-target='#updateModal' >Update</button>";
            $updateButton ='<a href="javascript:" data-param="1" data-url="'.$editRoute.'" data-size="md" title="Edit Item Group" class="edit btn btn-info btn-sm btn-rounded">
            <i class="fas fa-edit"></i>
            </a>';
            // Delete Button
            // $deleteButton = "<button class='btn btn-sm btn-danger deleteUser' data-id='".$record->id."'>Delete</button>";
            $deleteButton = '<a href="javascript:" data-param="1" data-url="'.$deleteRoute.'" data-size="md" title="Delete Item Group" class="delete btn btn-danger btn-sm btn-rounded">
            <i class="fas fa-trash"></i>
            </a>';

            $action = $updateButton." ".$deleteButton;
            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "department" => $department
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );
        return $response;
        // echo json_encode($response);
        // exit;

    }


    public function storeItemGroup($data)
    {
        try{

            $item = new ItemGroup();
            $item->name = $data->name;
            $item->department_id = $data->department_id;

            $item->save();
            //dd($item);
            // return $item;

        }catch(Exception $e){
           // dd($e);
            return $e->getMessage();
        }
    }


    public function updateItemGroup($data,$id)
    {
        try{

            $item = ItemGroup::find($id);
            $item->name = $data->name;
            $item->department_id = $data->department_id;

            $item->save();
            //dd($item);
            // return $item;

        }catch(Exception $e){
           // dd($e);
            return $e->getMessage();
        }
    }
}

?>
