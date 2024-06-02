<?php

use App\Http\Controllers\BumdesController;
use App\Http\Controllers\CategoryPostController;
use App\Http\Controllers\JenisUsahaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportPurchaseAdminController;
use App\Http\Controllers\UserController;
use App\Models\CategoryPost;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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
});




require __DIR__ . '/auth.php';
