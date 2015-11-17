angular
    .module('panApp')
    .controller('navBarController', navBarController);

function navBarController($scope) { 
	$scope.navbarCollapsed = true;
}