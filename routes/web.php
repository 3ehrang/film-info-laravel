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

Route::get('/', 'Frontend\FilmController@index')->name('films');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/films', 'Frontend\FilmController@index')->name('index.films');

// route for film item with using slug
Route::get('/films/{id}-{slug}', 'Frontend\FilmController@show')->name('show.film');

Route::group(['middleware' => ['web']], function () {
	Route::get('/manage/films', 'Frontend\FilmController@manage')->name('manage.films');
	Route::post('/films/comment', 'Frontend\FilmController@comment')->name('comment.films');
});
