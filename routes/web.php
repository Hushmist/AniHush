<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth')->group(function() {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function() {
    Route::get('/login', [AuthController::class, 'login_form'])->name('login');
    Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');

    Route::get('/register', [AuthController::class, 'register_form'])->name('register');
    Route::post('/register_process', [AuthController::class, 'register'])->name('register_process');
});

Route::resource('/category', App\Http\Controllers\CategoryController::class);

Route::resource('/article', App\Http\Controllers\ArticleController::class);


Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
});
