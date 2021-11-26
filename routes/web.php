<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('admin.index');
     //client
     Route::get('client/', 'Admin\ClientController@index')->name('client.index');
     Route::get('client/create/', 'Admin\ClientController@create')->name('client.create');
     Route::post('client/store/', 'Admin\ClientController@store')->name('client.store');
     Route::get('client/edit/{id}/', 'Admin\ClientController@edit')->name('client.edit');
     Route::post('client/update/{id}', 'Admin\ClientController@update')->name('client.update');
     Route::get('client/delete/{id}', 'Admin\ClientController@delete')->name('client.delete');
     Route::get('client/pesquisar/', 'Admin\ClientController@pesquisar')->name('client.pesquisar');

    //indice
    Route::get('indice/', 'Admin\IndiceController@index')->name('indice.index');
    Route::get('indice/create/', 'Admin\IndiceController@create')->name('indice.create');
    Route::post('indice/store/', 'Admin\IndiceController@store')->name('indice.store');
    Route::get('indice/edit/{id}/', 'Admin\IndiceController@edit')->name('indice.edit');
    Route::post('indice/update/{id}', 'Admin\IndiceController@update')->name('indice.update');
    Route::get('indice/delete/{id}', 'Admin\IndiceController@delete')->name('indice.delete');
    Route::get('indice/pesquisar/', 'Admin\IndiceController@pesquisar')->name('indice.pesquisar');
    Route::get('indice/report/', 'Admin\IndiceController@report')->name('indice.report');
    Route::get('indice/report/result/', 'Admin\IndiceController@result')->name('indice.result');


});

Auth::routes();

