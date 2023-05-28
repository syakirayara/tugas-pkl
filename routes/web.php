<?php

use App\Http\Controllers\AdminTamuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserTamuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

//bagian user

Route::post('simpan-bukutamu',[TamuController::class, 'simpanTamu'])->name('simpan-bukutamu');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//bagian admin

Route::get('admin/tamu', [AdminTamuController::class, 'index'])->name('admin/tamu');

Route::get('admin/form-edit/{id}',[AdminTamuController::class, 'formEdit'])->name('admin-form-edit');

Route::post('admin/update-data', [UserTamuController::class, 'updateTamu'])->name('admin-update-data');

Route::post('admin/hapus-data', [UserTamuController::class, 'hapusTamu'])->name('admin-hapus-data');

Route::get('register', [UserController::class, 'register'])->name('register');

Route::post('register', [UserController::class, 'register_action'])->name('register.action');