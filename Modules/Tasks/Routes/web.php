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

Route::prefix('tasks')->group(function() {
    Route::resource('/',TasksController::class);
    Route::get('/list','TasksController@list')->name('tasks.list');
    Route::get('/list_update','TasksController@list_update')->name('tasks.list_update');
    Route::get('/list_add','TasksController@list_add')->name('tasks.list_add');
});
