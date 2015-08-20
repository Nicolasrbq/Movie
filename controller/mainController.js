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
		
		var $title = movie.title;
		var $author = movie.author;
		var $actor = movie.actor
		var $year = movie.year;
		var $gender = movie.gender;
		var $comment = movie.comment;
		
		/*$http({
			url: 'webservice/setMovie.php',
			method: 'GET',
			headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			data: {'title': $title, 'author': $author, 'actor': $actor, 'year': $year, 'gender': $gender, 'comment': $comment}
		}).then(function(message) {
			console.log(message);
			alert(message);
		}, function(response) {
			console.log(response);
		});*/
		
		$http.post('webservice/setMovie.php',
		{
			'title': $title,
			'author': $author,
			'actor': $actor,
			'year': $year,
			'gender': $gender,
			'comment': $comment
		}).success(function(data, status, headers, config){
			console.log('Success : '+data);
			console.log('Status : '+status);
		}).error(function(data, status){
			console.log('Error : '+data);
			console.log('Status : '+status);
		});
		
	}
	
});