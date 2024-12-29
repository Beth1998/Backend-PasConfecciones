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
Route::get('/', [PaginaController::class, 'index']);
//Route::get('/productos', [PaginaController::class, 'productos']);
//Route::get('/blusas', [PaginaController::class, 'blusas']);


//RUTA PANEL CONTROL
Route::get('/panel', [PaginaController::class, 'paneldecontrol']);

//rvicios', [SersicioCostroller::class, 'index']);
//Route::get('/createService', [ServicioController::class, 'index']);
//Route::get('/createService', [ServicioController::class, 'create']);
//Route::post('/storeService', [ServicioController::class, 'store']);

//RUTA MISION Y VISION 

//Ruta del inicio de Mision y Vision
Route::get('/MisVis', [MisVisController::class, 'index'])->name('MisVis.index');

// Ruta para crear un nuevo registro
Route::get('/MisVis/create', [MisVisController::class, 'create'])->name('createMisVis');

// Ruta para almacenar un nuevo registro
Route::post('/storeMisVis', [MisVisController::class, 'store']);

// Ruta para editar un registro específico
Route::get('/editMisVis/{id}', [MisVisController::class, 'edit'])->name('editMisVis');  

// Ruta para actuyalizar un nuevo registro
Route::put('/updateMisVis/{id}', [MisVisController::class, 'update'])->name('updateMisVis');

// Ruta para cambiar el estado de la misión o visión
//Route::get('/statusMisVis/{id}', [MisVisController::class, 'status'])->name('statusMisVis');

// Ruta para la vista de elementos desactivados
//Route::get('/MisVisDesactivados', [MisVisController::class, 'indexD'])->name('MisVis.indexD');

//Route::get('/MisVis', [MisVisController::class, 'index'])->name('MisVis.index');
Route::get('/MisVis/desactivados', [MisVisController::class, 'indexD'])->name('MisVis.indexD');
Route::get('/MisVis/status/{id}', [MisVisController::class, 'status'])->name('statusMisVis');



//Rutes redes
//Route::get('/redes', [RedesController::class, 'index']);
