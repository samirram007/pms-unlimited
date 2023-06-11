<?php
namespace App\Repositories\Interfaces;


interface ItemUnitRepositoryInterface
{
    public function getItemUnitById($itemId):array;
    public function getItemUnitAll();
    public function getItemUnitPagination($request);
    public function storeItemUnit($data);
    public function updateItemUnit($data,$id);
}




?>
