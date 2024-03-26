<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;

class SaleController extends Controller
{
    public function index()
    {
        $sale = Sale::all();
        return view('pages.admin.sale.index', compact('sale'))->with('title', 'Penjualan') ;
    }
}
