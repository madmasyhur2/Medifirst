<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class MasterDataController extends Controller
{
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $query = Product::query();
                
                return DataTables::eloquent($query)
                ->addIndexColumn()
                ->editColumn('name', function($item){
                    return Str::upper($item->name);
                })
                ->editColumn('selling_price', function($item){
                    return 'Rp. '.number_format($item->selling_price, 0, ',', '.');
                })
                ->editColumn('updated_at', function($item){
                    return $item->updated_at->format('d/m/Y H:i');
                })
                ->addColumn('action', function($item){
                    return '<div class="d-flex justify-content-end">
                                <a class="btn btn-sm btn-primary me-2" style="background-color: #8F9098;">Action</a>
                            </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
            }

            return view('pages.admin.masterdata.index');

        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
