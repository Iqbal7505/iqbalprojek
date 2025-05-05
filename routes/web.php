<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'create']);
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');

Route::get('/', [ProductController::class, 'index'])->name('home');;
// Route untuk menampilkan daftar produk
Route::get('/', [ProductController::class, 'index'])->name('products.index');
// Route untuk menampilkan detail produk
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class,'store'])->name('contact.store');
Route::resource('contact', ContactController::class);
