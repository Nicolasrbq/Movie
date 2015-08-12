angular.module("appMovie").controller("mainController", function($scope, $log, serviceFactory) {
	$scope.numberMovies = serviceFactory.numberMoviesFactory;
	
//	console.log($scope.numberMovies);
});

