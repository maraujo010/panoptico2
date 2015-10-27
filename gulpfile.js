
var util = require('gulp-util');
var elixir = require('laravel-elixir');

var config = {	    
	    production: !!util.env.production
	};

elixir(function(mix) {
	mix.sass('app.scss');
});	
	
if (config.production) {
	elixir(function(mix) {
		mix.scripts([
			'libs/openlayers/ol.js',
			'./node_modules/angular/angular.min.js',
			'mapApp/app.js',
			'mapApp/Services/dataService.js',
			'mapApp/Controllers/mapHelper/initMapController.js',
		], './public/js/all.js');		
	});
}
else {
	elixir(function(mix) {
				
		mix.copy(
			      'resources/assets/js/libs/openlayers/ol.js',
			      'public/js/dev/'
			    );
		
		mix.copy(
			      'node_modules/angular/angular.min.js',
			      'public/js/dev/'
			    );
		
		mix.copy(
			      'resources/assets/js/mapApp/app.js',
			      'public/js/dev/'
			    );
		
		mix.copy(
			      'resources/assets/js/mapApp/Controllers/mapHelper/',
			      'public/js/dev/'
			    );
		
		mix.copy(
			      'resources/assets/js/mapApp/Services/',
			      'public/js/dev/'
			    );
		
		
	});		
	
}
