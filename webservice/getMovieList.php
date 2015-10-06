<?php

include_once '../model/Model.php';

$movieList = new Model();

echo $movieList->getMovieList();