<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\panel\MisVisController;
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


//RUTAS PAGINA WEB
Route::get('/', [PaginaController::class, 'inicio']);
Route::get('/admin', [PaginaController::class, 'paneldecontrol']);
Route::get('/productos', [PaginaController::class, 'productos']);
Route::get('/blusas', [PaginaController::class, 'blusas']);


//RUTA PANEL CONTROL


//RUTA MISION Y VISION
Route::get('/MisVis',[MisVisController::class,'index']);
Route::get('editMisVis',[MisVisController::class, 'create']);
//Route::get('/EditMisVis',[MisVisController::class,'index']);

