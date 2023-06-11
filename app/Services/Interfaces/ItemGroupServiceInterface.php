<?php

namespace App\Services\Interfaces;

interface ItemGroupServiceInterface
{
    public function getItemGroupById($itemId):array;
    public function getItemGroupAll();
    public function getItemGroupPagination($request);
    public function storeItemGroup($data);
    public function updateItemGroup($data,$id);
}






?>
