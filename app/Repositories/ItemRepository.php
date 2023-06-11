<?php

namespace App\Repositories;

use Exception;
use App\Models\Item;
use Illuminate\Support\Facades\Route;
use App\Repositories\Interfaces\ItemRepositoryInterface;

class ItemRepository implements ItemRepositoryInterface
{
    public function getItemById($itemId):array
    {
        return Item::with('item_category')->find($itemId)->toArray();
    }
    public function getItemAll($request)
    {
        $this->role = explode('.', Route::current()->getName())[0];
        // $list=Item::with('item_category')->paginate(10)->toArray();
        // return $list;
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
        $totalRecords = Item::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Item::select('count(*) as allcount')->where('name', 'like', '%' .$searchValue . '%')->count();

        // Fetch records
        $records = Item::with('item_category','item_group')->orderBy($columnName,$columnSortOrder)
            ->where('items.is_package',0)
            ->where('items.name', 'like', '%' .$searchValue . '%')
            ->select('items.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        //dd($records);
        $data_arr = array();
        $sno = $start+1;

        foreach($records as $record){
            $editRoute=route($this->role.'.test.edit',$record->id);
            $deleteRoute=route($this->role.'.test.delete',$record->id);
            $id = $record->id;
            $item_category= $record->item_category->name;
            $item_group= $record->item_group->name;
            $name = $record->name;
            $amount = $record->amount;
            $cost = $record->cost;
            //$updateButton = "<button class='btn btn-sm btn-info updateUser' data-id='".$record->id."' data-toggle='modal' data-target='#updateModal' >Update</button>";
            $updateButton ='<a href="javascript:" data-param="1" data-url="'.$editRoute.'" data-size="md" title="Edit Company" class="edit btn btn-info btn-sm btn-rounded">
            <i class="fas fa-edit"></i>
            </a>';
            // Delete Button
            // $deleteButton = "<button class='btn btn-sm btn-danger deleteUser' data-id='".$record->id."'>Delete</button>";
            $deleteButton = '<a href="javascript:" data-param="1" data-url="'.$deleteRoute.'" data-size="md" title="Delete Company" class="delete btn btn-danger btn-sm btn-rounded">
            <i class="fas fa-trash"></i>
            </a>';

            $action = $updateButton." ".$deleteButton;
            $data_arr[] = array(
                "id" => $id,
                "item_category"=>$item_category,
                "item_group"=>$item_group,
                "name" => $name,
                "amount" => $amount,
                "cost" => $cost,
                "action" => $action
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
    public function storeItem($data)
    {
        try{

            $item = new Item();
            $item->name = $data->name;
            $item->alias = $data->alias;
            $item->code = $data->code;
            $item->description = $data->description;
            $item->cost = $data->cost;
            $item->discount = $data->discount;
            $item->rate = $data->rate;
            $item->duration = $data->duration;
            $item->test_group_id = $data->test_group_id;
            $item->test_category_id = $data->test_category_id;

            $item->save();
            dd($item);
            // return $item;

        }catch(Exception $e){
            dd($e);
            return $e->getMessage();
        }
    }
}

?>
