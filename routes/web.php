<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TentangController;

// ROUTE AKTIF
Route::get('/', function () {
    return view('index');
});

Auth::routes();

// Home | Admin
Route::get('/home', [HomeController::class, 'index'])->name('admin.beranda.index');

// Home | User
Route::get('/user/home', [HomeController::class, 'index_user'])->name('user.beranda.index');

// Berita | Admin
Route::get('/dashboard/berita', [BeritaController::class, 'index'])->name('admin.berita.index');
Route::get('/dashboard/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
Route::post('/dashboard/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
Route::get('/dashboard/berita/{id}/read', [BeritaController::class, 'show'])->name('admin.berita.read');
Route::get('/dashboard/berita/{id}/update', [BeritaController::class, 'edit'])->name('admin.berita.edit');
Route::put('/dashboard/berita/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
Route::delete('/dashboard/berita/{id}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');

// Berita | User
Route::get('/user/berita', [BeritaController::class, 'index_user'])->name('user.berita.index');
Route::get('/user/berita/{id}/read', [BeritaController::class, 'show_user'])->name('user.berita.read');

// Pengumuman | Admin
Route::get('/dashboard/pengumuman', [PengumumanController::class, 'index'])->name('admin.pengumuman.index');
Route::get('/dashboard/pengumuman/create', [PengumumanController::class, 'create'])->name('admin.pengumuman.create');
Route::post('/dashboard/pengumuman', [PengumumanController::class, 'store'])->name('admin.pengumuman.store');
Route::get('/dashboard/pengumuman/{id}/read', [PengumumanController::class, 'show'])->name('admin.pengumuman.read');
Route::get('/dashboard/pengumuman/{id}/update', [PengumumanController::class, 'edit'])->name('admin.pengumuman.edit');
Route::put('/dashboard/pengumuman/{id}', [PengumumanController::class, 'update'])->name('admin.pengumuman.update');
Route::delete('/dashboard/pengumuman/{id}', [PengumumanController::class, 'destroy'])->name('admin.pengumuman.destroy');

// Pengumuman | User
Route::get('/user/pengumuman', [PengumumanController::class, 'index_user'])->name('user.pengumuman.index');
Route::get('/user/pengumuman/{id}/read', [PengumumanController::class, 'show_user'])->name('user.pengumuman.read');

// Kontak | Admin
Route::get('/dashboard/kontak', [KontakController::class, 'index'])->name('admin.kontak.index');

// Kontak | User
Route::get('/user/kontak', [KontakController::class, 'index_user'])->name('user.kontak.index');

// Tentang | Admin
Route::get('/dashboard/tentang', [TentangController::class, 'index'])->name('admin.tentang.index');

// Tentang | User
Route::get('/user/tentang', [TentangController::class, 'index_user'])->name('user.tentang.index');

// ------------------------------------------------------------------------------------------------------------------

// ROUTE TEST
Route::get('/test', function () {
    return view('welcome');
});
