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

Route::prefix('admininistarion')->group(function() {
    Route::resource('/',AdmininistarionController::class);
    Route::get('/list','AdmininistarionController@list')->name('admininistarion.list');
    Route::get('/list_update','AdmininistarionController@list_update')->name('admininistarion.list_update');
    Route::get('/list_add','AdmininistarionController@list_add')->name('admininistarion.list_add');
});
