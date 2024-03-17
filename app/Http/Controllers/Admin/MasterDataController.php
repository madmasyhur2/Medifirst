<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class MasterDataController extends Controller
{
    public function index(Request $request)
    {
        // $query = Product::with('category')
        //     ->get();
        // dd($query->toArray());
        try {
            if ($request->ajax()) {
                $query = Product::with('category');
                    // ->orderBy('updated_at', 'desc');

                return DataTables::eloquent($query)
                    ->addIndexColumn()
                    ->editColumn('name', function($item){
                        return '<span style="color:#296BB2">'.$item->name.'</span>'
                            .'<br>'
                            .'<span style="color:#9E9E9E">'.$item->sku_code.'</span>';
                    })
                    ->editColumn('selling_price', function($item){
                        return 'Rp. '.number_format($item->selling_price, 0, ',', '.');
                    })
                    ->editColumn('updated_at', function($item){
                        return $item->updated_at->format('d/m/Y H:i');
                    })
                    ->editColumn('category_name', function($item){
                        return $item->category->name; 
                    })
                    ->addColumn('action', function($item){
                        return '<div class="d-flex justify-content-end">
                                    <a class="btn btn-sm btn-primary me-2" style="background-color: #8F9098;">Action</a>
                                </div>';
                    })
                    ->rawColumns(['name', 'sku_code', 'action'])
                    ->make(true);
            }
            
            $locations = DB::table('products')
                ->select('location')
                ->distinct()
                ->get();

            $groups = DB::table('products')
                ->select('group')
                ->distinct()
                ->get();

            $categories = DB::table('products')
                ->select('categories.name as category_name')
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->distinct()
                ->get();

            return view('pages.admin.masterdata.index', compact([
                'locations',
                'groups',
                'categories'
            ]));

        } catch (\Throwable $th) {
            alert()->error($th->getMessage());
			return back();
        }
    }

    public function add(Request $request)
    {
        try {
            $categories = Category::all();
            return view('pages.admin.masterdata.add', compact('categories'));
        } catch (\Throwable $th) {
            alert()->error($th->getMessage());
			return redirect(route('dashboard'));
        }
    }

    public function addMultiple(Request $request)
    {
        try {
            $categories = Category::all();
            return view('pages.admin.masterdata.add-multiple', compact('categories'));
        } catch (\Throwable $th) {
            alert()->error($th->getMessage());
			return redirect(route('products.index'));
        }
    }
}
