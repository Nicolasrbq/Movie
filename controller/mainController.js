angular.module("appMovie").controller("mainController", function($scope, $http, $log, moviesFactory) {
	$scope.numberMovies = moviesFactory;
	
	moviesFactory.getCast().then(function(asyncCastData){
		$scope.numberMovies.cast = asyncCastData;
		$log.info($scope.numberMovies.cast);
	});
	
});

