<?php

include_once '../model/Model.php';

$countAuthors = new Model();

echo $countAuthors->getCountAuthors();