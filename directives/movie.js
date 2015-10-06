angular.module("appMovie").directive("movie", function() {
	
	return {
		restrict: 'E',
		templateUrl: 'template/number.html',
		replace: true,
		scope: {
			movie: '=movie'
		}
	}
	
});