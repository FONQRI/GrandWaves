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
    return view('home');
});

Route::get('/blog', 'ArticlesController@index');
Route::get('/blog/create', 'ArticlesController@create');
Route::get('/blog/{id}', 'ArticlesController@show');



Route::get('/about', function () {
    return view('about');
});


Route::get('/products', function () {
    return view('products');
});


Route::get('/order', function () {
    return view('order.order');
});
Route::get('/programmerorder', function () {
    return view('order.ProgrammingOrder');
});
Route::get('/gameorder', function () {
    return view('order.GameOrder');
});
Route::get('/graphicsorder', function () {
    return view('order.GraphicsOrder');
});
