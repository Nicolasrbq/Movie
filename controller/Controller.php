<?php
include_once("model/Model.php");

class Controller {
	
	public $model;
	
	public function __construct() {  
        $this->model = new Model();

    } 
	
	public function invoke() {
		if (isset($_GET['movie'])) {
			include 'view/viewmovie.php';
		} elseif(isset($_GET['adMovie'])) {
			include 'view/adMovie.php';
		}else {
			include 'view/movielist.php';
		}
	}
	
}

?>