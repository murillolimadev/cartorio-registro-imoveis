<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('admin.index');
    //Client
    Route::get('client/', 'Admin\ClientController@index')->name('client.index');
    Route::get('client/create/', 'Admin\ClientController@create')->name('client.create');
    Route::post('client/store/', 'Admin\ClientController@store')->name('client.store');
    Route::get('client/edit/{id}/', 'Admin\ClientController@edit')->name('client.edit');
    Route::post('client/update/{id}', 'Admin\ClientController@update')->name('client.update');
    Route::get('client/delete/{id}', 'Admin\ClientController@delete')->name('client.delete');
    Route::get('client/pesquisar/', 'Admin\ClientController@pesquisar')->name('client.pesquisar');

});

Auth::routes();

