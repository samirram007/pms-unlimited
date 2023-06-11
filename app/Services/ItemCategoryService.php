<?php

namespace App\Services;

use App\Repositories\ItemCategoryRepository;
use App\Services\Interfaces\ItemCategoryServiceInterface;

class ItemCategoryService implements ItemCategoryServiceInterface
{
    protected $itemCategoryRepository;

    public function __construct(ItemCategoryRepository $itemCategoryRepository)
    {
        $this->itemCategoryRepository = $itemCategoryRepository;
    }
    public function getItemCategoryById($itemCategoryId):array
    {
             $itemCategory = $this->itemCategoryRepository->getItemCategoryById($itemCategoryId);
             return $itemCategory;

    }

    public function getItemCategoryAll()
    {
     $list= $this->itemCategoryRepository->getItemCategoryAll();
     return $list ;
    }
    public function getItemCategoryPagination($request)
    {
     $list = $this->itemCategoryRepository->getItemCategoryPagination($request);
     return $list ;
    }

    public function storeItemCategory($data)
    {
        return $this->itemCategoryRepository->storeItemCategory($data);
    }
    public function updateItemCategory($data,$id)
    {
        return $this->itemCategoryRepository->updateItemCategory($data,$id);
    }

    public function getItemCategoryByGroupId($itemGroupId)
    {
             $itemCategory = $this->itemCategoryRepository->getItemCategoryByGroupId($itemGroupId);
             return $itemCategory;

    }
}





?>
