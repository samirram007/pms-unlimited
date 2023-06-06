<?php
namespace App\Repositories;
use Exception;
use App\Models\Company;
use App\Models\CompanyType;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\CompanyRepositoryInterface;

class CompanyRepository   implements CompanyRepositoryInterface
{
    public function getCompanyById($companyId):array
    {
        return Company::with('company_type')->find($companyId)->toArray();
    }
    public function getCompanyAll():array
    {
        $list=Company::with('company_type')->paginate(10)->toArray();
        return $list;

    }
    public function storeCompany($data)
    {
       //  dd($data->file('image'));
        try {
            $company=new Company();
            $company->name=$data->name;
            $company->company_type_id=$data->company_type_id;
            $company->date_of_foundation=$data->date_of_foundation;
            $company->address=$data->address;
            $company->contact_no=$data->contact_no;
            $company->email=$data->email;
            if($data->file('image')){
                $file=$data->file('image');
            // @unlink(public_path('upload/student_images/'.$data->image));
                $filename=date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/company'),$filename);
                $company['image']=$filename;
            }
            $company->save();
            return  $company;

        } catch (Exception $e) {
            return $e->getMessage();

        }

    }

    public function updateCompany($data,$id)
    {
       //  dd($data->file('image'));
        try {
            $company=Company::find($id);
            $company->name=$data->name;
            $company->company_type_id=$data->company_type_id;
            $company->date_of_foundation=$data->date_of_foundation;
            $company->address=$data->address;
            $company->contact_no=$data->contact_no;
            $company->email=$data->email;
            if($data->file('image')){
                $file=$data->file('image');
                @unlink(public_path('upload/company/'.$data->image));
                $filename=date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/company'),$filename);
                $company['image']=$filename;
            }
            $company->save();
            return  $company;

        } catch (Exception $e) {
            return $e->getMessage();

        }

    }
    public function deleteCompany($id)
    {

        try {
            $company=Company::find($id);

            $company->delete();
           // dd($company);
            return  $company;

        } catch (Exception $e) {
            return $e->getMessage();

        }

    }
    public function getCompanyTypeById($companyTypeId):array
    {
        return CompanyType::find($companyTypeId)->toArray();
    }
    public function getCompanyTypeAll():array
    {
        $list=CompanyType::paginate(10)->toArray();
        return $list;
    }
}
