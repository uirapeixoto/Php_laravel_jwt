<?php

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

Route::group(array('prefix' => 'api'), function()
{

    Route::get('/', function () {
        return response()->json(['message' => 'Jobs API', 'status' => 'Connected']);;
    });

    Route::resource('jobs', 'JobsController');
    Route::resource('companies', 'CompaniesController');
});

Route::group(array('prefix' => 'public'), function()
{

    Route::get('/', function () {
        return response()->json(['message' => 'Public API', 'status' => 'Connected']);;
    });

    Route::get('/estado/get-municipios/{id}', 'MunicipiosController@getMunicipios');

    Route::resource('estados', 'EstadosController');
    Route::resource('municipios', 'MunicipiosController');
});

