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
    return view('layout');
});

Route::get('about', 'AboutController@display');
Route::get('contact', 'ContactController@display');
Route::get('customers',['uses' => 'CustomerController@index']);
Route::get('customers/create',['uses' => 'CustomerController@create']);
Route::post('customers',['uses' => 'CustomerController@store']);
Route::get('customers/{customer}/edit',['uses' => 'CustomerController@edit'])-> name('customers.edit');
Route::patch('customers/{customer}',['uses' => 'CustomerController@update']);
Route::get('customers/{customer}',['uses' => 'CustomerController@destroy'])->name('customers.destroy');