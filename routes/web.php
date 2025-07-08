<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\StatistikController;
use App\Models\Kegiatan;
use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\Struktur;
use App\Models\Video;
use App\Models\Logo;
use App\Models\Statistik;

/*
|-------------------------------------------------------------------------- 
| 🏠 Halaman Utama (Frontend)
|-------------------------------------------------------------------------- 
*/
Route::get('/', function () {
    $kegiatan = Kegiatan::latest()->get();
    $berita = Berita::latest()->get();
    $pengumuman = Pengumuman::latest()->get();
    $struktur = Struktur::latest()->first();
    $videos = Video::latest()->get();
    $statistik = Statistik::latest()->first();
    return view('welcome', compact('kegiatan', 'berita', 'pengumuman', 'struktur', 'videos', 'statistik'));
});

// Detail berita & kegiatan
Route::get('/berita/{berita}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/kegiatan/show/{id}', [KegiatanController::class, 'showToUser'])->name('kegiatan.show');
Route::get('/pengumuman/list', [PengumumanController::class, 'list'])->name('pengumuman.list');

Route::get('/login', function () {
    return view('auth.login'); // Mengarah ke view login yang ada di resources/views/auth/login.blade.php
})->name('login');

/*
|-------------------------------------------------------------------------- 
| 🔐 Auth Laravel Breeze 
|-------------------------------------------------------------------------- 
*/
require __DIR__.'/auth.php';

/*
|-------------------------------------------------------------------------- 
| 👤 Route User Login (Non-admin) 
|-------------------------------------------------------------------------- 
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', fn () => view('admin.dashboard'))->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|-------------------------------------------------------------------------- 
| 🛠️ Route Admin (Prefix "admin", Middleware "admin") 
|-------------------------------------------------------------------------- 
*/
Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Statistik
Route::resource('statistik', \App\Http\Controllers\StatistikController::class)->only(['index', 'store', 'update']);


    // Logo
    Route::get('/logo', [LogoController::class, 'index'])->name('logo.index');
    Route::post('/logo', [LogoController::class, 'store'])->name('logo.store');

    // Kegiatan
    Route::resource('kegiatan', KegiatanController::class)->except(['show']);

    // Pengumuman
    Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
    Route::post('/pengumuman', [PengumumanController::class, 'store'])->name('pengumuman.store');
    Route::get('/pengumuman/{pengumuman}/edit', [PengumumanController::class, 'edit'])->name('pengumuman.edit');
    Route::delete('/pengumuman/{pengumuman}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');

    // Struktur
    Route::get('/struktur', [StrukturController::class, 'index'])->name('struktur.index');
    Route::post('/struktur', [StrukturController::class, 'store'])->name('struktur.store');
    Route::put('/struktur/{id}', [StrukturController::class, 'update'])->name('struktur.update');
    Route::delete('/struktur/{id}', [StrukturController::class, 'destroy'])->name('struktur.destroy');

    // Berita
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::get('/berita/{berita}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{berita}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('berita.destroy');
 // Route untuk menampilkan video
    // Video
   Route::get('/video', [VideoController::class, 'index'])->name('video.index');
    Route::post('/video', [VideoController::class, 'store'])->name('video.store');
    Route::delete('/video/{video}', [VideoController::class, 'destroy'])->name('video.destroy');
});

