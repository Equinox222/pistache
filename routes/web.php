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

Route::get('/', 'TestController@welcome');

Route::get('/prueba', function () {
    return 'hola, soy una ruta de prueba';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('products/{id}', 'ProductController@show');
Route::post('/cart', 'CartDetailController@store');


//Middleware
Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')->group(function () {

//CR
Route::get('/products', 'ProductController@index'); //listado
Route::get('/products/create', 'ProductController@create'); //formulario
Route::post('products/', 'ProductController@store'); //registrar

//UD
Route::get('/products/{id}/edit', 'ProductController@edit'); //formulario edicion
Route::post('/products/{id}/edit', 'ProductController@update'); //actualizar
Route::delete('/products/{id}', 'ProductController@destroy'); //Eliminar

//Image
Route::get('/products/{id}/images', 'ImageController@index');
Route::post('/products/{id}/images', 'ImageController@store');
Route::delete('/products/{id}/images', 'ImageController@destroy');
Route::get('/products/{id}/images/select/{image}', 'ImageController@select');
});
