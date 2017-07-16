
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

Route::get('/', 'CrudController@index');
Route::get('create', 'CrudController@create');
Route::post('store', 'CrudController@store');
Route::get('show/{user}', 'CrudController@show');
Route::get('edit/{user}', 'CrudController@edit');
Route::patch('update/{id}', 'CrudController@update');
Route::delete('delete/{id}', 'CrudController@delete');
Route::get('search', 'CrudController@search');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
