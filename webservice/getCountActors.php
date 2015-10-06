<?php

include_once '../model/Model.php';

$countActors = new Model();

echo $countActors->getCountActors();