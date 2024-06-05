<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('detailBerita');
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('strukturOrganisasi');
Route::get('/visi-misi', [VisiMisiController::class, 'index'])->name('visiMisi');
Route::get('/unit/semua-usaha', [UnitController::class, 'index'])->name('unit');
Route::get('/unit/{jenis_usaha}', [UnitController::class, 'show'])->name('unitJenis');
Route::get('/galeri-kegiatan', [GalleryController::class, 'index'])->name('galeriKegiatan');
Route::get('/galeri-video', [GalleryController::class, 'show'])->name('galeriVideo');
Route::get('/kontak', [ContactController::class, 'index'])->name('kontak');

Route::get('/dashboard', function () {
    return view('layouts.master');
})->middleware(['auth',   'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';