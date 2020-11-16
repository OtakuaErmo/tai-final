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



Route::get('/teste', function () {
    return view('teste');
})->name('teste');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])-> group(function(){
    Route::get('/', 'EscopoController@index')->name('index');
    Route::get('/threads', 'ThreadsController@index')->name('threads.list');
    //Route::get('/home', 'EscopoController@index')->name('home');


    //admin routes:
    Route::get('/admin/escopos/create', 'EscopoController@create')->name('admin.escopo.create');
    Route::post('/admin/escopos/create/do', 'EscopoController@store')->name('admin.escopo.create.do');
    Route::get('/admin/escopos/edit/{id}', 'EscopoController@edit')->name('admin.escopo.edit');
    Route::post('/admin/escopos/edit/do/', 'EscopoController@update')->name('admin.escopo.edit.do');
    Route::get('/admin/escopos/destroy/{id}', 'EscopoController@destroy')->name('admin.escopo.destroy');


});
