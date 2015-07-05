<?php

include_once("model/Movie.php");

class Model {
	
	public static $dbh = NULL;
	
	public function __construct() {
		if(!is_object(self::$dbh)){
			self::databaseConnection();
		}
	}
	
	private static function databaseConnection() {
		try {
			self::$dbh = new PDO('mysql:host=localhost;dbname=movie', 'root', 'root');
			self::$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo '<script>alert("'.$e->getMessage().'");</script>';
		}
	}
	
	public function getMovieList() {
		$movieListRequest = 'SELECT * FROM movie, gender, author;';
		$arrayList = self::$dbh->query($movieListRequest)->fetchAll();
		
// 		echo '<pre style="color: red;font-weight: bold;font-size: 1.5em;">'.__METHOD__.'() $arrayList => ';var_dump($arrayList);echo '</pre>';flush();
		
		return $arrayList;
	}
	
	public function getMovie($idMovie) {
		$movieRequest = 'SELECT * FROM movie, gender, author WHERE id_movie = "'.$idMovie.'" LIMIT 1;';
		$movie = self::$dbh->query($movieRequest);
		$movie = $movie->fetch(PDO::FETCH_ASSOC);
		
		return $movie;
	}
	
	
}
