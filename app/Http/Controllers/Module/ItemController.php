<?php

namespace App\Http\Controllers\Module;

use Illuminate\Http\Request;
use App\Services\ItemService;
use App\Services\ItemUnitService;
use App\Services\ItemGroupService;
use App\Http\Controllers\Controller;
use App\Services\ItemCategoryService;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    public $role;
    protected $itemService;
    protected $itemCategoryService;
    protected $itemGroupService;
    protected $itemUnitService;
    public function __invoke(Request $request)
    {

    }
    public function __construct(
        ItemService $itemService,
        ItemCategoryService $itemCategoryService,
        ItemGroupService $itemGroupService,
        ItemUnitService $itemUnitService
        )
    {

         //       $this->middleware('auth');
        $this->itemService = $itemService;
        $this->itemCategoryService = $itemCategoryService;
        $this->itemGroupService = $itemGroupService;
        $this->itemUnitService = $itemUnitService;
        $this->role = explode('.', Route::current()->getName())[0];
    }
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $data['role'] = $this->role;
       // $data['collections'] = $this->itemService->getItemAll($request)['data'];

        return view('modules.test.index', $data);
    }
    public function index_body(Request $request)
    {
        //dd($request);
        $data['role'] = $this->role;
        $response = $this->itemService->getItemPagination($request);
        return response()->json($response);
        //echo json_encode($response);
        //exit;

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['role'] = $this->role;
        $data['item_categories']= $this->itemCategoryService->getItemCategoryAll();
        $data['item_groups']= $this->itemGroupService->getItemGroupAll();
        $data['item_units']= $this->itemUnitService->getItemUnitAll();
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
    public function edit($id)
    {
        $data['role'] = $this->role;
        $data['editData'] = $this->itemService->getItemById($id);
        $GetView = view('modules.test.test_edit',$data)->render();

        return response()->json([
            'status' => 200,
            'html' => $GetView,
        ]);
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

    public function GetCategoryByGroupID(Request $request)
    {
        //dd($request['test_group_id']);

        $item_group_id = $request['item_group_id'];
        $response = $this->itemCategoryService->getItemCategoryByGroupId($item_group_id);
       // $response = TestCategory::where('item_group_id', $item_group_id)->get();
        return response()->json($response);
        //return response()->json(["status" => true, "data" => $response]);
    }
}
