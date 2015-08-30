angular.module("appMovie").factory("moviesFactory", function($http) {
	
	return {
		getCountMovies : function() {
			return $http({
				url: 'webservice/getCountMovies.php',
				method: 'GET'
			})
		},
		getCountAuthors : function() {
			return $http({
				url: 'webservice/getCountAuthors.php',
				method: 'GET'
			})
		},
		getCountGenders : function() {
			return $http({
				url: 'webservice/getCountGenders.php',
				method: 'GET'
			})
		},
		getCountActors : function() {
			return $http({
				url: 'webservice/getCountActors.php',
				method: 'GET'
			})
		},
		getMovieList : function() {
			return $http({
				url: 'webservice/getMovieList.php',
				method: 'GET'
			})
		}
	}
	
});