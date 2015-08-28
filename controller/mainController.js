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
	
	function resultRequestTrue() {
		var $content = '<div class="request" style="width:60px;height:60px;box-sizing:border-box;z-index:2;background:#6DEA93;margin:auto;border-radius:5px;"><i class="fa fa-check" style="font-size:50px;padding:5px;"></i><div>';
		$('form').append($content);
		$('.request').hide().fadeIn('slow');
		window.setTimeout(function() {
			$('.request').fadeOut('slow');
			$('.requestTrue').remove();
		}, 5000);
	}
	
	function resultRequestFalse() {
		var $content = '<div class="request" style="width:60px;height:60px;box-sizing:border-box;z-index:2;background:#EA6D93;margin:auto;border-radius:5px;"><i class="fa fa-times" style="font-size:60px;padding:5px;margin:auto 6px;"></i><div>';
		$('form').append($content);
		$('.request').hide().fadeIn('slow');
		window.setTimeout(function() {
			$('.request').fadeOut('slow');
			$('.request').remove();
		}, 5000);
	}
	
	$scope.controlMovie = function(movie) {
		
		var $title = movie.title;
		var $author = movie.author;
		var $actor = movie.actor
		var $year = movie.year;
		var $gender = movie.gender;
		var $comment = movie.comment;
		
		$http.post('webservice/setMovie.php',
		{
			'title': $title,
			'author': $author,
			'actor': $actor,
			'year': $year,
			'gender': $gender,
			'comment': $comment
		}).then(function(response){
			console.log('Success');
			resultRequestTrue();
		}, function(response){
			console.log('Error');
			resultRequestFalse();
		});
		
	}
	
});