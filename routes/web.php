<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\EmployeeController as AdminEmployeeController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\FinanceController as AdminFinanceController;
use App\Http\Controllers\Admin\MasterDataController as AdminMasterDataController;
use App\Http\Controllers\Admin\MultiOutletController as AdminMultiOutletController;
use App\Http\Controllers\Admin\PurchaseController as AdminPurchaseController;
use App\Http\Controllers\Admin\ReportController as AdminReportController;
use App\Http\Controllers\Admin\SaleController as AdminSaleController;
use App\Http\Controllers\Admin\MembershipController as AdminMembershipController;

use App\Http\Controllers\Admin\Account\PharmacyController;

use App\Http\Controllers\HomeController;

use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', function () {
	return view('welcome');
});

Auth::routes(['verify' => true]);

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

	// Dashboard
	Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

	// Account - Tab Owner
	Route::get('/profiles', [AdminProfileController::class, 'index'])->name('profiles.index');
	Route::get('/profiles/edit', [AdminProfileController::class, 'edit'])->name('profiles.edit');
	Route::put('/profiles/update', [AdminProfileController::class, 'update'])->name('profiles.update');

	// Account - Tab Karyawan
	Route::get('/employees/{id}/shifts/edit', [AdminEmployeeController::class, 'editShift'])->name('employees.shifts.edit');
	Route::put('/employees/{id}/shifts/update', [AdminEmployeeController::class, 'updateShift'])->name('employees.shifts.update');
	Route::resource('employees', AdminEmployeeController::class);

	// Account - Tab Apotek
	Route::resource('pharmacies', PharmacyController::class);

	// Contact
	Route::get('/contacts', [AdminContactController::class, 'index'])->name('contact.index');

	// Finance
	Route::get('/finances', [AdminFinanceController::class, 'index'])->name('finance.index');

	// Masterdata
	Route::get('/masterdata', [AdminMasterDataController::class, 'index'])->name('masterdata.index');
	Route::get('/masterdata/{id}/edit', [AdminMasterDataController::class, 'edit'])->name('masterdata.edit');
	Route::put('/masterdata/{id}/update', [AdminMasterDataController::class, 'update'])->name('masterdata.update');
	Route::get('/masterdata/create', [AdminMasterDataController::class, 'create'])->name('masterdata.create');
	Route::post('/masterdata', [AdminMasterDataController::class, 'store'])->name('masterdata.store');
	Route::get('/masterdata/{id}/details', [AdminMasterDataController::class, 'show'])->name('masterdata.show');
	Route::delete('/masterdata/{id}/details/delete', [AdminMasterDataController::class, 'destroyBatch'])->name('masterdata.destroyBatch');
	Route::get('/masterdata/add-multiple', [AdminMasterDataController::class, 'addMultiple'])->name('masterdata.create-multiple');
	Route::delete('/masterdata/{id}/delete', [AdminMasterDataController::class, 'destroyProduct'])->name('masterdata.destroyProduct');
	Route::post('/masterdata/{id}/add-stock', [AdminMasterDataController::class, 'storeBatch'])->name('masterdata.store-batch');

	// Membership
	Route::get('/membership', [AdminMembershipController::class, 'index'])->name('membership.index');
	Route::get('/membership/create', [AdminMembershipController::class, 'create'])->name('membership.create');
	Route::post('/membership', [AdminMembershipController::class, 'store'])->name('membership.store');
	Route::get('/membership/{id}/edit', [AdminMembershipController::class, 'edit'])->name('membership.edit');
	Route::put('/membership/{id}/update', [AdminMembershipController::class, 'update'])->name('membership.update');
	Route::delete('/membership/{id}/delete', [AdminMembershipController::class, 'destroy'])->name('membership.destroy');

	// Multioutlet
	Route::get('/multioutlet', [AdminMultiOutletController::class, 'index'])->name('multioutlet.index');

	// Purchase
	Route::get('/purchase', [AdminPurchaseController::class, 'index'])->name('purchase.index');

	// Report
	Route::get('/report', [AdminReportController::class, 'index'])->name('report.index');

	// Sale
	Route::get('/sale', [AdminSaleController::class, 'index'])->name('sale.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');

// test sweet alert
Route::get('/test', function () {
	Alert::success('Success Title', 'Success Message');
	// Alert::error('Error Title', 'Error Message');
	// Alert::warning('Warning Title', 'Warning Message');
	// Alert::info('Info Title', 'Info Message');
	// Alert::question('Question Title', 'Question Message');
	// toast('Success Message', 'success');
	// toast('Info Message', 'info');
	// toast('Error Message', 'error');
	// toast('Warning Message', 'warning');
	// toast('Question Message', 'question');
	return view('welcome');
});
