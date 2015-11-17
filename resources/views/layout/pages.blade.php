<!doctype html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" ng-app="panApp">
<head>
    @include('includes.head')
</head>
<body>

    <header>
        @include('includes.header')
    </header>	

    <div class="container-fluid">
	    <div class="row">
			<div class="page-title">
				<div class="col-md-offset-2">
	    			<h2>{{ $pagetitle }}</h2>
	    		</div>
	    	</div>	
	    </div>    		    	    
            @yield('content')		    
	</div>
</body>
</html>