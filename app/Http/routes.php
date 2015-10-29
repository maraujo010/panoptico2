<?php



Route::get('/', 'FrontPagesController@home');
Route::get('/{about}/', 'FrontPagesController@about')->where('about', Lang::get('routes.about'));
