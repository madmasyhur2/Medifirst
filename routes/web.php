<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\HomeController;
use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', function () {
	return view('welcome');
});

Auth::routes(['verify' => true]);

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
	// Dashboard
	Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

	// Profiles
	Route::get('/profiles', [AdminProfileController::class, 'show'])->name('profiles.show');
	Route::put('/profiles/update', [AdminProfileController::class, 'update'])->name('profiles.update');
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
