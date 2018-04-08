<?php

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



Route::get('/', function () {
    return view('welcome');
});
/*
 * API com as funcionalidades para consultas ao webservice
 */
Route::group(['prefix' => 'api'], function(){
    Route::group(['prefix' => 'pessoa'], function (){
         Route::post( '', ['as' => 'lista', 'uses' => 'PessoaController@lista'] );
         Route::post( 'add', ['as' => 'add', 'uses' => 'PessoaController@add'] );
         Route::post( 'edit', ['as' => 'edit', 'uses' => 'PessoaController@edit'] );
         Route::post( 'delete', ['as' => 'delete', 'uses' => 'PessoaController@delete'] );
         Route::post( 'lista', ['as' => 'list', 'uses' => 'PessoaController@listaPessoas'] );
         Route::post( 'fone', ['as' => 'fone', 'uses' => 'PessoaController@listaTelefone'] );
         Route::post( 'mail', ['as' => 'mail', 'uses' => 'PessoaController@listaEmail'] );
         Route::post( 'nome', ['as' => 'nome', 'uses' => 'PessoaController@listaNome'] );
         Route::post( 'dado', ['as' => 'dado', 'uses' => 'PessoaController@getData'] );
    });

    Route::group(['prefix' => 'empresa'], function (){
        Route::post( '', ['as' => 'lista', 'uses' => 'EmpresaController@lista'] );
    });

    Route::group(['prefix' => 'cargo'], function (){
        Route::post( '', ['as' => 'lista', 'uses' => 'CargoController@lista'] );
    });

    Route::group(['prefix' => 'setor'], function (){
        Route::post( '', ['as' => 'lista', 'uses' => 'SetorController@lista'] );
    });
});





