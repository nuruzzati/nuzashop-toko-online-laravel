<?php

use Illuminate\Support\Facades\Route;

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
use Illuminate\Support\Facades\Auth;

Route::get('/','UserController@index');

Auth::routes();

Route::middleware(['auth.check'])->group(function () {
// routes navbar-utama
Route::get('/home', 'HomeController@index');
Route::get('/kategori', 'HomeController@kategori');
Route::get('/produk', 'HomeController@produk');
Route::get('/pembelian', 'HomeController@pembelian');
Route::get('/pembelian/cetak_pdf', 'HomeController@cetak_pdf');

Route::get('/pelanggan', 'HomeController@pelanggan');
Route::get('/logout', 'HomeController@logout');
});

// routes all kategori
Route::get('/kategori/tambah', 'KategoriController@tambah');
Route::post('/kategori/tambah/proses', 'KategoriController@tambah_proses');

Route::get('/kategori/cari', 'KategoriController@cari');
Route::get('/produk/cari', 'ProdukController@cari');


Route::get('/kategori/edit/{id}', 'kategoriController@edit');
	
Route::put('/kategori/update/{id}', 'KategoriController@update');
Route::get('/kategori/hapus/{id}', 'KategoriController@delete');




// routes all produk
Route::get('/produk/tambah', 'ProdukController@tambah');
Route::post('/produk/store', 'ProdukController@store');

Route::get('/produk/edit/{id}', 'ProdukController@edit');


	
Route::put('/produk/update/{id}', 'ProdukController@update');


Route::get('/produk/hapus/{id}', 'ProdukController@delete');


Route::get('/produk/detail/{produk:nama_produk}', 'ProdukController@detail');

// user
Route::get('/produkByKategori/{kategori}', 'ProdukController@produkByKategori')->name('produkByKategori');


// notifikasi
Route::get('/pesan','NotifController@index');
Route::get('/pesan/sukses','NotifController@sukses');
Route::get('/pesan/peringatan','NotifController@peringatan');
Route::get('/pesan/gagal','NotifController@gagal');



// belajar slug di post

Route::get('/posts','PostsController@posts');
Route::get('/posts/{post:slug}','PostsController@post');








