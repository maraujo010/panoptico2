angular
    .module('panApp')
    .controller('initMapController', initMapController);

function initMapController($scope, dataService) { 
	
    var map = new ol.Map({
        target:'map',
        renderer:'canvas',
    	view: new ol.View({    		
    		center: ol.proj.transform([-0.1973237, 51.5412081], 'EPSG:4326', 'EPSG:3857'),
    		zoom:14
    	})
    });
    
    var newLayer = new ol.layer.Tile({
        source: new ol.source.OSM()});

    map.addLayer(newLayer);	
    
    dataService.setMap(map);
}