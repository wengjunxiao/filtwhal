/*global define*/
'use strict';

define(['angular', 'app'], function (angular, app) {

	return app.controller("InventoryController", ['$scope', '$routeParams', function($scope, $routeParams) {
            $scope.id = $routeParams.id;
	}]);
});
	