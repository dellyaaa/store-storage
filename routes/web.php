<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BerhitungController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Database\Events\TransactionRolledBack;
use Illuminate\Support\Facades\Route;

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

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/smktelkompwt', function () {
    return 'SMK Telkom';
});

Route::get('/user/{id}', function($id) {
    return 'SMK Telkom Purwokerto' .$id;
});

Route::get('/user/{name?}', function ($name = 'Adel') {
    return $name;
});

Route::get('/', function(){
    return view('welcome');
})->name('home');

Route::get('/pendataan', function (){
    return view('pendataan');
})->name('pendataan');

Route::get('/hitung', [BerhitungController:: class, 'hitung']);

Route::get('/daftar', [TestController::class, 'daftar']);
Route::post('/kirim', [TestController::class, 'kirim']);

Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/transaksi', [TransaksiController::class,'index']);
Route::get('/pembeli', [PembeliController::class,'index']);
Route::get('/kasir', [KasirController::class,'index']);



// Route untuk table barang
Route::get('/barang', [BarangController::class,'index']);
Route::get('/tambahbarang', [BarangController::class,'tambahbarang']);
Route::post('/barang', [BarangController::class,'barang']);
Route::get('/barang/{barang_id}', [BarangController::class,'show']);
Route::get('/barang/{barang_id}/edit', [BarangController::class,'edit']);
Route::put('/barang/{barang_id}', [BarangController::class,'update']);
Route::delete('/barang/{barang_id}', [BarangController::class,'destroy']);


// Route untuk table pembeli
Route::get('/pembeli', [PembeliController::class,'index']);
Route::get('/tambahpembeli', [PembeliController::class,'tambahpembeli']);
Route::post('/pembeli', [PembeliController::class,'pembeli']);
Route::get('/pembeli/{pembeli_id}', [PembeliController::class,'show']);
Route::get('/pembeli/{pembeli_id}/edit', [PembeliController::class,'edit']);
Route::put('/pembeli/{pembeli_id}', [PembeliController::class,'update']);
Route::delete('/pembeli/{pembeli_id}', [PembeliController::class,'destroy']);

// Route untuk table kasir
Route::get('/kasir', [KasirController::class,'index']);
Route::get('/tambahkasir', [KasirController::class,'tambahkasir']);
Route::post('/kasir', [KasirController::class,'kasir']);
Route::get('/kasir/{kasir_id}', [KasirController::class,'show']);
Route::get('/kasir/{kasir_id}/edit', [KasirController::class,'edit']);
Route::put('/kasir/{kasir_id}', [KasirController::class,'update']);
Route::delete('/kasir/{kasir_id}', [KasirController::class,'destroy']);


// Route untuk table transaksi
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/tambahtransaksi', [TransaksiController::class, 'tambahtransaksi']);
Route::post('/transaksi', [TransaksiController::class, 'transaksi']);
Route::get('/transaksi/{id}', [TransaksiController::class, 'show']);
Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'edit']);
Route::put('/transaksi/{id}', [TransaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy']);


