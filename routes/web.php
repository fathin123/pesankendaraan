<?php

use Illuminate\Support\Facades\Route;
use Illuminate\App\Http\Controllers\HomeController;
use Illuminate\App\Http\Controllers\LoginController;
use Illuminate\App\Http\Controllers\MobilController;
use Illuminate\App\Http\Controllers\JadwalController;
use Illuminate\App\Http\Controllers\PenjadwalanController;

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
    return view('welcome');
});

Auth::routes();


Route::get('/registrasi', [App\Http\Controllers\LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi', [App\Http\Controllers\LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [App\Http\Controllers\LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::group(['middeware' => ['auth','ceklevel:admin']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Route::get('/data-mobil', [App\Http\Controllers\MobilController::class, 'index'])->name('data-mobil');
Route::get('/create-mobil', [App\Http\Controllers\MobilController::class, 'create'])->name('create-mobil');
Route::post('/simpan-mobil', [App\Http\Controllers\MobilController::class, 'store'])->name('simpan-mobil');
Route::get('/edit-mobil/{id}', [App\Http\Controllers\MobilController::class, 'edit'])->name('edit-mobil');
Route::post('/update-mobil{id}', [App\Http\Controllers\MobilController::class, 'update'])->name('update-mobil');
Route::get('/delete-mobil/{id}', [App\Http\Controllers\MobilController::class, 'destroy'])->name('delete-mobil');

Route::get('/data-customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('data-customer');
Route::get('/create-customer', [App\Http\Controllers\CustomerController::class, 'create'])->name('create-customer');
Route::post('/simpan-customer', [App\Http\Controllers\CustomerController::class, 'store'])->name('simpan-customer');
Route::get('/edit-customer/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('edit-customer');
Route::post('/update-customer/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('update-customer');
Route::get('/delete-customer/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('delete-customer');

Route::group(['middeware' => ['auth','ceklevel:user']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
// Route::get('/hasil-penjadwalan', [App\Http\Controllers\PenjadwalanController::class, 'index'])->name('data-penjadwalan');
Route::get('/cetak-penjadwalan', [App\Http\Controllers\PenjadwalanController::class, 'cetak_pdf'])->name('cetak-penjadwalan');
Route::get('/data-penjadwalan', [App\Http\Controllers\PenjadwalanController::class, 'show'])->name('hasil-penjadwalan');
Route::get('/create-penjadwalan', [App\Http\Controllers\PenjadwalanController::class, 'create'])->name('create-penjadwalan');
Route::post('/simpan-penjadwalan', [App\Http\Controllers\PenjadwalanController::class, 'store'])->name('simpan-penjadwalan');
Route::get('/edit-penjadwalan/{id}', [App\Http\Controllers\PenjadwalanController::class, 'edit'])->name('edit-penjadwalan');
Route::post('/update-penjadwalan/{id}', [App\Http\Controllers\PenjadwalanController::class, 'update'])->name('update-penjadwalan');
Route::get('/delete-penjadwalan/{id}', [App\Http\Controllers\PenjadwalanController::class, 'destroy'])->name('delete-penjadwalan');