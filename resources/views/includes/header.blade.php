<div class="navbar navbar-default navbar-fixed-top" ng-controller="navBarController">
	<div class="container">
		<div class="navbar-header">
			<button type="button"  class="navbar-toggle" ng-click="navbarCollapsed = !navbarCollapsed">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
			</button>
			<h1><a class="navbar-brand" href="#">Panopticon</a></h1>
        </div>
		<div class="collapse navbar-collapse" collapse="navbarCollapsed">
			<ul class="nav navbar-nav navbar-right">
            	<li class="active">{!! Html::panLinkRoute('about', Lang::get('links.about')) !!}</li>       
            	<li dropdown>
	              	<a href="#" dropdown-toggle>User<span class="caret"></span></a>
	              	<ul class="dropdown-menu">		             	
	    	            <li><a href="#">Login</a></li>
	        	        <li><a href="#">Register</a></li>	            	    
	       			</ul>
            	</li>        
            	<li dropdown>
	              	<a href="#" dropdown-toggle>Lang<span class="caret"></span></a>
	              	<ul class="dropdown-menu">		             	
	    	            <li><a href="#">PT</a></li>
	        	        <li><a href="#">EN</a></li>	            	    
	       			</ul>
            	</li>                        	
          	</ul>
		</div>
	</div>
</div>
