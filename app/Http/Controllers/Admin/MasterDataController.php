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
use App\Models\Batch;
use Illuminate\Support\Facades\Log;

class MasterDataController extends Controller
{
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $query = Product::with(['category', 'batches']);

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
                    ->editColumn('stock', function($item){
                        $stock = 0;
                        foreach($item->batches as $batch){
                            $stock += $batch->stock;
                        }
                        return $stock;
                    })
                    ->addColumn('action', function($item){
                        return '<div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="action_button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #8F9098; color: white">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="action_button">
                                        <li><a class="dropdown-item" href="masterdata/'.$item->id.'/edit">Edit Produk</a></li>
                                        <li><a class="dropdown-item" href="#">Tambah Stok Produk</a></li>
                                        <li><a class="dropdown-item" href="masterdata/'.$item->id.'/details">Detail Produk</a></li>
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

    public function show($id)
    {
        $products = Product::find($id);
        $category = Category::find($products->category_id);
        $supplier = Supplier::find($products->supplier_id);
        $batches = Batch::where('product_id', $id)->get();
        $totalStock = 0;
        foreach ($batches as $batch) {
            $totalStock += $batch->stock;
        }

        // dd([$products, $category, $supplier, $batches, $totalStock]);
        // dd($batches);

        return view('pages.admin.masterdata.details', compact([
            'products',
            'category',
            'supplier',
            'batches',
            'totalStock'
        ]));
    }

    public function edit($id)
    {
        $products = Product::find($id);

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

        $batches = Batch::where('product_id', $id)->get();
        $totalStock = 0;
        foreach ($batches as $batch) {
            $totalStock += $batch->stock;
        }

        // dd([$products, $groups, $categories, $variants, $suppliers, $batches, $totalStock]);
            
        return view('pages.admin.masterdata.edit', compact([
            'products',
            'groups',
            'categories',
            'variants',
            'suppliers',
            'batches',
            'totalStock'
        ]));
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'nullable|string|max:255',
                'supplier' => 'nullable|string|max:255',
                'sku_code' => 'nullable|string|max:255',
                'location' => 'nullable|string|max:255',
                'cost' => 'nullable|numeric',
                'margin' => 'nullable|numeric',
                'selling_price' => 'nullable|numeric',
                'is_consignment' => 'boolean',
                'batch_code.*' => 'nullable|string|max:255',
                'expired_at.*' => 'nullable|date',
                'stock.*' => 'nullable|integer',
            ]);

            if ($validator->fails()){
                return back()->with('errors', $validator->messages()->all()[0])->withInput();
            }

            $validated = $request->except('_token', '_method');
            $product = Product::findOrFail($id);

            // Upload Image
            if ($request->hasFile('avatar')) {
                if ($product->hasMedia('avatars')) {
                    $product->clearMediaCollection('avatars');
                }
                $product->addMediaFromRequest('avatar')->toMediaCollection('avatars');
            }

            $product->update($validated);
            // Update Batch
            // Update existing batches
            if ($request->has('batches') && is_array($request->batches)) {
                foreach ($request->batches as $index => $batchData) {
                    if (isset($batchData['id'])) {
                        $batch = Batch::findOrFail($batchData['id']);
                        $batch->update([
                            'batch_code' => $request->batch_code[$index],
                            'stock' => $request->stock[$index],
                            'expired_at' => $request->expired_at[$index],
                        ]);
                    }
                }
            }

            // Create new batches
            if ($request->has('new_batches') && is_array($request->new_batches)) {
                foreach ($request->new_batches as $index => $newBatchData) {
                    if (!isset($newBatchData['id'])) {
                        Batch::create([
                            'product_id' => $product->id,
                            'batch_code' => $request->batch_code[$index],
                            'stock' => $request->stock[$index],
                            'expired_at' => $request->expired_at[$index],
                        ]);
                    }
                }
            }

            alert()->success('Perubahan berhasil disimpan!');
            return redirect()->route('admin.masterdata.index');
        } catch (\Throwable $th) {
            alert()->error($th->getMessage());
            return back();
        }
    }


    public function create()
    {
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

        $suppliers = Supplier::all();

        // dd([$locations, $groups, $categories, $variants]);

        return view('pages.admin.masterdata.create', compact([
            'locations',
            'groups',
            'categories',
            'variants',
            'suppliers'
        ]));
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'avatar' => ['nullable', 'image', 'max:2048'],
                'name' => ['nullable', 'string', 'max:255'],
                'supplier_id' => ['nullable', 'string', 'max:255'],
                'variant' => ['nullable', 'string', 'max:255'],
                'group' => ['nullable', 'string', 'max:255'],
                'category_id' => ['nullable', 'string', 'max:255'],
                'sku_code' => ['nullable', 'string', 'max:255'],
                'location' => ['nullable', 'string', 'max:255'],
                'selling_price' => ['nullable', 'numeric'],
                'cost' => ['nullable', 'numeric'],
                'margin' => ['nullable', 'numeric'],
                'purchase_price' => ['nullable', 'numeric'],
                'is_consignment' => ['nullable', 'boolean'],
                'batch'=> ['nullable', 'array'],
                'batch_code.*' => ['nullable', 'string', 'max:255'],
                'expired_at.*' => ['nullable', 'date'],
                'stock.*' => ['nullable', 'numeric'],
            ]);

            if ($validator->fails()){
                return back()->with('errors', $validator->messages()->all()[0])->withInput();
            }

            $validated = $request->except('_token', '_method');
            $validated['supplier_id'] = $request->supplier_id;
            $validated['category_id'] = $request->category_id;

            if (!array_key_exists('is_consignment', $validated)) {
                $validated['is_consignment'] = 0; 
            }

            $product = Product::create($validated);
            $batch = Batch::create([
                'product_id' => $product->id,
                'batch_code' => $request->batch_code,
                'stock' => $request->stock,
                'expired_at' => $request->expired_at,
            ]);

            // Upload Image
            if ($request->hasFile('avatar')) {
                $product->addMediaFromRequest('avatar')->toMediaCollection('avatars');
            }

            if ($product) {
                alert()->success('Produk berhasil ditambahkan!');
                return redirect()->route('admin.masterdata.index');
            }
        } catch (\Throwable $th) {
            alert()->error($th->getMessage());
            return back();
        }
        return redirect()->route('admin.masterdata.index');
    }

    public function destroyProduct($id)
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

    public function destroyBatch($id)
    {
        try {
            $batch = Batch::findOrFail($id);
            $batch->delete();
            alert()->success('Batch berhasil dihapus!');
            return back();
        } catch (\Throwable $th) {
            alert()->error($th->getMessage());
            return back();
        }
    }
}
