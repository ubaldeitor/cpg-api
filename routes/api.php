<?php

use Illuminate\Http\Request;

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
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('doctores', 'Api\DoctoresController');
Route::apiResource('ubicaciones', 'Api\UbicacionesController');
Route::apiResource('doctor-ubicacion-horario', 'Api\DocUbiHorController');
Route::apiResource('ubicacion-contacto', 'Api\UbicacionContactoController')->parameters(['id'=>'id']);
