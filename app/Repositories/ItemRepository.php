<?php

namespace App\Repositories;

use App\Models\Item;
use App\Repositories\Interfaces\ItemRepositoryInterface;
use Exception;

class ItemRepository implements ItemRepositoryInterface
{
    public function getItemById($itemId):array
    {
        return Item::with('item_category')->find($itemId)->toArray();
    }
    public function getItemAll():array
    {
        $list=Item::with('item_category')->paginate(10)->toArray();
        return $list;

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
