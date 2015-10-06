<?php

	require_once './libs/lessc.inc.php';
	
	try {
		lessc::ccompile('./css/styles.less', './css/styles.css');
	} catch (exception $ex) {
		exit('lessc fatal error: '.$ex->getMessage());
	}

	/*------------------------------------------------------------*/
	
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
 	
?>
<!DOCTYPE HTML>
<html ng-app="appMovie">
	<head>
		<title><?php echo $Movies ?></title>
		
		<meta charset="UTF-8">
		
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="foundation/css/foundation.min.css">
		<link rel="stylesheet" href="css/font-awesome-4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
		
	</head>
	<body ng-controller="mainController">
		<div id="main">
			<header>
				<div id="menu">
					<nav>
						<ul>
							<li><a href="index.php"><i class="fa fa-film fa-fw"></i><span><?php echo $Movies ?></span></a>
								<ul>
									<li><a href="index.php?adMovie"><?php echo $AdMovie ?></a></li>
								</ul>
							</li>
							<li><a href=""><i class="fa fa-book fa-fw"></i><span><?php echo $Authors ?></span></a></li>
							<li><a href=""><i class="fa fa-tag fa-fw"></i><?php echo $Genders ?></a></li>
						</ul>
					</nav>
				</div>
				<div id="flags">
					<a href="?lang=fr"><img src="img/french-flag.png" alt="French flag"></a>
					<a href="?lang=en"><img src="img/british-flag.png" alt="English flag"></a>
				</div>
			</header>