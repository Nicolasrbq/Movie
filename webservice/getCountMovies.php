<?php

include_once '../model/Model.php';

$countMovies = new Model();

echo $countMovies->getCountMovies();