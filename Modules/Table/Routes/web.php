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

Route::prefix('table')->group(function() {
    Route::resource('/', CrudController::class);
    Route::get('/', 'TableController@index')->name('table.index');
    Route::post('/', 'TableController@store')->name('table.store');
    Route::post('/create-table', 'TableController@create_table')->name('table.create_table');
    Route::post('/add', 'TableController@add_crud')->name('table.add');
});
