<?php

use App\Models\FormatoArchivo;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TipoActividadController;
use App\Http\Controllers\FormatoArchivoController;
use App\Http\Controllers\TemasController;
use App\Http\Controllers\PlanesController;
use App\Http\Controllers\RolesController;

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

/*

Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', function () {
    return redirect('/login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('products', ProductController::class);
Route::resource('tipoactividad', TipoActividadController::class);
Route::resource('formatoarchivo', FormatoArchivoController::class);
Route::resource('temas', TemasController::class);
Route::resource('planes', PlanesController::class);
Route::resource('roles', RolesController::class);

