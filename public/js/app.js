/*global define*/
'use strict';

// Hook up all modules to the 'app' module
// Returns TheApp (see commonRoutes.js for usage)
define(['angular'], function (angular) {
    
   angular.module('HashBangURLs', ['ngRoute']).config(['$locationProvider', function($location) {
        $location.hashPrefix('!');
	}]);
	
    angular.module('HTML5ModeURLs', ['ngRoute']).config(['$locationProvider', function($location) {
        $location.html5Mode(true);
    }]); 
    
    // Choose to inject either HashBangs or HTML5 mode, your preference.
	var app = angular.module('app', ['HTML5ModeURLs', 'ui.bootstrap', 'ngSanitize', 'ngAnimate'], function ($routeProvider, $locationProvider, $httpProvider) {
	});
	
	app.directive("commonFooter", function () {
		return {
			restrict: "EA",
			replace: true,
			transclude: true,
			templateUrl: "html/footer.html"
		};
	});
	
	app.controller("AppCtrl", function ($scope, $log, $q, $timeout, $http, $interval,$location) {
        console.log("AppCtrl working");
        
        $scope.goToSubmitNeed = function(){
              console.log("ff");
            $location.href = "/our-products";
        };
    });
    
	return app;

});