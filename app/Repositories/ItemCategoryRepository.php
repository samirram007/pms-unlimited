<?php

namespace App\Repositories;

use Exception;
use App\Models\ItemCategory;
use Illuminate\Support\Facades\Route;
use App\Repositories\Interfaces\ItemCategoryRepositoryInterface;

class ItemCategoryRepository implements ItemCategoryRepositoryInterface
{
    public function getItemCategoryById($itemCategoryId):array
    {
        return ItemCategory::with('item_group')->find($itemCategoryId)->toArray();
    }

    public function getItemCategoryAll()
    {
        $list=ItemCategory::with('item_group')->get()->toArray();
        return $list;
    }
    public function getItemCategoryPagination($request)
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
        $totalRecords = ItemCategory::select('count(*) as allcount')->count();
        $totalRecordswithFilter = ItemCategory::select('count(*) as allcount')->where('name', 'like', '%' .$searchValue . '%')->count();

        // Fetch records
        $records = ItemCategory::with('item_group')->orderBy($columnName,$columnSortOrder)
            ->where('item_categories.name', 'like', '%' .$searchValue . '%')
            ->select('item_categories.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        //dd($records);
        $data_arr = array();
        $sno = $start+1;

        foreach($records as $record){
            $editRoute=route($this->role.'.item_category.edit',$record->id);
            $deleteRoute=route($this->role.'.item_category.delete',$record->id);
            $id = $record->id;
            $name = $record->name;
            $item_group = $record->item_group->name;
            $has_method = $record->has_method;
            //$updateButton = "<button class='btn btn-sm btn-info updateUser' data-id='".$record->id."' data-toggle='modal' data-target='#updateModal' >Update</button>";
            $updateButton ='<a href="javascript:" data-param="1" data-url="'.$editRoute.'" data-size="md" title="Edit Item Category" class="edit btn btn-info btn-sm btn-rounded">
            <i class="fas fa-edit"></i>
            </a>';
            // Delete Button
            // $deleteButton = "<button class='btn btn-sm btn-danger deleteUser' data-id='".$record->id."'>Delete</button>";
            $deleteButton = '<a href="javascript:" data-param="1" data-url="'.$deleteRoute.'" data-size="md" title="Delete Item Category" class="delete btn btn-danger btn-sm btn-rounded">
            <i class="fas fa-trash"></i>
            </a>';

            $action = $updateButton." ".$deleteButton;
            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "item_group" => $item_group,
                "has_method" => $has_method
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
    public function storeItemCategory($data)
    {
        try{

            $item = new ItemCategory();
            $item->name = $data->name;
            $item->has_method = $data->has_method;
            $item->item_group_id = $data->item_group_id;

            $item->save();
            //dd($item);
            // return $item;

        }catch(Exception $e){
           // dd($e);
            return $e->getMessage();
        }
    }
    public function updateItemCategory($data,$id)
    {
        try{

            $item = ItemCategory::find($id);
            $item->name = $data->name;
            $item->has_method = $data->has_method;
            $item->item_group_id = $data->item_group_id;

            $item->save();
            //dd($item);
            // return $item;

        }catch(Exception $e){
           // dd($e);
            return $e->getMessage();
        }
    }


    public function getItemCategoryByGroupId($itemGroupId)
    {
        return ItemCategory::with('item_group')->where('item_group_id',$itemGroupId)->get()->toArray();
    }
}

?>
