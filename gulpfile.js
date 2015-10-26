var elixir = require('laravel-elixir');
require('laravel-elixir-angular');

elixir(function(mix) {
	mix.sass('app.scss');
	mix.angular("node_modules/angular/", "resources/js/angular/", "angular.js");
	mix.scripts([
		'vendors/angular.js',
		'vendors/openlayers/ol.js',
		'mapHelper.js',
		'app.js'
	]);
});
