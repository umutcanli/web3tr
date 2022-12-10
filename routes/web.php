<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\siteController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/faqs', [siteController::class, 'faqs'])->name('faqs')->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/create', [siteController::class, 'create'])->name('create')->middleware(['auth', 'verified']);
Route::POST('/veriekle', [siteController::class, 'veriekle'])->name('veriekle');
Route::get('/dashboard', [siteController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
