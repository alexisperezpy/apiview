<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/usuarios', [App\Http\Controllers\HomeController::class, 'viewusuarios'])->name('viewusuarios');
Route::get('/fotos', [App\Http\Controllers\HomeController::class, 'viewfotos'])->name('viewfotos');
Route::get('/posts', [App\Http\Controllers\HomeController::class, 'viewposts'])->name('viewposts');

