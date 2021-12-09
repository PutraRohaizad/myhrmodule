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

Route::prefix('boards')->group(function() {
    Route::resource('/',BoardsController::class);
    Route::get('/list','BoardsController@list')->name('boards.list');
    Route::get('/list_update','BoardsController@list_update')->name('boards.list_update');
    Route::get('/list_add','BoardsController@list_add')->name('boards.list_add');
});
