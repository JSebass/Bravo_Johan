<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrar;
use App\Http\Controllers\EditorialController;
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
Route::get('editorial', [EditorialController::class, 'index'])
->name('listado_editorial');
Route::get('editorial/registro', [EditorialController::class, 'form_registro'])
        ->name('form_registroEditorial');
Route::post('editorial/registro', [EditorialController::class, 'registrar'])
        ->name('registrarEditorial');

Route::get('editorial/actualizar/{id}', [EditorialController::class, 'form_actualizar'])
		->name('form_actualizaEditorial');
		
Route::post('editorial/actualizar/{id}', [EditorialController::class, 'actualizar'])
    	->name('actualizarEditorial');

