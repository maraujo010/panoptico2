angular
    .module('panApp')
    .controller('navBarController', navBarController);

function navBarController($scope) { 
	$scope.isCollapsed = true;
}