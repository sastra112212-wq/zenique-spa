<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; // <-- PENTING: Import controller Anda

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Ini adalah peta untuk semua halaman website Anda.
| Setiap URL akan diarahkan ke sebuah fungsi di dalam PageController.
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');