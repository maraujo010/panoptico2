<?php 
/*
 * This macro returns the link to a route, with language slug and route translation
 * $routeKey is the existing key in the array returned by /resources/lang/{lang}/routes.php
 */

Html::macro('panLinkRoute', function($routekey, $title)
{
	$route = '/'.Lang::getLocale().'/'.Lang::get('routes.'.$routekey);

	return '<a href="'.$route.'">'.$title.'</a>';
});