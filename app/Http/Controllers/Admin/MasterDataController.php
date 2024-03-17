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
                        return '<div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="action_button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #8F9098; color: white">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="action_button">
                                        <li><a class="dropdown-item" href="masterdata/edit">Edit Produk</a></li>
                                        <li><a class="dropdown-item" href="#">Tambah Stok Produk</a></li>
                                        <li><a class="dropdown-item" href="#">Detail Produk</a></li>
                                        <li><a class="dropdown-item" href="#">Hapus Produk</a></li>
                                    </ul>
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

    public function add()
    {
        return view('pages.admin.masterdata.product');
    }

    
}
