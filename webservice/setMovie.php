<?php

include_once '../model/Model.php';

$movie = new Model();

//var_dump($_POST);

$title = $_POST['title'];
$author = $_POST['author'];
$actor = $_POST['actor'];
$year = $_POST['year'];
$gender = $_POST['gender'];
$comment = $_POST['comment'];

//var_dump($author);

echo $movie->setMovie($title, $author, $actor, $year, $gender, $comment);