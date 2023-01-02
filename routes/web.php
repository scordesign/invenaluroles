<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Auth\AuthController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');
Route::resource('bodegas', App\Http\Controllers\BodegaController::class)->middleware('auth');
Route::resource('grupos', App\Http\Controllers\GrupoController::class)->middleware('auth');;
Route::resource('codigos', App\Http\Controllers\CodigoController::class)->middleware('auth');
Route::resource('unidades', App\Http\Controllers\UnidadeController::class)->middleware('auth');
Route::resource('ubicaciones', App\Http\Controllers\UbicacioneController::class)->middleware('auth');
Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
