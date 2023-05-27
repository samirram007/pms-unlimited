<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\CompanyRepository;
use App\Services\Interfaces\CompanyServiceInterface;
use App\Repositories\Interfaces\CompanyRepositoryInterface;



class CompanyService   implements CompanyServiceInterface
{

    protected $companyRepository ;


    function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }
    public function getCompanyById($companyId):array
    {
        return $this->companyRepository->getCompanyById($companyId);
    }
    public function getCompanyAll():array
    {
        return $this->companyRepository->getCompanyAll();
    }
    public function storeCompany($data)
    {
        return $this->companyRepository->storeCompany($data);
    }
    public function updateCompany($request,$id)
    {
        return $this->companyRepository->updateCompany($request,$id);
    }
    public function deleteCompany($id)
    {
        return $this->companyRepository->deleteCompany($id);
    }



    public function getCompanyTypeById($companyTypeId):array
    {
        return $this->companyRepository->getCompanyTypeById($companyTypeId);
    }
    public function getCompanyTypeAll():array
    {
        return $this->companyRepository->getCompanyTypeAll();
    }
}
