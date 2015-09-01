<?php

include_once '../model/Model.php';

$genderList = new Model();

echo $genderList->getGenderList();