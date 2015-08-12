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
		$movieListRequest = 'SELECT * FROM movie, gender, author GROUP BY id_movie;';
		$arrayList = self::$dbh->query($movieListRequest)->fetchAll();
		return $arrayList;
	}
	
	public function getMovie($idMovie) {
		$movieRequest = 'SELECT * FROM movie, gender, author WHERE id_movie = "'.$idMovie.'" LIMIT 1;';
		$movie = self::$dbh->query($movieRequest);
		$movie = $movie->fetch(PDO::FETCH_ASSOC);
		return $movie;
	}
	
	public function getCountMovies() {
		$countRequest = 'SELECT count(*) FROM movie;';
		$count = self::$dbh->query($countRequest);
		$count = $count->fetchColumn();
		return $count;
	}
	
	public function getCountAuthors() {
		$countRequest = 'SELECT count(*) FROM author;';
		$count = self::$dbh->query($countRequest);
		$count = $count->fetchColumn();
		return $count;
	}
	
	public function getCountGenders() {
		$countRequest = 'SELECT count(*) FROM gender;';
		$count = self::$dbh->query($countRequest);
		$count = $count->fetchColumn();
		return $count;
	}
	
	public function getCountActors() {
		$countRequest = 'SELECT count(*) FROM actor;';
		$count = self::$dbh->query($countRequest);
		$count = $count->fetchColumn();
		return $count;
	}
	
}
