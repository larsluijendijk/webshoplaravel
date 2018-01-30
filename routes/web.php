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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products/index', 'ProductsController@index')->name('productsindex')->middleware('auth');
Route::get('/products/cart', 'ProductsController@cart')->name('productscart')->middleware('auth');
Route::get('/products/create', 'ProductsController@create')->name('productscreate')->middleware('auth');
Route::post('/insert', 'ProductsController@insert')->name('insert');