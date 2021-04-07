<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

/**
 * Rutas de sitio web
 */
Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');


/**
 * Rutas de administración
 */
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth:sanctum', 'verified'])->name('dashboard');

# RUTAS DE USUARIO
Route::get('/admin/user', [UserController::class, 'list'])->middleware(['auth:sanctum', 'verified'])->name('user-list');
Route::get('/admin/user-create', [UserController::class, 'create'])->middleware(['auth:sanctum', 'verified'])->name('user-create');
Route::get('/admin/user-update/{user}', [UserController::class, 'update'])->middleware(['auth:sanctum', 'verified'])->name('user-update');
Route::post('/admin/user-save/{user?}', [UserController::class, 'save'])->middleware(['auth:sanctum', 'verified'])->name('user-save');
Route::delete('/admin/user-delete/{user}', [UserController::class, 'delete'])->middleware(['auth:sanctum', 'verified'])->name('user-delete');






