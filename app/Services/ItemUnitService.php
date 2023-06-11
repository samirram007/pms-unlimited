<?php

namespace App\Services;

use App\Repositories\ItemUnitRepository;
use App\Services\Interfaces\ItemUnitServiceInterface;

class ItemUnitService implements ItemUnitServiceInterface
{
    protected $itemUnitRepository;

    public function __construct(ItemUnitRepository $itemUnitRepository)
    {
        $this->itemUnitRepository = $itemUnitRepository;
    }
    public function getItemUnitById($itemUnitId):array
    {
             $itemUnit = $this->itemUnitRepository->getItemUnitById($itemUnitId);
             return $itemUnit;

    }
    public function getItemUnitAll()
    {
     $list= $this->itemUnitRepository->getItemUnitAll();
     return $list ;
    }
    public function getItemUnitPagination($request)
    {
     $list = $this->itemUnitRepository->getItemUnitPagination($request);
     return $list ;
    }

    public function storeItemUnit($data)
    {
        return $this->itemUnitRepository->storeItemUnit($data);
    }
    public function updateItemUnit($data,$id)
    {
        return $this->itemUnitRepository->updateItemUnit($data,$id);
    }
}





?>
