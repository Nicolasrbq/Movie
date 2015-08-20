<?php

include_once '../model/Model.php';

$movie = new Model();

$data = json_decode(file_get_contents("php://input"));

$title = $data->title;
$author = $data->author;
$actor = $data->actor;
$year = $data->year;
$gender = $data->gender;
$comment = $data->comment;

$return = $movie->setMovie($title, $author, $actor, $year, $gender, $comment);

print_r($return);