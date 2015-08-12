angular.module("appMovie").factory("serviceFactory", function($http) {
	
	var numberMoviesFactory = $http.post("webservice/getNumberMovies.php").then(function(response){ return response.data });
	
	var numberAuthorsFactory = $http.post("webservice/getNumberAuthors.php").then(function(response){ return response.data });
	
	console.log(numberMoviesFactory);
	
	return {
		numberMoviesFactory: numberMoviesFactory,
		numberAuthorsFactory: numberAuthorsFactory
	}
});
