<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EmployeeController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index(Request $request)
	{
		// $query = User::query()->where('role', '<>', 'owner')->get();
		// dd($query->toArray());

		try {
			if ($request->ajax()) {
				$query = User::query()->where('role', '<>', 'owner');

				return DataTables::eloquent($query)
					->addIndexColumn()
					->addColumn('action', function ($data) {
						return '
							<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
								data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
								<i class="ki-outline ki-down fs-5 ms-1"></i>
							</a>
						';
					})
					->rawColumns(['action'])
					->make(true);
			}

			return view('pages.admin.employees.index');
		} catch (\Throwable $th) {
			// throw $th;
			alert()->error($th->getMessage());
			return back();
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
