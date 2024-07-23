<?php

use App\Http\Controllers\Aplikasi;
use App\Http\Controllers\Brand;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produk;
use App\Http\Controllers\Keranjang;
use App\Http\Controllers\ProdukUser;
use App\Http\Controllers\Review;
use App\Http\Controllers\Transaksi;
use App\Http\Controllers\User;

Route::get('/homeuser', [ProdukUser::class, 'index'])->name('produk.index');
Route::get('/homeuser/cari', [ProdukUser::class, 'cari'])->name('produk.cari');
Route::post('/keranjang/tambah', [ProdukUser::class, 'tambahKeKeranjang'])->name('keranjang.tambah');
Route::get('/', function () {
    return view('home');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/shop', [ProdukUser::class, 'produk']);
Route::get('/detail/{id}', [ProdukUser::class, 'detail']);
Route::get('/profiladmin', function () {
    return view('profil_admin');
});
Route::get('/aplikasi', function () {
    return view('aplikasi_admin');
});

Route::get('/produk', [Produk::class, 'index']);
Route::get('/tabelproduk', [Produk::class, 'show']);
Route::get('/produk/form', [Produk::class, 'create']);
Route::get('/produk/form/{id}', [Produk::class, 'edit']);

Route::get('/brand', [Brand::class, 'index']);
Route::get('/brand/form', [Brand::class, 'create']);
Route::get('/brand/form/{id}', [Brand::class, 'edit']);

Route::get('/user', [User::class, 'index']);
Route::get('/user/form', [User::class, 'create']);
Route::get('/user/form/{id}', [User::class, 'edit']);

Route::get('/review', [Review::class, 'index']);
Route::get('/review/form', [Review::class, 'create']);
Route::get('/review/form/{id}', [Review::class, 'edit']);

Route::get('/keranjang', [Keranjang::class, 'index']);

Route::get('/checkout', [Transaksi::class, 'checkout']);
Route::post('/checkout', [Transaksi::class, 'store']);

Route::get('/transaksi', [Transaksi::class, 'index']);
Route::get('/transaksiuser', [Transaksi::class, 'indexx']);
Route::get('/aplikasi', [Aplikasi::class, 'index']);

Route::get('/laporan', [Transaksi::class, 'laporan']);

Route::post('/produk', [Produk::class, 'store_no_api']);
Route::post('/review', [Review::class, 'store_no_api']);
Route::post('/brand', [Brand::class, 'store_no_api']);

Route::get('/login', [User::class, 'login']);
Route::post('/login', [User::class, 'loginProcess']);
Route::get('/logout', [User::class, 'logout']);




