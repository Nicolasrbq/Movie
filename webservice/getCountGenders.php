<?php

include_once '../model/Model.php';

$countGenders = new Model();

echo $countGenders->getCountGenders();