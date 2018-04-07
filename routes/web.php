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

Route::group(['prefix' => 'api'], function(){
    Route::group(['prefix' => 'pessoa'], function (){
         Route::get( '', ['as' => 'lista', 'uses' => 'PessoaController@lista'] );
         Route::get( 'add', ['as' => 'add', 'uses' => 'PessoaController@add'] );
         Route::get( 'edit', ['as' => 'edit', 'uses' => 'PessoaController@edit'] );
         Route::get( 'delete', ['as' => 'delete', 'uses' => 'PessoaController@delete'] );
    });
});





