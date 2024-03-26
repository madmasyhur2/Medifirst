<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PharmacyController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index(Request $request)
	{
		try {
			if ($request->ajax()) {
				$query = Store::query();
				return DataTables::eloquent($query);
			}
			return view('pages.admin.accounts.pharmacies.index');
		} catch (\Throwable $th) {
			//throw $th;
		}
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		//
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
