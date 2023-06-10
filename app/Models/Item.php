<?php

namespace App\Models;


use App\Models\ItemUnit;
use App\Models\ItemGroup;
use App\Models\ItemCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;
    public function item_category(){
        return $this->belongsTo(ItemCategory::class)
        ->withDefault();
    }
    public function item_group()
    {
                return $this->belongsTo(ItemGroup::class)
                ->withDefault();
    }

    public function item_unit()
    {
                return $this->belongsTo(ItemUnit::class)
                ->withDefault();
    }


}
