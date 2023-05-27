<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use App\Services\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    protected $companyService;

    public $role;

    public function __construct(CompanyService $companyService)
    {

        $this->companyService = $companyService;
        $this->role = explode('.', Route::current()->getName())[0];

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['role'] = $this->role;
        $data['companies'] = $this->companyService->getCompanyAll()['data'];

        return view('modules.company.index', $data);
    }
    public function index_body()
    {
        $data['role'] = $this->role;
        $data['companies'] = $this->companyService->getCompanyAll()['data'];

        $GetView= view('modules.company.index_body', $data)->render();
        return response()->json([
            'status' => true,
            'html' => $GetView,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data['role'] = $this->role;
        $data['company_types'] = $this->companyService->getCompanyTypeAll()['data'];

        $data['info'] = [];
        $GetView = view('modules.company.create', $data)->render();

        return response()->json([
            'status' => true,
            'html' => $GetView,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'email' => 'required|email|unique:companies,email',
            'contact_no' => 'required|numeric|digits:10',
        ]);
        //dd($validator->errors());
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors(),
            ]);
        }
        $response = $this->companyService->storeCompany($request);

        if ($response) {
            return response()->json([
                'status' => true,
                'message' => 'Company Successfully Created',
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'Failed',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $response = $this->companyService->getCompanyById($id);

        return view('modules.company.view', [$response]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //dd($id);
        $data['role'] = $this->role;
        $data['editData'] = $this->companyService->getCompanyById($id);
        //dd($data);
        $data['company_types'] = $this->companyService->getCompanyTypeAll()['data'];

        $data['info'] = [];
        $GetView = view('modules.company.edit', $data)->render();

        return response()->json([
            'status' => true,
            'html' => $GetView,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'email' => 'required|email|unique:companies,email,'.$id,
            'contact_no' => 'required|numeric|digits:10',
        ]);
        //dd($validator->errors());
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors(),
            ]);
        }

        $response = $this->companyService->updateCompany($request, $id);
        if ($response) {
            return response()->json([
                'status' => true,
                'message' => 'Company Successfully Updated',
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'Failed',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $response =  $this->companyService->deleteCompany($id);

        if ($response) {
            return redirect()->back();
            return response()->json([
                'status' => true,
                'message' => 'Company Successfully Deleted',
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'Failed',
        ]);

    }
}
