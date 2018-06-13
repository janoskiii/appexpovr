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


Route::get('inicio', function () {
    return view('inicio');
});

Route::get('estudiantes', function () {
    return view('estudiantes');
});
Route::get('institucion', function () {
    return view('institucion');
});
Route::get('autor', function () {
    return view('autor');
});
Route::get('nacionalidad', function () {
    return view('nacionalidad');
});
Route::get('obras', function () {
    return view('obras');
});


// controllers inst
Route::get('institucion','InstitucionesController@listar');
Route::post('/ingresar',[
  'uses'=> 'InstitucionesController@store',
  'as'=> 'ingresar'
]);

Route::get('institucion/edit/{id}','InstitucionesController@edit');
Route::get('institucion/destroy/{id}','InstitucionesController@destroy');

//controller nacionalidades

Route::get('nacionalidad','NacionalidadesController@index');
Route::post('/guardar',[
  'uses'=> 'NacionalidadesController@store',
  'as'=> 'guardar'
]);
Route::get('nacionalidad/edit/{id}','NacionalidadesController@edit');
Route::get('nacionalidad/destroy/{id}','NacionalidadesController@destroy');
Route::post('/editarNacionalidad',[
  'uses'=> 'NacionalidadesController@update',
  'as'=> 'editarNacionalidad'
]);


//controller obra
Route::get('obras','ObrasController@index');
Route::post('/pasar',[
  'uses'=> 'ObrasController@store',
  'as'=> 'pasar'
]);

Route::get('obras/destroy/{id}','ObrasController@destroy');

//controller autor

Route::get('autor','AutoresController@index');


Route::post('/sav',[
  'uses'=> 'AutoresController@store',
  'as'=> 'sav'
]);
Route::get('autor/destroy/{id}','AutoresController@destroy');
//controller estudiantes


Route::get('estudiantes','EstudiantesController@index');

Route::post('/guardado',[
  'uses'=> 'EstudiantesController@store',
  'as'=> 'guardado'
]);
Route::get('estudiantes/destroy/{id}','EstudiantesController@destroy');
