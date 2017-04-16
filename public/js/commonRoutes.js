/*global define*/
'use strict';

// set up base routes
define(['angular', 'app'], function (angular, app) {

	return app.config([ '$routeProvider', function ($routeProvider) {

		$routeProvider
			.when('/', {templateUrl: 'html/home.html', controller:  'ViewHomeController'})
			.when('/about', {templateUrl: 'html/about.html'})
			.when('/contact', {templateUrl: 'html/contact.html'})
			.when('/inventory/:id',{templateUrl: 'html/inventory.html', controller : "InventoryController"})
			.when('/login',{templateUrl: 'html/login.html'})
			.otherwise({redirectTo: '/'});

	}]);
	
});