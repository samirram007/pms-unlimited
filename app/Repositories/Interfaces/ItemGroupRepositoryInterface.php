<?php
namespace App\Repositories\Interfaces;


interface ItemGroupRepositoryInterface
{
    public function getItemGroupById($itemId):array;
    public function getItemGroupAll();
    public function getItemGroupPagination($request);
    public function storeItemGroup($data);
    public function updateItemGroup($data,$id);
}




?>
