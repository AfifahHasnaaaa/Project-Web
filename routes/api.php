<?php

use App\Http\Controllers\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produk;
use App\Http\Controllers\Keranjang;
use App\Http\Controllers\Review;
use App\Http\Controllers\Transaksi;
use App\Http\Controllers\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/produk/all', [Produk::class, 'getListProduk']);
Route::get('/produk/kode/{kode}', [Produk::class, 'getByKode']);
Route::post('/produk/input', [Produk::class, 'store']);
Route::put('/produk/input', [Produk::class, 'update']);
Route::delete('/produk/hapus', [Produk::class, 'destroy']);

Route::get('/brand/all', [Brand::class, 'getListBrand']);
Route::get('/brand/kode/{kode}', [Brand::class, 'getByKode']);
Route::post('/brand/input', [Brand::class, 'store']);
Route::put('/brand/input', [Brand::class, 'update']);
Route::delete('/brand/hapus', [Brand::class, 'destroy']);

Route::get('/user/all', [User::class, 'getListBrand']);
Route::get('/user/kode/{kode}', [User::class, 'getByKode']);
Route::post('/user/input', [User::class, 'store']);
Route::put('/user/input', [User::class, 'update']);
Route::delete('/user/hapus', [User::class, 'destroy']);

Route::get('/review/all', [Review::class, 'getListBrand']);
Route::get('/review/kode/{kode}', [Review::class, 'getByKode']);
Route::post('/review/input', [Review::class, 'store']);
Route::put('/review/input', [Review::class, 'update']);
Route::delete('/review/hapus', [Review::class, 'destroy']);

Route::get('/keranjang/all', [Keranjang::class, 'getList']);
Route::post('/keranjang', [Keranjang::class, 'store']);

Route::get('/produk/dataTable', [Produk::class, 'dataDatables']);
Route::get('/brand/dataTable', [Brand::class, 'dataDatables']);
Route::get('/review/dataTable', [Review::class, 'dataDatables']);
Route::get('/transaksi/dataTable', [Transaksi::class, 'dataDatables']);
Route::get('/user/dataTable', [User::class, 'dataDatables']);

Route::get('/provinsi', [Keranjang::class, 'get_prov']);
Route::get('/kota/{kode}', [Keranjang::class, 'get_kota']);
Route::get('/kecamatan/{kode}', [Keranjang::class, 'get_kec']);

Route::get('/transaksi/laporan', [Transaksi::class, 'laporan_api']);


