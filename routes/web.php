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
    if(Auth::id() != null){
        return redirect('/home');
    }
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('/users','ManageUserController');
Route::resource('/books','ManageBookController');


Route::get('/viewusers','ManageUserController@viewUsers');
Route::get('/viewusers/get_datatable','ManageUserController@get_datatable');

Route::get('view','ManageBookController@viewBooks');
Route::get('view/get_datatable', 'ManageBookController@get_datatable');
Route::get('/description/{id}','ManageBookController@description');


Route::resource('/profile','UsersController');