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

use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('admin/mapview');
});

Route::get('/mapview', 'AdminController@index');
Route::get('/chartview', 'AdminController@chartview');
Route::get('/request','AdminController@request');
Route::get('/contact','AdminController@contact');
Route::get('/faq','AdminController@faq');
