<?php

namespace App\Services;

use App\Repositories\ItemRepository;
use App\Services\Interfaces\ItemServiceInterface;

class ItemService implements ItemServiceInterface
{
    protected $itemRepository;

    public function __construct(ItemRepository $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }
    public function getItemById($itemId):array
    {
             $item = $this->itemRepository->getItemById($itemId);
             return $item;

    }
    public function getItemAll()
    {
     $list = $this->itemRepository->getItemAll();
     return $list ;
    }
    public function getItemPagination($request)
    {
     $list = $this->itemRepository->getItemPagination($request);
     return $list ;
    }

    public function storeItem($data)
    {
        return $this->itemRepository->storeItem($data);
    }
    public function updateItem($data,$id)
    {
        return $this->itemRepository->updateItem($data,$id);
    }
}





?>
