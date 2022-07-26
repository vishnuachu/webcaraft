<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/admin/login', 'Admin\MainController@login');
Route::get('/admin', 'Admin\MainController@login');
Route::get('/', 'Admin\MainController@login');


Route::group(['prefix' => 'dashboard', 'middleware' => 'role:Super Admin', 'namespace' => 'Admin'], function () {

    Route::get('/', 'MainController@index')->name('dashboard');
    Route::get('/index', 'MainController@index')->name('dashboard');

    Route::prefix('category')->group(function () {
        Route::get('/all', 'CategoryController@index')->name('category.index');
        Route::get('/create', 'CategoryController@create')->name('category.create');
        Route::post('/create', 'CategoryController@store')->name('category.store');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('category.edit');
        Route::patch('/update/{id}', 'CategoryController@update')->name('category.update');
        Route::delete('/delete/{id}', 'CategoryController@destroy')->name('category.destroy');
    });

    Route::prefix('product')->group(function () {
        Route::get('/all', 'ProductController@index')->name('product.index');
        Route::get('/create', 'ProductController@create')->name('product.create');
        Route::post('/create', 'ProductController@store')->name('product.store');
        Route::get('/edit/{id}', 'ProductController@edit')->name('product.edit');
        Route::patch('/update/{id}', 'ProductController@update')->name('product.update');
        Route::delete('/delete/{id}', 'ProductController@destroy')->name('product.destroy');
    });


    Route::prefix('order')->group(function () {
        Route::get('/all', 'OrderController@index')->name('order.index');
        Route::get('/create', 'OrderController@create')->name('order.create');
        Route::post('/create', 'OrderController@store')->name('order.store');
        Route::get('/{id}', 'OrderController@show')->name('order.show');
        Route::get('/edit/{id}', 'OrderController@edit')->name('order.edit');
        Route::patch('/update/{id}', 'OrderController@update')->name('order.update');
        Route::delete('/delete/{id}', 'OrderController@destroy')->name('order.destroy');
        Route::patch('/decline/{id}', 'OrderController@decline')->name('order.decline');
        Route::get('/prnpriview/{id}', 'OrderController@prnpriview')->name('order.print');
    });
});
