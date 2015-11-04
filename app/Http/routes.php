<?php


Route::group(['prefix' => LaravelLocalization::setLocale(), 
			  'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]], function()
{
	Route::get('/', 'FrontPagesController@home');			
	Route::get(LaravelLocalization::transRoute('routes.about'),'FrontPagesController@about');
    
			
});