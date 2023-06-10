<?php

namespace App\Services\Interfaces;

interface ItemServiceInterface
{
    public function getItemById($itemId):array;
    public function getItemAll():array;
    public function storeItem($data);
}





?>
