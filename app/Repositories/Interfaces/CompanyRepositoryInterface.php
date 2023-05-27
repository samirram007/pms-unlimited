<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface CompanyRepositoryInterface
{
    public function getCompanyById($companyId):array;
    public function getCompanyAll():array;
    public function storeCompany($data);
    public function updateCompany($request,$id);
    public function deleteCompany($id);
    public function getCompanyTypeById($companyTypeId):array;
    public function getCompanyTypeAll():array;
}
