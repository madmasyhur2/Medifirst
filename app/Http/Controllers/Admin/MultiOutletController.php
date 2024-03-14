<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MultiOutletController extends Controller
{
    public function index()
    {
        return view('pages.admin.multioutlet.index');
    }
}
