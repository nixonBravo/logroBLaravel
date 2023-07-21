<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoProductoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(TipoProductoController::class)->group(function(){
    Route::get('/tipos-productos', 'index');
    Route::post('/tipo', 'store');
    Route::get('/edit-tipo/{id}', 'edit');
    Route::put('/update-tipo/{id}', 'update');
    Route::delete('destroy-tipo/{id}', 'destroy');
});

Route::controller(ProductoController::class)->group(function(){
    Route::get('/productos', 'index');
    Route::post('/producto', 'store');
    Route::get('/edit-producto/{id}', 'edit');
    Route::put('/update-producto/{id}', 'update');
    Route::delete('/destroy-producto/{id}', 'destroy');
});
