<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shift;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
		try {
			$validator = Validator::make($request->all(), [
				'name' => 'required|string|max:255',
				'jabatan' => 'required|string|in:cashier,warehouse,finance',
				'address' => 'required|string|max:255',
				'phone_number' => 'required|string|max:255',
				'email' => 'required|string|email|max:255|unique:users',
				'password' => 'required|string|min:8',
				'avatar' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
				'license_number' => 'required|string|max:255',
				'berlaku_sampai' => 'required|date_format:Y-m-d',
				'shifts' => 'required|array',
				'shifts.*.hari' => 'required|string|in:senin,selasa,rabu,kamis,jumat,sabtu,minggu',
				'shifts.*.jam_masuk' => 'required|string',
				'shifts.*.jam_pulang' => 'required|string',
			]);

			if ($validator->fails()) {
				return back()->with('errors', $validator->messages()->all()[0])->withInput();
			}

			dd($request->all());

			$user = new User();
			$user->name = $request->input('name');
			$user->role = $request->input('jabatan');
			$user->address = $request->input('address');
			$user->phone_number = $request->input('phone_number');
			$user->email = $request->input('email');
			$user->password = bcrypt($request->input('password'));
			$user->no_sipa = $request->input('no_sipa');
			$user->berlaku_sampai = $request->input('berlaku_sampai');

			// Upload avatar
			if ($request->hasFile('avatar')) {
				$avatar = $request->file('avatar');
				$avatarName = time() . '.' . $avatar->getClientOriginalExtension();
				$avatar->move(public_path('avatars'), $avatarName);
				$user->avatar = $avatarName;
			}

			$user->save();

			foreach ($request->input('shifts') as $shiftData) {
				$shift = new Shift();
				$shift->user_id = $user->id;
				$shift->hari = $shiftData['hari'];
				$shift->jam_masuk = $shiftData['jam_masuk'];
				$shift->jam_pulang = $shiftData['jam_pulang'];
				$shift->save();
			}

			return response()->json(['message' => 'User created successfully'], 200);
		} catch (\Throwable $th) {
			//throw $th;
		}
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
