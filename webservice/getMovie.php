<?php

include_once '../model/Model.php';

$movie = new Model();

$movie = $movie->getMovie($param);

//var_dump($movie);