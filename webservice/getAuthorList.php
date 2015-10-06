<?php

include_once '../model/Model.php';

$authorList = new Model();

echo $authorList->getAuthorList();