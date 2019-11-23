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

$newmas = array($bmw,$toyota,$opel);

echo "CAR BMW<br>";

echo $newmas[0]['model'] . ' ' . $newmas[0]['speed'] . ' ' . $newmas[0]['doors'] . ' ' . $newmas[0]['year'];

echo "<br>CAR TOYOTA<br>";
echo $newmas[1]['model'] . ' ' . $newmas[1]['speed'] . ' ' . $newmas[1]['doors'] . ' ' . $newmas[1]['year'];

echo "<br>CAR OPEL<br>";
echo $newmas[2]['model'] . ' ' . $newmas[2]['speed'] . ' ' . $newmas[2]['doors'] . ' ' . $newmas[2]['year'];

//echo "<pre>";
//var_dump($newmas);
//echo "</pre>";


//
//echo "CAR BMW<br>";
//echo "$newmas[0]<br>";
//echo "CAR TOYOTA<br>";
//echo "CAR OPEL<br>";



