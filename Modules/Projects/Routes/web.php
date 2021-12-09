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

Route::prefix('projects')->group(function() {
    Route::resource('/',ProjectsController::class);
    Route::get('/list','ProjectsController@list')->name('projects.list');
    Route::post('/create','ProjectsController@create')->name('projects.create');
    Route::get('/project-list','ProjectsController@projectList')->name('projects.projectList');
    Route::get('/list_update','ProjectsController@list_update')->name('projects.list_update');
    Route::post('/list_add','ProjectsController@list_add')->name('projects.list_add');
});
