<?php

namespace App\Repositories;

use Exception;
use App\Models\ItemUnit;
use Illuminate\Support\Facades\Route;
use App\Repositories\Interfaces\ItemUnitRepositoryInterface;

class ItemUnitRepository implements ItemUnitRepositoryInterface
{
    public function getItemUnitById($itemUnitId):array
    {
        return ItemUnit::find($itemUnitId)->toArray();
    }


    public function getItemUnitAll()
    {
        $list=ItemUnit::get()->toArray();
        return $list;
    }


    public function getItemUnitPagination($request)
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
        $totalRecords = ItemUnit::select('count(*) as allcount')->count();
        $totalRecordswithFilter = ItemUnit::select('count(*) as allcount')->where('name', 'like', '%' .$searchValue . '%')->count();

        // Fetch records
        $records = ItemUnit::with('department')->orderBy($columnName,$columnSortOrder)
            ->where('item_units.name', 'like', '%' .$searchValue . '%')
            ->select('item_units.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        //dd($records);
        $data_arr = array();
        $sno = $start+1;

        foreach($records as $record){
            $editRoute=route($this->role.'.item_unit.edit',$record->id);
            $deleteRoute=route($this->role.'.item_unit.delete',$record->id);
            $id = $record->id;
            $name = $record->name;
            $code = $record->code;
            $description = $record->description;
            //$updateButton = "<button class='btn btn-sm btn-info updateUser' data-id='".$record->id."' data-toggle='modal' data-target='#updateModal' >Update</button>";
            $updateButton ='<a href="javascript:" data-param="1" data-url="'.$editRoute.'" data-size="md" title="Edit Item Unit" class="edit btn btn-info btn-sm btn-rounded">
            <i class="fas fa-edit"></i>
            </a>';
            // Delete Button
            // $deleteButton = "<button class='btn btn-sm btn-danger deleteUser' data-id='".$record->id."'>Delete</button>";
            $deleteButton = '<a href="javascript:" data-param="1" data-url="'.$deleteRoute.'" data-size="md" title="Delete Item Unit" class="delete btn btn-danger btn-sm btn-rounded">
            <i class="fas fa-trash"></i>
            </a>';

            $action = $updateButton." ".$deleteButton;
            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "code" => $code,
                "description" => $description
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


    public function storeItemUnit($data)
    {
        try{

            $item = new ItemUnit();
            $item->name = $data->name;
            $item->code = $data->code;
            $item->description = $data->description;

            $item->save();
            //dd($item);
            // return $item;

        }catch(Exception $e){
           // dd($e);
            return $e->getMessage();
        }
    }


    public function updateItemUnit($data,$id)
    {
        try{

            $item = ItemUnit::find($id);
            $item->name = $data->name;
            $item->code = $data->code;
            $item->description = $data->description;

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
