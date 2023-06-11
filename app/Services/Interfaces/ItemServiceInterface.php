<?php

namespace App\Services\Interfaces;

interface ItemServiceInterface
{
    public function getItemById($itemId):array;
    public function getItemAll();
    public function getItemPagination($request);
    public function storeItem($data);
    public function updateItem($data,$id);
}





?>
