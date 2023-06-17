<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CocheController;

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

// CRUD de coches
Route::resource('coches', cocheController::class);

// Ruta para la confirmación de eliminación
Route::get('coches/{coche}/delete', [CocheController::class, 'delete'])->name('coches.delete');


/*
Route::get('coches', [CocheController::class, 'index']);
Route::get('coches/{coche}', [CocheController::class, 'show']);

Route::get('coches/create', [CocheController::class, 'create']);
Route::post('coches', [CocheController::class, 'store']);

Route::get('coches', [CocheController::class, 'edit']);
Route::put('coches/{coche}', [CocheController::class, 'update']);

Route::get('coches/{coche}/delete', [CocheController::class, 'delete']);
Route::delete('coches/{coche}', [CocheController::class, 'destroy']);
*/