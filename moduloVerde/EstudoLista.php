<?php

$idadeList = [10, 21, 19, 20];

list($idadeThigas, $idadeJoão, $idadeCaio, $idadeMatheus) = $idadeList;

$idadeList[] = 20;

foreach ($idadeList as $idade){
    echo $idade . PHP_EOL;
}