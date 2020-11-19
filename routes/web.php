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
    //user profile
    Route::get('/user/profile/{id}', 'UserController@show')->name('user.profile');

    Route::get('/threads', 'ThreadsController@index')->name('threads.list');
    //Route::get('/home', 'EscopoController@index')->name('home');

    Route::get('/threads/create', 'ThreadsController@create')->name('thread.create');
    Route::post('/threads/create/do', 'ThreadsController@store')->name('thread.create.do');
    Route::get('/threads/edit/{id}', 'ThreadsController@edit')->name('thread.edit');
    Route::post('/threads/edit/do/', 'ThreadsController@update')->name('thread.edit.do');
    Route::get('/threads/destroy/{id}', 'ThreadsController@destroy')->name('thread.destroy');
    Route::get('/threads/search/{id}', 'ThreadsController@show')->name('thread.show'); //talvez de problema
    Route::post('/threads/search/do/', 'ThreadsController@search')->name('thread.search.do');

    Route::get('/threads/filter/{id}', 'ThreadsController@filterByAssunto')->name('threads.filter');
    Route::get('/threads/user/filter/{id}', 'ThreadsController@filterByUser')->name('threads.user.filter');

    //admin routes:
    Route::get('/admin/escopos/create', 'EscopoController@create')->name('admin.escopo.create');
    Route::post('/admin/escopos/create/do', 'EscopoController@store')->name('admin.escopo.create.do');
    Route::get('/admin/escopos/edit/{id}', 'EscopoController@edit')->name('admin.escopo.edit');
    Route::post('/admin/escopos/edit/do/', 'EscopoController@update')->name('admin.escopo.edit.do');
    Route::get('/admin/escopos/destroy/{id}', 'EscopoController@destroy')->name('admin.escopo.destroy');

    Route::get('/admin/assuntos/create', 'AssuntoController@create')->name('admin.assunto.create');
    Route::post('/admin/assuntos/create/do', 'AssuntoController@store')->name('admin.assunto.create.do');
    Route::get('/admin/assuntos/edit/{id}', 'AssuntoController@edit')->name('admin.assunto.edit');
    Route::post('/admin/assuntos/edit/do/', 'AssuntoController@update')->name('admin.assunto.edit.do');

});
