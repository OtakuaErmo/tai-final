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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])-> group(function(){

    //---------------------------------------------------------------------------------------------------------------------------------------index routes
    Route::get('/', 'IndexController@index')->name('index'); //--verified
    Route::get('/contato/info', 'IndexController@contato')->name('contato'); //--verified
    //---------------------------------------------------------------------------------------------------------------------------------------users routes
    Route::get('/user/profile/{id}', 'UserController@show')->name('user.profile');//--verified
    Route::get('/user/profile/edit/{id}', 'UserController@edit')->name('user.edit');//--verified
    Route::post('/user/profile/edit/do', 'UserController@update')->name('user.edit.do');//--verified
    Route::get('/user/profile/password/edit/{id}', 'UserController@editPassword')->name('user.password.edit');//--verified
    Route::post('/user/profile/password/edit/do', 'UserController@updatePassword')->name('user.password.edit.do');//--verified
    Route::get('/user/search/', 'UserController@telaSearch')->name('user.search');//--verified
    Route::post('/user/search/do/', 'UserController@search')->name('user.search.do');//--verified

    //---------------------------------------------------------------------------------------------------------------------------------------admin escopos routes
    Route::get('/admin/escopos/create', 'EscopoController@create')->name('admin.escopo.create');//--verified
    Route::post('/admin/escopos/create/do', 'EscopoController@store')->name('admin.escopo.create.do');//--verified
    Route::get('/admin/escopos/edit/{id}', 'EscopoController@edit')->name('admin.escopo.edit');//--verified
    Route::post('/admin/escopos/edit/do/', 'EscopoController@update')->name('admin.escopo.edit.do');//--verified
    Route::get('/admin/escopos/destroy/{id}', 'EscopoController@destroy')->name('admin.escopo.destroy');//--verified

    //---------------------------------------------------------------------------------------------------------------------------------------admin assuntos routes
    Route::get('/admin/assuntos/create', 'AssuntoController@create')->name('admin.assunto.create');
    Route::post('/admin/assuntos/create/do', 'AssuntoController@store')->name('admin.assunto.create.do');
    Route::get('/admin/assuntos/edit/{id}', 'AssuntoController@edit')->name('admin.assunto.edit');
    Route::post('/admin/assuntos/edit/do/', 'AssuntoController@update')->name('admin.assunto.edit.do');
    Route::get('/admin/assuntos/destroy/{id}', 'AssuntoController@destroy')->name('admin.assunto.destroy');
    Route::post('/assuntos/search/do/', 'AssuntoController@search')->name('assunto.search.do'); //essa nao e restrita ao adm - listagem dos assuntos por busca

    //---------------------------------------------------------------------------------------------------------------------------------------threads routes
    Route::get('/threads', 'ThreadsController@index')->name('threads.list');
    Route::get('/threads/assunto/{id}/create', 'ThreadsController@create')->name('thread.create');
    Route::post('/threads/create/do', 'ThreadsController@store')->name('thread.create.do');
    Route::get('/threads/edit/{id}', 'ThreadsController@edit')->name('thread.edit');
    Route::post('/threads/edit/do/', 'ThreadsController@update')->name('thread.edit.do');
    Route::get('/threads/destroy/{id}', 'ThreadsController@destroy')->name('thread.destroy');
    Route::get('/threads/show/{id}', 'ThreadsController@show')->name('thread.show'); //verificar
    Route::post('/threads/search/do/', 'ThreadsController@search')->name('thread.search.do');
    Route::get('/threads/filter/{id}', 'ThreadsController@filterByAssunto')->name('threads.filter');
    Route::get('/threads/user/filter/{id}', 'ThreadsController@filterByUser')->name('threads.user.filter');

    //---------------------------------------------------------------------------------------------------------------------------------------comentarios routes
    Route::get('/coments', 'ComentarioController@index')->name('coment.list');
    Route::get('/thread/{id}/discuss', 'ComentarioController@show')->name('discuss.show'); //talvez de problema
    Route::post('/coments/create/do', 'ComentarioController@store')->name('coment.create.do');
    Route::get('/coments/edit/{id}', 'ComentarioController@edit')->name('coment.edit');
    Route::post('/coments/edit/do', 'ComentarioController@update')->name('coment.edit.do');
    Route::get('/coments/destroy/{id}', 'ComentarioController@destroy')->name('coment.destroy');

});
