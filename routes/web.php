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

Route::get('/', 'ProductsController@all');

Auth::routes();

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/productos/agregar', "ProductsController@add");
    Route::post('/productos/agregar', "ProductsController@store");
    Route::post('/productos/admin/', 'ProductsController@delete');
    Route::get('/productos/editar/{id}', 'ProductsController@edit');
    Route::post('/productos/editar', 'ProductsController@update');
    Route::get('/productos/admin', 'ProductsController@admin'); 
});
// Products routes
Route::get('/productos', 'ProductsController@all');
Route::post('/productos/buscar', 'ProductsController@search');

Route::get('/productos/{id}', 'ProductsController@detail');
Route::get('/cart', 'ProductsController@cart');
Route::post('/cart', 'ProductsController@removeFromCart');
Route::get('/add-to-cart/{id}', 'ProductsController@addToCart');

// Brands routes
Route::get('marcas', 'BrandsController@all');
Route::get('marca/{id}', 'BrandsController@productsOfBrand');

// Categories routes
Route::get('categorias', 'categoriesController@all');
Route::get('categoria/{id}', 'categoriesController@productsOfCategory');

// Users routes
Route::get('/perfil/{id}', 'UsersController@detail');
Route::get('/perfil/editar/{id}', 'UsersController@edit');
Route::post('/perfil/{id}', 'UsersController@update');
