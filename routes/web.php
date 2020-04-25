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

Route::get('/', ['as' => 'site.home', 'uses' => 'site\HomeController@index']);

Route::get('/contato/{id?}', ['uses' => 'ContatoController@index'] );

Route::post('/contato', ['uses' => 'ContatoController@criar']);

Route::put('/contato', ['uses' => 'ContatoController@editar']);

Route::group(['middleware' => 'auth'], function(){
	Route::get('/admin/cursos', ['as' => 'admin.cursos', 'uses' => 'admin\CursoController@index']);

	Route::get('/admin/cursos/adicionar', ['as' => 'admin.cursos.adicionar', 'uses' => 'admin\CursoController@adicionar']);

	Route::post('/admin/cursos/salvar', ['as' => 'admin.cursos.salvar', 'uses' => 'admin\CursoController@salvar']);

	Route::get('/admin/cursos/editar/{id}', ['as' => 'admin.cursos.editar', 'uses' => 'admin\CursoController@editar']);

	Route::put('/admin/cursos/atualizar/{id}', ['as' => 'admin.cursos.atualizar', 'uses' => 'admin\CursoController@atualizar']);

	Route::get('/admin/cursos/deletar/{id}', ['as' => 'admin.cursos.deletar', 'uses' => 'admin\CursoController@deletar']);
});
	


Auth::routes();

