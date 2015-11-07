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
            	<li>{!! Html::panLinkRoute('supportus', Lang::get('links.supportus')) !!}</li>
            	<li>{!! Html::panLinkRoute('collaborate', Lang::get('links.collaborate')) !!}</li>
            	<li class="nav-item-left-border signinup"><a href="">Login</a></li>
            	<li class="nav-item-right-border signinup">{!! Html::panLinkRoute('signup', Lang::get('links.signup')) !!}</li>              	                     	 
            	<li dropdown>
	              	<a href="#" dropdown-toggle> {{ Lang::get('links.selectedLang') }}<span class="caret"></span></a>
	              	<ul class="dropdown-menu">
	              	@foreach (LaravelLocalization::getSupportedLocales() as  $localeCode => $properties )
				    	@if ($localeCode!= LaravelLocalization::getCurrentLocale() ) 
		    				<li><a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">{{ Lang::get('links.selectedLang', array(), $localeCode) }}</a></li>	 
		      			@endif      
		    		@endforeach		             		    	                   	        	            	   
	       			</ul>
            	</li>                    	                      	
          	</ul>
		</div>	 		    		    		  	
	</div>
</div>

