<?php

include 'model/Movie.php';
include 'model/Author.php';

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
		$movieListRequest = 'SELECT id_movie, title FROM movie;';
		$arrayList = self::$dbh->query($movieListRequest)->fetchAll(PDO::FETCH_ASSOC);
// 		echo '<pre style="color: red;font-weight: bold;font-size: 1.5em;">'.__METHOD__.'() $arrayList => ';var_dump($arrayList);echo '</pre>';flush();
		return $arrayList;
	}
	
	public function getMovie($idMovie) {
		$movieRequest = 'SELECT * FROM movie, gender, author WHERE id_movie = "'.$idMovie.'" LIMIT 1;';
		$movie = self::$dbh->query($movieRequest)->fetch(PDO::FETCH_ASSOC);
		return $movie;
	}

	public function getAuthorList() {
		$authorListRequest = 'SELECT * FROM author;';
		$arrayList = self::$dbh->query($authorListRequest)->fetchAll(PDO::FETCH_ASSOC);
		return $arrayList;
	}
	
	public function getAuthor($idAuthor) {
		$authorRequest = 'SELECT * FROM author WHERE id_author = "'.$idAuthor.'" LIMIT 1;';
		$author = self::$dbh->query($authorRequest)->fetch(PDO::FETCH_ASSOC);
		return $author;
	}
	
	
}
