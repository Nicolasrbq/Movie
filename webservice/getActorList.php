<?php

include_once '../model/Model.php';

$actorList = new Model();

echo $actorList->getActorList();