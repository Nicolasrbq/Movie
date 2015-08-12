<?php

include_once '../model/Model.php';

$numberAuthors = new Model();

$number = $numberAuthors->getNumberAuthors();

echo $number;