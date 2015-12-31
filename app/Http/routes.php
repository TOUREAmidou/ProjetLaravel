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

Route::get('/', ['as'=>'home', 'uses'=>'MyController@home']);

Route::get('/insription',['as'=>'inscription', 'uses'=>'MyController@inscription']);
Route::get('/connexion',['as'=>'connexion', 'uses'=>'MyController@connexion']);

Route::get('auth/register', [
	'as' => 'getRegister',
	'uses' => 'Auth\AuthController@getRegister'
]);
Route::post('auth/register', [
	'as' => 'postRegister',
	'uses' => 'Auth\AuthController@postRegister'
]);

Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');


Route::get('/administration', ['middleware' => 'auth','as'=>'administration', 'uses'=>'MyController@administration']);
Route::post('/submit', ['middleware' => 'auth','as'=>'createTache', 'uses'=>'MyController@createTache']);

Route::get('/inventaire', ['middleware' => 'auth','as'=>'inventaire', 'uses'=>'MyController@inventaire']);
Route::get('/Ajoutache/{id}', ['middleware' => 'auth','as'=>'Ajoutache', 'uses'=>'MyController@Ajoutache']);
Route::post('/SaveTache/{id}', ['middleware' => 'auth','as'=>'SaveTache', 'uses'=>'MyController@SaveTache']);

Route::get('/VoirTache/{id}', ['middleware' => 'auth','as'=>'Voirtache', 'uses'=>'MyController@Voirtache']);
Route::get('/DeleteTache/{id}', ['middleware' => 'auth','as'=>'DeleteTache', 'uses'=>'MyController@DeleteTache']);
Route::get('/AfficheEdit/{id}', ['middleware' => 'auth','as'=>'EditTache', 'uses'=>'MyController@AfficheEdit']);
Route::post('/ModifierTache/{id}', ['middleware' => 'auth','as'=>'ModifierTache', 'uses'=>'MyController@ModifierTache']);
Route::get('/DeleteSousTache/{id}', ['middleware' => 'auth','as'=>'DeleteSousTache', 'uses'=>'MyController@DeleteSousTache']);
Route::get('/AfficheEditSousTache/{id}', ['middleware' => 'auth','as'=>'AfficheEditSousTache', 'uses'=>'MyController@AfficheEditSousTache']);
Route::post('/ModifierSousTache/{id}', ['middleware' => 'auth','as'=>'ModifierSousTache', 'uses'=>'MyController@ModifierSousTache']);
Route::get('/TacheFinie/{id}', ['middleware' => 'auth','as'=>'TacheFinie', 'uses'=>'MyController@TacheFinie']);

Route::get('/Apropos',function(){
	return view('Page/Apropos');
});