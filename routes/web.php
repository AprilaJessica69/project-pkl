<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PesertaController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin', [AdminController::class, 'index']);
// Route::get('admin/{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::resource('admin', AdminController::class);
Route::get('/admins/{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');

Route::resource('peserta', PesertaController::class);