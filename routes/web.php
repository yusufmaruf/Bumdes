<?php

use GuzzleHttp\Middleware;
use App\Models\CategoryPost;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BumdesController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\JenisUsahaController;
use App\Http\Controllers\CategoryPostController;
use App\Http\Controllers\editProfilPengguna;
use App\Http\Controllers\ReportAdminController;
use App\Http\Controllers\ReportPurchaseAdminController;
use App\Http\Controllers\ReportSalesAdminController;
use App\Http\Controllers\SosialMediaController;
use App\Http\Controllers\StrukturalController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.master');
})->middleware(['auth',   'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'verified', 'isAdmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('categoryPost', CategoryPostController::class);
    Route::resource('categoryUnitUsaha', JenisUsahaController::class);
    Route::resource('pengguna', UserController::class);
    Route::resource('bumdes', BumdesController::class);
    Route::resource('reportpurchaseadmin', ReportPurchaseAdminController::class);
    Route::resource('reportsalesadmin', ReportSalesAdminController::class);
    Route::resource('reportAdmin', ReportAdminController::class);
    Route::resource('agenda', AgendaController::class);
    Route::resource('berita', PostController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('banner', BannersController::class);
    Route::resource('visimisi', VisiMisiController::class);
    Route::resource('struktural', StrukturalController::class);
    Route::resource('sosialmedia', SosialMediaController::class);
    Route::resource('profilepengguna', editProfilPengguna::class);
    Route::resource('profileadmin', editProfilPengguna::class);
});

Route::middleware(['auth', 'verified', 'isUser'])->prefix('User')->name('user.')->group(function () {
    Route::resource('bumdesUser', BumdesController::class);
    Route::resource('reportUser', ReportAdminController::class);
    Route::resource('reportsalesuser', ReportSalesAdminController::class);
    Route::resource('reportpurchaseuser', ReportPurchaseAdminController::class);
    Route::resource('penggunaupdateuser', UserController::class);
});




require __DIR__ . '/auth.php';
