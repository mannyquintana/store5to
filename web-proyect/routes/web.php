<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/computadoras', function(){
    return view('computadoras');
});

Route::get('/escritorios', function() {
    return view('/escritorios');
});

Route::get('/accesorios', function() {
    return view('/accesorios');
});

Route::get('/productos', function() {
    return view('/productos');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');