angular.module("appMovie").factory("moviesFactory", function($http) {
	
	var numberMoviesFactory = {
		getCast: function() {
			return $http.post("webservice/getNumberMovies.php").then(function(response){
				return response.data;
			});
		}
	}
	
	return numberMoviesFactory;
});