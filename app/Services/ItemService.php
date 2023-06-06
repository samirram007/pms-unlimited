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
    public function storeItem($data)
    {
        return $this->itemRepository->storeItem($data);
    }
}





?>