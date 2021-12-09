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

Route::prefix('avs')->group(function() {
    Route::resource('/',AvsController::class);
    Route::get('/list','AvsController@list')->name('avs.list');
    Route::get('/list_update','AvsController@list_update')->name('avs.list_update');
    Route::get('/list_add','AvsController@list_add')->name('avs.list_add');
});
