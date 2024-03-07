<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
	// Dashboard
	Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

	// Profiles
	Route::get('/profiles', [AdminProfileController::class, 'show'])->name('profiles.show');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
