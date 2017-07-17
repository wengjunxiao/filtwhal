/*global define*/
'use strict';

define(['angular', 'app'], function (angular, app) {

	return app.controller("ViewHomeController", function ($scope) {
		console.log('ViewHomeController working');
		var currIndex = 0;
		$scope.myInterval = 5000;
        $scope.slides = [
            {text: 'one', image: 'http://lh5.ggpht.com/ndBVatOp_eD04H9JEa6BpsFzJ9BvUDK_D6msnMgEQETyxU7Wd7IB3rKNC2wD2NH2RR3JzoyxBnzO1XWqKs8L=s900', id: currIndex++},
            {text: 'two', image: 'http://lh4.ggpht.com/oIkXJFgcHS02nDbl6TTnvhufqroNf4eSlTHsQKWEbJ2X8pDZQgfsC9tSjdow0N4k4_ccurRIMSGepOsnhCxIuarh=s900', id: currIndex++},
            {text: 'three', image: 'http://lh4.ggpht.com/JfhSvqpID7PO4i0XsmE0IhQoKmFcAJfxvRZdf5MS0u-7CMWYmHyh9JYXdjohMGLmCsCPm5y0EFGrN2HUSGcxW4zF=s900', id: currIndex++},
            {text: 'four', image: 'http://lh5.ggpht.com/TXDXBvNhRi4tB8_U-f2O_yFKHNEZZQwqZx85-B8cxDMAiJ_EzZ7I2GXZhFCrURSCm6N1MqE8suRuNFW7kSN7XeTw=s900', id: currIndex++},
        ];
        
	});
	
});