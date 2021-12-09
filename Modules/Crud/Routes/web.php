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

Route::prefix('crud')->group(function() {
    Route::resource('/', CrudController::class);
    Route::get('/', 'CrudController@index')->name('crud.index');
    Route::post('/', 'CrudController@store')->name('crud.store');
    Route::post('/add', 'CrudController@add_crud')->name('crud.add');
    Route::post('/add/child', 'CrudController@add_crud_child')->name('crud.addChild');
    Route::post('/upload', 'CrudController@upload_module')->name('crud.upload');
});
