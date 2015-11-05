<div class="navbar navbar-default navbar-fixed-top" ng-controller="navBarController">
	<div class="container">
		<div class="navbar-header">
			<button type="button"  class="navbar-toggle" ng-click="navbarCollapsed = !navbarCollapsed">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
			</button>
			<h1><a class="navbar-brand" href="/">Panopticon</a></h1>
        </div>       
		<div class="collapse navbar-collapse" collapse="navbarCollapsed">
			<ul class="nav navbar-nav navbar-right">				
            	<li>{!! Html::panLinkRoute('about', Lang::get('links.about')) !!}</li>
            	<li><a href="">Login</a></li>
            	<li>{!! Html::panLinkRoute('signup', Lang::get('titles.signup')) !!}</li>              	                     	 
            	<li dropdown>
	              	<a href="#" dropdown-toggle>{{ Lang::get('titles.selectedLang') }}<span class="caret"></span></a>
	              	<ul class="dropdown-menu">
	              	@foreach (LaravelLocalization::getSupportedLocales() as  $localeCode => $properties )
				    	@if ($localeCode!= LaravelLocalization::getCurrentLocale() ) 
		    				<li><a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">{{ Lang::get('titles.selectedLang', array(), $localeCode) }}</a></li>	 
		      			@endif      
		    		@endforeach		             		    	                   	        	            	   
	       			</ul>
            	</li>                    	                      	
          	</ul>
		</div>	 		    		    		  	
	</div>
</div>

