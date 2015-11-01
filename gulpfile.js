
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
			'angularApp/app.js',
			'angularApp/Services/dataService.js',
			'angularApp/Controllers/mapHelper/initMapController.js',
		], './public/js/all.js');		
	});
}
else {
	elixir(function(mix) {
				
		
		mix.copy(
			      'resources/assets/js/angularApp/app.js',
			      'public/js/dev/'
			    );
		
		mix.copy(
			      'resources/assets/js/angularApp/Controllers/mapHelper/',
			      'public/js/dev/'
			    );
		
		mix.copy(
			      'resources/assets/js/angularApp/Services/',
			      'public/js/dev/'
			    );
		
		
	});		
	
}
