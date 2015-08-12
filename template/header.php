<?php
	
	if(isset($_GET['lang'])) {
		if ($_GET['lang'] == 'en') {
			setcookie("french", 1 , time() -4200);
			setcookie("english", 1 , time() + (((3600*24)*30)*12));
		} else {
			setcookie("english", 1 , time() -4200);
			setcookie("french", 1 , time() + (((3600*24)*30)*12));
		}
		header('Location: index.php');
	}

	if (isset($_COOKIE['english']) OR !isset($_COOKIE['french'])) {
		$language="english";
	} else {
		$language="french";
	}
	
 	require 'lang/'.$language.'/general.php';
	
// 	echo $language;
?>
<!DOCTYPE HTML>
<html ng-app="appMovie">
	<head>
		<title><?php echo $Movies ?></title>
		
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
							<li><a href=""><?php echo $Movies ?></a></li>
							<li><a href=""><?php echo $Authors ?></a></li>
							<li><a href=""><?php echo $Genders ?></a></li>
						</ul>
					</nav>
				</div>
				<div id="flags">
					<a href="?lang=fr"><img src="img/french-flag.png" alt="French flag"></a>
					<a href="?lang=en"><img src="img/british-flag.png" alt="English flag"></a>
				</div>
			</header>