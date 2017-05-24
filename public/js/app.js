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
	
	app.controller("AppCtrl", function ($scope, $log, $q, $timeout, $http, $interval,$location,LoginService) {
        console.log("AppCtrl working");
        $scope.tabs = [
            { title:'Tab 1', content:'Dynamic content 1' },
            { title:'Tab 2', content:'Dynamic content 2' },
            { title:'Tab 3', content:'Dynamic content 3' }
        ];
        $scope.testimonials = [];
        $scope.loginUserName = null;
        $scope.loginOrlogout = "Login";
        
        $http.get('/json/testimonials.json')
         .then(function mySucces(data) {
             $scope.testimonials = data;
         }, function myError(data, status, headers, config) {
             console.log(status);
             console.log(data);
         });
         
        $scope.inventorys = [
            {id:'1',name: 'lobster', weight: '10kg', price: '$1000', quantity: '1000'},
            {id:'2',name: 'lobster', weight: '10kg', price: '$1000', quantity: '1000'},
            {id:'3',name: 'lobster', weight: '10kg', price: '$1000', quantity: '1000'},
            {id:'4',name: 'lobster', weight: '10kg', price: '$1000', quantity: '1000'}
        ];
        
        $scope.goToDetail = function(inventory){
            $location.path('/inventory/' + inventory.id);
        };

         $scope.goToLoginOrLogout = function(){
            if($scope.loginUserName == null) {
                $location.path('/login');    
            } else {
                LoginService.set(null);
                $scope.loginUserName = LoginService.userName;
                $scope.loginOrlogout = "Login";
            }
            
        };

        $scope.login = function(userName) { 
            console.log(userName);
            LoginService.set(userName);
            $scope.loginUserName = LoginService.userName;
            $scope.loginOrlogout = "Logout";
            $location.path('/home');
        }
    });

	return app;

});