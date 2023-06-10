<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use App\Services\ItemService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    public $role;
    protected $itemService;
    public function __invoke(Request $request)
    {

    }
    public function __construct(ItemService $itemService)
    {

         //       $this->middleware('auth');
        $this->itemService = $itemService;
        $this->role = explode('.', Route::current()->getName())[0];
    }
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $data['role'] = $this->role;
        $data['collections'] = $this->itemService->getItemAll()['data'];

        return view('modules.test.index', $data);
    }
    public function index_body()
    {
        $data['role'] = $this->role;
        $data['collections'] = $this->itemService->getItemAll()['data'];
        //dd($data);
        $GetView= view('modules.test.index_body', $data)->render();
        //dd($GetView);
        return response()->json([
            'status' => true,
            'html' => $GetView,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['role'] = $this->role;
        $GetView = view('modules.test.test_create',$data)->render();

        return response()->json([
            'status' => 200,
            'html' => $GetView,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'alias' => 'required',
            'cost' => 'required',
            'rate' => 'required',
            'code' => 'required',
            'duration' => 'required',
            'discount' => '',
            'test_group_id' => 'required',
            'test_category_id' => 'required'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => 400,
                'message' => $validator->getMessageBag(),
            ]);
        }else{
            $response = $this->itemService->storeItem($request);
            if($response)
            {
                return response()->json([
                    'status' => 200,
                    'messages' => 'Test Created Successfully',
                ]);
            }
        }
        return response()->json([
            'status' => false,
            'message' => 'Failed',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
