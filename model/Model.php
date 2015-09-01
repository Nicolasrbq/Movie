<?php

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
		return json_encode($arrayList);
	}
	
	public function getMovie($idMovie) {
		$movieRequest = 'SELECT * FROM movie, gender, author, actor WHERE id_movie = "'.$idMovie.'" LIMIT 1;';
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
	
	public function setMovie($title, $author, $actor, $year, $gender, $comment) {
		
		$insertMovie = self::$dbh->prepare('INSERT INTO movie (title, description, year, id_gender, id_actor, id_author) VALUES ("'.$title.'", "'.$comment.'", "'.$year.'", "'.$gender.'", "'.$actor.'", "'.$author.'")');
		
		$insertMovie->execute(array(
			'title' => $title,
			'description' => $comment,
			'year' => $year,
			'id_gender' => $gender,
			'id_actor' => $actor,
			'id_author' => $author
		));
		
		$data = $insertMovie->fetch(PDO::FETCH_ASSOC);
		
		return $data;
		
	}
	
	public function getAuthorList() {
		$authorListRequest = 'SELECT * FROM author;';
		$arrayList = self::$dbh->query($authorListRequest)->fetchAll(PDO::FETCH_ASSOC);
		return json_encode($arrayList);
	}
	
	public function getGenderList() {
		$genderListRequest = 'SELECT * FROM gender;';
		$arrayList = self::$dbh->query($genderListRequest)->fetchAll(PDO::FETCH_ASSOC);
		return json_encode($arrayList);
	}
	
	public function getActorList() {
		$actorListRequest = 'SELECT * FROM actor;';
		$arrayList = self::$dbh->query($actorListRequest)->fetchAll(PDO::FETCH_ASSOC);
		return json_encode($arrayList);
	}
	
}