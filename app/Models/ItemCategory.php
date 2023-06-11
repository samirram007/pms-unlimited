<?php

namespace App\Models;

use App\Models\ItemGroup;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemCategory extends Model
{
    use HasFactory;
    public function item_group()
    {
                return $this->belongsTo(ItemGroup::class)
                ->withDefault();
    }
}
