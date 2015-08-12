angular.module("appMovie").factory("moviesFactory", function($http) {
	
	return {
		getCountMovies : function() {
			return $http({
				url: 'webservice/getCountMovies.php',
				method: 'POST'
			})
		},
		getCountAuthors : function() {
			return $http({
				url: 'webservice/getCountAuthors.php',
				method: 'POST'
			})
		},
		getCountGenders : function() {
			return $http({
				url: 'webservice/getCountGenders.php',
				method: 'POST'
			})
		},
		getCountActors : function() {
			return $http({
				url: 'webservice/getCountActors.php',
				method: 'POST'
			})
		}
	}
	
});