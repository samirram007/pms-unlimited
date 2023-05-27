<?php

namespace App\Models;

use App\Models\Item;
use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemPackage extends Model
{
    use HasFactory;
    public function test()
    {
        return $this->belongsTo('App\Models\Item')
        ->where('is_package',0);
       // return $this->belongsTo(Test::class);

    }
    public function package()
    {
        return $this->belongsTo(Item::class)->where('is_package',1);
    }
    public function Item_packages()
    {
        return $this->hasMany(Item::class,'id','package_id')->where('is_package',1);
    }


}
