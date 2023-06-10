<?php

namespace App\Repositories\Interfaces;
use Illuminate\Http\Request;

interface ItemRepositoryInterface
{
    public function getItemById($itemId):array;
    public function getItemAll():array;
    public function storeItem($data);
}


?>
