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

//Route::get('users',[UserController::class,'getuser'])->name('usershow');






