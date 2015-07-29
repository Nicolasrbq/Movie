<!DOCTYPE HTML>
<html ng-app="appMovie">
	<head>
		<title>Movie</title>
		
		<meta charset="UTF-8">
		
		<link href="css/Reset.css" type="text-css" rel="stylesheet">
		<link href="css/Styles.css" type="text-css" rel="stylesheet">
		
		<script src="libs/jquery-2.1.4.min.js"></script>
		<script src="libs/angular.js"></script>
		<script src="app.js"></script>
		<script src="webservice/moviesFactory.js"></script>
		<script src="controller/mainController.js"></script>
		<script src="directives/movie.js"></script>
		<script src="js/Scripts.js"></script>
		
	</head>
	<body ng-controller="mainController">
		<div id="main">
			<header>
				<div id="menu">
					<nav>
						<ul>
							<li><a href="">Films</a></li>
							<li><a href="">Auteurs</a></li>
							<li><a href="">Genres</a></li>
						</ul>
					</nav>
				</div>
			</header>