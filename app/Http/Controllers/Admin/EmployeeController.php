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
		try {
			if ($request->ajax()) {
				$query = User::query()->where('role', '<>', 'owner');

				return DataTables::eloquent($query)
					->addIndexColumn()
					->editColumn('role', function ($data) {
						if ($data->role == 'cashier') return '<span class="badge badge-info">Kasir</span>';
						if ($data->role == 'finance') return '<span class="badge badge-warning">Keuangan</span>';
						if ($data->role == 'warehouse') return '<span class="badge badge-secondary">Pergudangan</span>';
						return '-';
					})
					->addColumn('shift', function ($data) {
						return '
							<span>06.00 - 15.00</span> <br>
							<span class="badge badge-secondary badge-sm">+1 shift lainnya</span>
						';
					})
					->addColumn('action', function ($data) {
						return '
							<a href="#edit_data_' . $data->id . '" class="btn btn-sm btn-icon bg-body">
								<i class="ki-solid ki-pencil text-dark fs-1"></i>
							</a>
							<a href="#hapus_data_' . $data->id . '" class="btn btn-sm btn-icon bg-body">
								<i class="ki-solid ki-trash text-danger fs-1"></i>
							</a>
						';
					})
					->rawColumns(['action', 'role', 'shift', 'phone'])
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
		try {
			return view('pages.admin.employees.form', [
				'method' => 'POST',
				'action' => route('admin.employees.store'),
			]);
		} catch (\Throwable $th) {
			//throw $th;
		}
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
