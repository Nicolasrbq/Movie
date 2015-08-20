angular.module("appMovie").controller("mainController", function($scope, $http, $location, $log, $interval, moviesFactory) {
	
	$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
	
	$scope.count = [];
	
	$scope.getCounts = function() {
		
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
	
	}
	
	$scope.intervalPromise = $interval(function(){
		$scope.getCounts();
	}, 60000)
	
	$scope.getCounts();
	
	
	$scope.controlMovie = function(movie) {
		
		var title = movie.title;
		var author = movie.author;
		var actor = movie.actor
		var year = movie.year;
		var gender = movie.gender;
		var comment = movie.comment;
		
		$http({
			url: 'webservice/setMovie.php',
			method: 'POST',
			headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			transformRequest: function(obj) {
				var str = [];
				for(var p in obj)
				str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
				return str.join("&");
			},
			data: {title: title, author: author, actor: actor, year: year, gender: gender, comment: comment}
		}).then(function(message) {
			console.log(message);
		}, function(response) {
			console.log(response);
		});
		
	}
	
	
	
});