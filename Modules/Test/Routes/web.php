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

Route::prefix('test')->group(function() {
    Route::resource('/',TestController::class);
    Route::get('/list','TestController@list')->name('test.list');
    Route::get('/list_update','TestController@list_update')->name('test.list_update');
    Route::get('/list_add','TestController@list_add')->name('test.list_add');
});
