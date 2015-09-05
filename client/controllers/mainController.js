angular.module("appMovie").controller("mainController", function($scope, $http, $location, $log, $interval, moviesFactory) {
	
	$http.get('/').then(function(res){
		$scope.movies = res.data;
	});
	
	/*$scope.intervalPromise = $interval(function(){
		$scope.getCounts();
	}, 60000)*/	
	
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
	
});