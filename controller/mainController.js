angular.module("appMovie").controller("mainController", function($scope, $http, $location, $log, moviesFactory) {
	$scope.count = [];
	
	moviesFactory.getCountMovies().success(function(data){
		$scope.count.movies = data;
	});
	
	moviesFactory.getCountAuthors().success(function(data){
		$scope.count.authors = data;
	});
	
	moviesFactory.getCountGenders().success(function(data){
		$scope.count.genders = data;
	});
	
	moviesFactory.getCountActors().success(function(data){
		$scope.count.actors = data;
	});
	
});