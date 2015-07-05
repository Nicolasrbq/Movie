<?php
include 'model/Model.php';

class Controller {
	
	public $model;
	
	public function __construct() {  
        $this->model = new Model();
    } 
	
	public function invokeMovie() {
		if (!isset($_GET['movie'])) {
			$movies = $this->model->getMovieList();
			include 'view/movielist.php';
		} else {
			$movie = $this->model->getMovie($_GET['movie']);
			include 'view/viewmovie.php';
		}
	}
	
	public function invokeAuthor() {
		if(!isset($_GET['author'])) {
			$authors = $this->model->getAuthorList();
			include 'view/authorlist.php';
		} else {
			$authors = $this->model->getAuthor($_GET['author']);
			include 'view/viewauthor.php';
		}
	}
	
}

?>