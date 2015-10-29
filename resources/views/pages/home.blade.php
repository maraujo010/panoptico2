@extends('layout.default')
@section('content')
	<div ng-app="mapApp">
		<div ng-controller="initMapController">
    		<div id="map"></div>
    	</div>
    </div>
@stop