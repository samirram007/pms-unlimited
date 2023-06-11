<?php

namespace App\Services;

use App\Repositories\ItemGroupRepository;
use App\Services\Interfaces\ItemGroupServiceInterface;

class ItemGroupService implements ItemGroupServiceInterface
{
    protected $itemGroupRepository;

    public function __construct(ItemGroupRepository $itemGroupRepository)
    {
        $this->itemGroupRepository = $itemGroupRepository;
    }
    public function getItemGroupById($itemGroupId):array
    {
             $itemGroup = $this->itemGroupRepository->getItemGroupById($itemGroupId);
             return $itemGroup;

    }
    public function getItemGroupAll()
    {
     $list= $this->itemGroupRepository->getItemGroupAll();
     return $list ;
    }
    public function getItemGroupPagination($request)
    {
     $list = $this->itemGroupRepository->getItemGroupPagination($request);
     return $list ;
    }

    public function storeItemGroup($data)
    {
        return $this->itemGroupRepository->storeItemGroup($data);
    }
    public function updateItemGroup($data,$id)
    {
        return $this->itemGroupRepository->updateItemGroup($data,$id);
    }
}





?>
