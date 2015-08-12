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
		return $arrayList;
	}
	
	public function getMovie($idMovie) {
		$movieRequest = 'SELECT * FROM movie, gender, author WHERE id_movie = "'.$idMovie.'" LIMIT 1;';
		$movie = self::$dbh->query($movieRequest);
		$movie = $movie->fetch(PDO::FETCH_ASSOC);
		return $movie;
	}
	
	public function getNumberMovies() {
		$numberRequest = 'SELECT count(*) FROM movie;';
		$number = self::$dbh->query($numberRequest);
		$number = $number->fetchColumn();
		return $number;
	}
	
	public function getNumberAuthors() {
		$numberRequest = 'SELECT count(*) FROM author;';
		$number = self::$dbh->query($numberRequest);
		$number = $number->fetchColumn();
		return $number;
	}
	
}
