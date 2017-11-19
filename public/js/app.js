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

	    app.service('anchorSmoothScroll', function(){
    
    this.scrollTo = function(eID) {

        // This scrolling function 
        // is from http://www.itnewb.com/tutorial/Creating-the-Smooth-Scroll-Effect-with-JavaScript
        
        var startY = currentYPosition();
        var stopY = elmYPosition(eID);
        var distance = stopY > startY ? stopY - startY : startY - stopY;
        if (distance < 100) {
            scrollTo(0, stopY); return;
        }
        var speed = Math.round(distance / 100);
        if (speed >= 20) speed = 20;
        var step = Math.round(distance / 25);
        var leapY = stopY > startY ? startY + step : startY - step;
        var timer = 0;
        if (stopY > startY) {
            for ( var i=startY; i<stopY; i+=step ) {
                setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
                leapY += step; if (leapY > stopY) leapY = stopY; timer++;
            } return;
        }
        for ( var i=startY; i>stopY; i-=step ) {
            setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
            leapY -= step; if (leapY < stopY) leapY = stopY; timer++;
        }
        
        function currentYPosition() {
            // Firefox, Chrome, Opera, Safari
            if (self.pageYOffset) return self.pageYOffset;
            // Internet Explorer 6 - standards mode
            if (document.documentElement && document.documentElement.scrollTop)
                return document.documentElement.scrollTop;
            // Internet Explorer 6, 7 and 8
            if (document.body.scrollTop) return document.body.scrollTop;
            return 0;
        }
        
        function elmYPosition(eID) {
            var elm = document.getElementById(eID);
            var y = elm.offsetTop;
            var node = elm;
            while (node.offsetParent && node.offsetParent != document.body) {
                node = node.offsetParent;
                y += node.offsetTop;
            } return y;
        }

    };
    
});
	
	app.directive("commonFooter", function () {
		return {
			restrict: "EA",
			replace: true,
			transclude: true,
			templateUrl: "html/footer.html"
		};
	});
	
	app.controller("AppCtrl", function ($scope, $log, $q, $timeout, $http, $interval,$location，anchorSmoothScroll) {
        console.log("AppCtrl working");
        
        $scope.goToSubmitNeed = function(){
            document.location.href = "/submit-need";
        };

         $scope.goToRegister = function(){
            document.location.href = "/designer-register";
        };
    });
    
    $scope.gotoElement = function (eID){
      // set the location.hash to the id of
      // the element you wish to scroll to.
      $location.hash('bottom');
 
      // call $anchorScroll()
      anchorSmoothScroll.scrollTo(eID);
      
    };
    
	return app;

});