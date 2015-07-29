<?php

include_once '../model/Model.php';

$numberMovies = new Model();

$number = $numberMovies->getNumberMovies();

echo $number;