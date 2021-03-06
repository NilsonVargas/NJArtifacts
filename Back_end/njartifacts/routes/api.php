<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Imports controller

use App\Http\Controllers\ProductoController;

use App\Http\Controllers\SolicitudesContactoController;

use App\Http\Controllers\CaracteristicaController;

use App\Http\Controllers\ImagenController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\OrdenController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Usuarios
/*
Route::get('/usuarios', 'App\Http\Controllers\UserController@index');
Route::post('/usuarios', 'App\Http\Controllers\UserController@store');
Route::put('/usuarios/{id}', 'App\Http\Controllers\UserController@update');
Route::delete('/usuarios/{id}', 'App\Http\Controllers\UserController@delete');
 */
Route::resource('usuarios', UserController::class);

//Productos


//Implementar el metodo get para solo un producto

Route::resource('productos', ProductoController::class);
/*
Route::get('/productos', 'App\Http\Controllers\ProductoController@index');
Route::post('/productos', 'App\Http\Controllers\ProductoController@store');
Route::put('/productos/{id}', 'App\Http\Controllers\ProductoController@update');
Route::delete('/productos/{id}', 'App\Http\Controllers\ProductoController@delete');
Route::get('/productos/{id}',[ProductoController::class, 'show']);
 
 */


//Ordenes

/*
Route::get('/ordenes', 'App\Http\Controllers\OrdenController@index');
Route::post('/ordenes', 'App\Http\Controllers\OrdenController@store');
Route::put('/ordenes/{id}', 'App\Http\Controllers\OrdenController@update');
Route::delete('/ordenes/{id}', 'App\Http\Controllers\OrdenController@delete');
 */
Route::resource('ordenes', OrdenController::class);

//Categorias
Route::get('/categorias', 'App\Http\Controllers\CategoriaController@index');
Route::post('/categorias', 'App\Http\Controllers\CategoriaController@store');
Route::put('/categorias/{id}', 'App\Http\Controllers\CategoriaController@update');
Route::delete('/categorias/{id}', 'App\Http\Controllers\CategoriaController@delete');

//Solicitudes Contanto
/*
Route::get('/contactos' ,[SolicitudesContactoController::class,'index']);
Route::post('/contactos' ,[SolicitudesContactoController::class,'store']);
Route::put('/contactos/{id}' ,[SolicitudesContactoController::class,'update']);
Route::delete('/contactos/{id}' ,[SolicitudesContactoController::class,'destroy']);
Route::get('/contactos/{id}' ,[SolicitudesContactoController::class,'index']);
 */
Route::resource('solicitudes_contactos',SolicitudesContactoController::class);

//Caracteristicas

Route::resource('caracteristicas', CaracteristicaController::class);

Route::get('/caracteristica', [CaracteristicaController::class, 'index']);
Route::post('/caracteristica', [CaracteristicaController::class, 'store']);
Route::put('/caracteristica', [CaracteristicaController::class, 'update']);
Route::delete('/caracteristica/{id}', [CaracteristicaController::class, 'destroy']);
Route::get('/caracteristica/{id}', [CaracteristicaController::class, 'index']);

//Imagenes
Route::resource('imagenes', ImagenController::class);

require __DIR__ . '/auth.php';