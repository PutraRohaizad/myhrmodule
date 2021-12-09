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

Route::prefix('role')->group(function() {
    Route::resource('/',RoleController::class);
    Route::get('/list','RoleController@list')->name('role.list');
    Route::get('/list_update','RoleController@list_update')->name('role.list_update');
    Route::get('/list_add','RoleController@list_add')->name('role.list_add');
});
