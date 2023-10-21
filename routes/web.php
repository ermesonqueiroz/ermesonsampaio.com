<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/admin/login', 'admin.login')->middleware('guest')->name('login');

Route::prefix('/admin')->middleware('auth:sanctum')->group(function () {
    Route::view('/', 'admin.index')->name('admin');
    Route::view('/article', 'admin.create-article')->name('create-article');
});

Route::view('/', 'index')->name('blog');
Route::view('/{slug}', 'article')->name('article');
