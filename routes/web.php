<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/*
|--------------------------------------------------------------------------
| Fisica Teorica Routes
|--------------------------------------------------------------------------
|
|
|
*/

Route::get('/', 'MainController@index');
Route::get('/eventos-noticias', 'MainController@eventos_noticias');
Route::get('/eventos/{evento_id}', 'MainController@eventos_by_id');
Route::get('/noticias/{noticia_id}', 'MainController@noticias_by_id');
Route::get('/directorio', 'MainController@directorio');
Route::get('/directorio/perfil/{slug_name}', 'MainController@profile');
Route::get('/investigacion', 'MainController@investigacion');
Route::get('/productividad', 'MainController@productividad');
Route::get('/colaboraciones', 'MainController@colaboraciones');
Route::get('/proyectos-vigentes', 'MainController@proyectos_vigentes');
Route::get('/infraestructura', 'MainController@infraestructura');
Route::get('/tesis', 'MainController@tesis');
Route::get('/contacto', 'MainController@contacto');
Route::post('/contacto', 'MainController@contacto_post');