<?php
$bmw = ["model" => "","speed" => "","doors" => "","year" => ""];
$toyota = ["model" => "","speed" => "","doors" => "","year" => ""];
$opel = ["model" => "","speed" => "","doors" => "","year" => ""];

$bmw["model"]="X5";
$bmw["speed"]="120";
$bmw["doors"]="5";
$bmw["year"]="2015";

$toyota["model"]="Camry";
$toyota["speed"]="140";
$toyota["doors"]="5";
$toyota["year"]="2012";

$opel["model"]="Cadet";
$opel["speed"]="110";
$opel["doors"]="3";
$opel["year"]="1999";

$newmas = ['BMW' => $bmw,'TOYOTA' => $toyota,'OPEL' => $opel];
foreach($newmas as $key => $value) {
    echo "CAR ".$key."<br>";
    echo ($newmas[$key]['model']). " ";
    echo ($newmas[$key]['speed']). " ";
    echo ($newmas[$key]['doors']). " ";
    echo ($newmas[$key]['year']). "<br><br>";
}