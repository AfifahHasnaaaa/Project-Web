<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produk;
use App\Http\Controllers\Keranjang;
use App\Http\Controllers\Transaksi;
use App\Http\Controllers\User;

Route::get('/', function () {
    return view('home');
});
Route::get('/user', function () {
    return view('home_user');
});
Route::get('/admin', function () {
    return view('home_admin');
});
Route::get('/data', function () {
    return view('data_admin');
});
Route::get('/laporan', function () {
    return view('laporan_admin');
});
Route::get('/aplikasi', function () {
    return view('aplikasi_admin');
});
Route::get('/kontakuser', function () {
    return view('contact_user');
});
Route::get('/wishlist', function () {
    return view('wishlist_user');
});
Route::get('/faq', function () {
    return view('faq_user');
});
Route::get('/cart', function () {
    return view('cart_user');
});
Route::get('/produkk', function () {
    return view('podukk_user');
});
Route::get('/detail', function () {
    return view('detail_produkk_user');
});
// Route::get('/', [Produk::class, 'index']);
// Route::get('/', [Produk::class, 'index']);
Route::get('/produk', [Produk::class, 'index']);
Route::get('/produk/form', [Produk::class, 'create']);
Route::get('/produk/form/{id}', [Produk::class, 'edit']);
Route::get('/keranjang', [Keranjang::class, 'index']);

Route::get('/checkout', [Transaksi::class, 'checkout']);
Route::post('/checkout', [Transaksi::class, 'store']);

Route::get('/transaksi', [Transaksi::class, 'index']);

Route::get('/laporan', [Transaksi::class, 'laporan']);

Route::post('/produk', [Produk::class, 'store_no_api']);

Route::get('/login', [User::class, 'login']);
Route::post('/login', [User::class, 'loginProcess']);
Route::get('/logout', [User::class, 'logout']);




