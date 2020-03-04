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
    return view('/welcome');
})->name('home');

Route::get('home', function () {
    return view('/welcome');
})->name('home');

Route::get('login', function(){
    return view("user/login");
})->name("user.enter");

Route::get('registro', function(){
    return view('user/registro');
})->name("user.register");


Route::get('painel','PainelController@index')->name("painel.index");
Route::get('upload','VideoController@index')->name("video.index");
Route::get('search/{video_name}','SearchController@index')->name("search.index");
Route::post('video/upload','VideoController@upload')->name("video.upload");
Route::post('user/register','Auth\RegisterController@save')->name("user.save");
Route::post('user/login','Auth\LoginController@auth')->name("user.auth");
Route::get('user/logout','Auth\LoginController@logout')->name("user.logout");
Route::get('video/play/{titulo}','VideoController@play')->name("video.play");
