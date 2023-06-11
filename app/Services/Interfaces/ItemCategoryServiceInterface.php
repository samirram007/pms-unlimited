<?php

namespace App\Services\Interfaces;

interface ItemCategoryServiceInterface
{
    public function getItemCategoryById($itemCategoryId):array;

    public function getItemCategoryAll();
    public function getItemCategoryPagination($request);
    public function storeItemCategory($data);
    public function updateItemCategory($data,$id);
    public function getItemCategoryByGroupId($itemGroupId);
}






?>
