<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MasterDataController extends Controller
{
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $query = Product::with('category');

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
                    ->editColumn('category_id', function($item){
                        return $item->category->name; 
                    })
                    ->addColumn('action', function($item){
                        return '<div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="action_button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #8F9098; color: white">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="action_button">
                                        <li><a class="dropdown-item" href="masterdata/'.$item->id.'/edit">Edit Produk</a></li>
                                        <li><a class="dropdown-item" href="#">Tambah Stok Produk</a></li>
                                        <li><a class="dropdown-item" href="#">Detail Produk</a></li>
                                        <li>
                                            <form method="POST" action="masterdata/'.$item->id.'/delete" id="deleteForm">
                                                '.csrf_field().'
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="dropdown-item" id="submitForm" data-product-name="'.$item->name.'" data-product-sku-code="'.$item->sku_code.'">Hapus</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>';
                    })
                    ->filter(function ($query) use ($request) {
                    if ($request->has('category_id') && !empty($request->category_id)) {
                        $query->where('category_id', $request->category_id);
                    }
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

            $categories = category::all();

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

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        
        $locations = DB::table('products')
                ->select('location')
                ->distinct()
                ->get();

        $variants = DB::table('products')
            ->select('variant')
            ->distinct()
            ->get();

        $groups = DB::table('products')
            ->select('group')
            ->distinct()
            ->get();
        
        $categories = Category::all();
        
        $suppliers = Supplier::find($products->supplier_id);

        // dd([$products, $locations, $groups, $categories]);
            
        return view('pages.admin.masterdata.edit', compact([
            'products',
            'locations',
            'groups',
            'categories',
            'variants',
            'suppliers'
        ]));
    }
    public function update(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'avatar' => ['nullable', 'image', 'max:2048'],
                'name' => ['required', 'string', 'max:255'],
                'supplier' => ['required', 'string', 'max:255'],
                'variant' => ['required', 'string', 'max:255'],
                'group' => ['required', 'string', 'max:255'],
                'category' => ['required', 'string', 'max:255'],
                'sku_code' => ['required', 'string', 'max:255'],
                'location' => ['required', 'string', 'max:255'],
                'selling_price' => ['required', 'numeric'],
                'margin' => ['required', 'numeric'],
                'purchase_price' => ['required', 'numeric'],
                'is_consignment' => ['required', 'boolean'],
                'batch_code' => ['required', 'string', 'max:255'],
                'expired_date' => ['required', 'date'],
                'stock' => ['required', 'numeric'],
            ]);

            if ($validator->fails()){
                return back()->with('errors', $validator->messages()->all()[0])->withInput();
            }

            $validated = $request->all();
            $product = Product::where('id', $request->id)->first();

            // Upload Image
            if ($request->hasFile('avatar')) {
                if ($product->hasMedia('avatars')) {
                    $product->clearMediaCollection('avatars');
                }
                $product->addMediaFromRequest('avatar')->toMediaCollection('avatars');
            }

            $update = $product->update($validated);
            if ($update) {
                alert()->success('Perubahan berhasil disimpan!');
                return back();
            }
        } catch (\Throwable $th) {
            alert()->error($th->getMessage());
            return back();
        }
        return view('pages.admin.masterdata.update');
    }

    public function create()
    {
        return view('pages.admin.masterdata.create');
    }

    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();
            alert()->success('Produk berhasil dihapus!');
            return back();
        } catch (\Throwable $th) {
            alert()->error($th->getMessage());
            return back();
        }
    }
}
