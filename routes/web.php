<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrar;
use App\Http\Controllers\LibroController;



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
Route::get('/', [Administrar::class, 'index']);
Route::get('libros', [LibroController::class, 'index'])
	->name('listado_libros');


