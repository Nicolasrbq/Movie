<?php
if ($_GET['lang']) {
	setcookie('language', $_GET['lang'] ,time() + (((3600*24)*30)*12) );
	echo "<script>window.location.href='index.php';</script>";
}

if($_COOKIE['language']) {
	if ($_COOKIE['language'] == "en") {
		$language="english";
	} else {
		$language="french";
	}
} else {
	$language="french";
}

require 'lang/'.$language.'/general.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Movie</title>
		
		<meta charset="UTF-8">
		
		<link href="css/Reset.css" type="text-css" rel="stylesheet">
		<link href="css/Styles.css" type="text-css" rel="stylesheet">
		
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/Scripts.js"></script>
		
	</head>
	<body>
		<header>
			<div id="menu">
				<nav>
					<ul>
						<li><a href="index.php"><?php echo $Movies ?></a></li>
						<li><a href="author.php"><?php echo $Authors ?></a></li>
						<li><a href="gender.php"><?php echo $Genders ?></a></li>
						<li><a href="actor.php"><?php echo $Actors ?></a></li>
					</ul>
				</nav>
			</div>
			<div id="lang">
				<div class="left">
					<a href="?lang=fr"><img src="img/Flag_of_France.png" alt="french flag" id="fr_flag" class="right"></a>
				</div>
				<div class="left">
					<a href="?lang=en"><img src="img/Flag_of_the_United_Kingdom.png" alt="english flag" id="en_flag" class="left"></a>
				</div>
			</div>
		</header>
		<div id="main">
