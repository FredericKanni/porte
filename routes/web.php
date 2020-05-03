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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mesprestation', 'PrestationController@index')->name('mesprestation');
Route::get('/mesprestation/create', 'PrestationController@create')->name('mesprestationCreate');
Route::post('/mesprestation/store', 'PrestationController@store')->name('mesprestationStore');


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('users', 'UserController');
});