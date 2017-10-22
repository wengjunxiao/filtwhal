/*global define*/
'use strict';

define(['angular', 'app'], function (angular, app) {

	return app.controller("ViewHomeController", function ($scope) {
		console.log('ViewHomeController working');
		var currIndex = 0;
		$scope.myInterval = 5000;
    	$scope.slides = [
            /*{text: 'one', image: '/img/character_design.jpg', id: currIndex++},*/
            {text: 'one', image: '/img/graphic_design2.jpg', id: currIndex++},
            {text: 'one', image: '/img/graphic_designN.png', id: currIndex++}, 
            /*{text: 'one', image: '/img/graphic_design3.jpg', id: currIndex++},
            {text: 'one', image: '/img/graphic_design4.jpg', id: currIndex++},
            {text: 'one', image: '/img/icon_design.jpg', id: currIndex++},
            {text: 'one', image: '/img/package_design.jpg', id: currIndex++},
            {text: 'one', image: '/img/package_design2.jpg', id: currIndex++},
            {text: 'one', image: '/img/package_design3.jpg', id: currIndex++},
            {text: 'one', image: '/img/package_storefront_design.jpg', id: currIndex++},*/
            {text: 'one', image: '/img/poster_design.jpg', id: currIndex++},
        ];
        
	});
	
});