<?php

namespace App\Models;


use App\Models\CompanyType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
            'created_at',
            'updated_at',
    ];
    public function company_type()
    {
        return $this->belongsTo(CompanyType::class,'company_type_id')
        ->withDefault();
    }
}
