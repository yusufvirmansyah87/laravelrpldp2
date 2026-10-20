<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KategoriArtikelController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
	->name('home');

Route::get('/admin', [DashboardController::class,'index'])
	->name('dashboard');

Route::resource('/admin/kategori', KategoriArtikelController::class)
	->except(['show']);

Route::get('/profil', [ProfilController::class, 'profil'])
	->name('profil');

Route::get('/produk', function () {
	return view('pages.produk');
});

Route::get('/artikel', function () {
	return view('pages.artikel');
});

Route::get('/kontak', function () {
	return view('pages.kontak');
});

//Admim Route
Route::resource('/admin/kategori', KategoriArtikelController::class)
->except(['show']);

?>