<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\AuthController;

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

Route::get('login',[AuthController::class,'index'])->name('login');
Route::post('proses_login',[AuthController::class,'proses_login']);
Route::get('logout',[AuthController::class,'logout']);
Route::get('registrasius',[AuthController::class,'registrasi'])->name('registrasi');
Route::post('simpanreg',[AuthController::class,'simpanregistrasi'])->name('simpanregistrasi');


Route::get('/halaman',[HalamanController::class,'halaman']);
Route::get('/testimoni',[HalamanController::class,'testimoni']);
Route::get('/product',[HalamanController::class,'product']);
Route::get('/about',[HalamanController::class,'about']);
Route::get('/bloglist',[HalamanController::class,'bloglist']);
Route::get('/contact',[HalamanController::class,'contact']);


Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::get('/cart/tambah/{buku}',[HalamanController::class,'tambah_cart']);
        Route::get('/tambah/transaksi',[HalamanController::class,'tambah_transaksi']);
        Route::get('/cart/hapus/',[HalamanController::class,'hapus_cart']);
        Route::get('/hapuscart1/{buku}',[HalamanController::class,'hapuscart1']);
        Route::get('/keranjang', [HalamanController::class,'cart']);
        Route::get('/pembelian', [HalamanController::class,'pembelian']);
        Route::get('/checkout/{id}', [HalamanController::class,'checkout']);
        Route::post('/simpancheckout/{id}', [HalamanController::class,'simpancheckout']);
    });
});
Route::group(['middleware' => ['auth','cek_login:admin']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('/admin',[HalamanController::class,'admin']);
        Route::get('/crud',[HalamanController::class,'crud']);
        Route::get('/buku',[HalamanController::class,'buku']);
        Route::get('/pelanggan',[HalamanController::class,'pelanggan']);
        Route::get('/dtkasir',[HalamanController::class,'dtkasir']);
        Route::get('/kasir',[HalamanController::class,'kasir']);
        Route::post('/simpankasir',[HalamanController::class,'simpankasir']);
        Route::post('/simpanisi',[HalamanController::class,'simpanisi']);
        Route::get('hapus/{id}', [HalamanController::class, 'hapus']);
        Route::get('edit/{id}', [HalamanController::class, 'edit']);
        Route::post('simpanedit/{buku}', [HalamanController::class, 'simpanedit']);
        Route::get('/cart/tambah/{buku}',[HalamanController::class,'tambah_cart']);
        Route::get('/tambah/transaksi',[HalamanController::class,'tambah_transaksi']);
        Route::get('/cart/hapus/',[HalamanController::class,'hapus_cart']);
        Route::get('/hapuscart1/{buku}',[HalamanController::class,'hapuscart1']);
        Route::get('/keranjang', [HalamanController::class,'cart']);
        Route::get('/pembelian', [HalamanController::class,'pembelian']);
        Route::get('/checkout/{id}', [HalamanController::class,'checkout']);
        Route::post('/simpancheckout/{id}', [HalamanController::class,'simpancheckout']);
        });
    });
