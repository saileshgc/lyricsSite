<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Route Model binding
Route::bind('artist',function($id)
{
	return App\artistModel::where('id',$id)->first();
	
});

Route::model('id','App\artistModel');

//Pages Definition without a Route Resource
Route::get('/',['as'=>'artist_home','uses'=>'PagesController@index']); //Homepage
Route::get('/about','PagesController@about'); //About
Route::get('artist','PagesController@artist');
Route::get('/artist/create', 'PagesController@create');
Route::post('/artist/create', 'PagesController@store');
Route::get('/artist/{slug}',['as'=>'artist_path','uses'=>'PagesController@showArtist']);
Route::get('/test/{artist}','PagesController@test');//route model binding
Route::get('/test2/{id}','PagesController@test');//route model binding
Route::get('/genre','PagesController@genre');

Route::get('/artist/{slug}/edit', 'PagesController@edit');

//Edit Artist
Route::patch('/artist/{slug}','PagesController@update');

//Delete Artist
Route::delete('/artist/{slug}/destroy/',['as'=>'artist_destroy','uses'=>'PagesController@destroy']);

Route::get('/songs/albumsdropdown', 'songsController@dropdown');
//Using a Route Resource
$router->resource('album','AlbumController');
$router->resource('songs','songsController');
