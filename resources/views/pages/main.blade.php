@extends('layout.default')
@section('content')
    <div id="map" class="map"></div>
    <script>
    	$(window).bind("load", function() {
			initMap();
		}); 
	</script>
@stop