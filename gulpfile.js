var elixir = require('laravel-elixir');

elixir(function(mix) {
	mix.sass('app.scss');
	mix.scripts([
		'lib/openlayers/ol.js',
		'./node_modules/angular/angular.min.js'
	], './public/js/all.js');
});
