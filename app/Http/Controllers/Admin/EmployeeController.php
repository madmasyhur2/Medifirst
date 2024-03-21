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
				$query = User::query()->with(['shifts'])->where('role', '<>', 'owner');

				if ($request->has('role') && $request->role != 'all') {
					$query->where('role', $request->role);
				}

				return DataTables::eloquent($query)
					->addIndexColumn()
					->editColumn('role', function ($data) {
						if ($data->role == 'cashier') return '<span class="badge badge-info">Kasir</span>';
						if ($data->role == 'finance') return '<span class="badge badge-warning">Keuangan</span>';
						if ($data->role == 'warehouse') return '<span class="badge badge-secondary">Pergudangan</span>';
						return '-';
					})
					->addColumn('shift', function ($data) {
						$firstShift = $data->shifts->first();
						$remainingShiftsCount = $data->shifts->count() - 1;

						$shiftInfo = '<span>' . $firstShift->jam_masuk . ' - ' . $firstShift->jam_pulang . '</span>';

						if ($remainingShiftsCount > 0) {
							$shiftInfo .= '<br><span class="badge badge-secondary badge-sm">+' . $remainingShiftsCount . ' shift lainnya</span>';
						}

						return $shiftInfo;
					})
					->addColumn('action', function ($data) {
						return '
							<a href=" ' . route('admin.employees.show', $data->id) . ' " class="btn btn-sm btn-icon bg-body">
								<i class="ki-outline ki-information-5 text-dark fs-1"></i>
							</a>
							<a role="button" data-id="' . $data->id . '" data-user-name="' . $data->name . '" data-user-role="' . $data->role . '" class="btn btn-sm btn-icon bg-body delete-confirm">
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

			// dd($request->all());

			$user = User::create([
				'name' => $request->input('name'),
				'role' => $request->input('jabatan'),
				'address' => $request->input('address'),
				'phone_number' => $request->input('phone_number'),
				'email' => $request->input('email'),
				'password' => bcrypt($request->input('password')),
				'license_number' => $request->input('license_number'),
				'license_expired_date' => $request->input('berlaku_sampai'),
			]);

			// Upload avatar
			if ($request->hasFile('avatar')) {
				$user->addMediaFromRequest('avatar')->toMediaCollection('avatars');
			}

			$user->assignRole($request->input('jabatan'));

			foreach ($request->input('shifts') as $shiftData) {
				$user->shifts()->create([
					'hari' => $shiftData['hari'],
					'jam_masuk' => $shiftData['jam_masuk'],
					'jam_pulang' => $shiftData['jam_pulang'],
				]);
			}

			alert()->success('Karyawan berhasil ditambahkan!');
			return redirect()->route('admin.employees.index');
		} catch (\Throwable $th) {
			//throw $th;
			alert()->error($th->getMessage());
			return back()->withInput();
		}
	}

	/**
	 * Display the specified resource.
	 */
	public function show(string $id)
	{
		try {
			$employee = User::with(['shifts'])->where('id', $id)->firstOrFail();
			return view('pages.admin.employees.show', [
				'employee' => $employee,
			]);
		} catch (\Throwable $th) {
			//throw $th;
			alert()->error($th->getMessage());
			return back();
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(string $id)
	{
		try {
			//code...
		} catch (\Throwable $th) {
			//throw $th;
		}
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
		try {
			$user = User::findOrFail($id);

			$user->shifts()->delete();
			$user->delete();

			return response()->json([
				'success' => true,
				'message' => 'Data deleted successfully'
			]);
		} catch (\Throwable $th) {
			return response()->json([
				'success' => false,
				'message' => $th->getMessage()
			]);
		}
	}

	/**
	 * shiftsUpdate
	 *
	 * @return void
	 */
	public function shiftsUpdate()
	{
		try {
			//code...
		} catch (\Throwable $th) {
			//throw $th;
		}
	}
}
