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

Route::prefix('menu')->group(function() {
    Route::resource('/', MenuController::class);
    Route::get('/', 'MenuController@index')->name('menu.index');
    Route::post('/', 'MenuController@store')->name('menu.store');
    Route::post('/add', 'MenuController@add_menu')->name('menu.add');
    Route::put('/status/{menu}', 'MenuController@updateStatus')->name('menu.updateStatus');
});
