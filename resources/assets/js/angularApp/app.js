angular
    .module('panApp', ['ngAnimate', 'ui.bootstrap'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
