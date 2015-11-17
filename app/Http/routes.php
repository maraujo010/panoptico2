<?php


Route::group(['prefix' => LaravelLocalization::setLocale(), 
			  'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]], function()
{
	Route::get('/', 'FrontPagesController@home');			
	Route::get(LaravelLocalization::transRoute('routes.about'),'FrontPagesController@about');    	
	
	Route::get(LaravelLocalization::transRoute('routes.register'), 'Auth\AuthController@getRegister');
	Route::post(LaravelLocalization::transRoute('routes.register'), 'Auth\AuthController@postRegister');
});

Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

