<?php

// Learning about PHP arrays and manipulations
$cars = ['audi', 'benz','navara'];

var_dump($cars);


array_push($cars,'mustang');

print_r($cars);


array_unshift($cars, 'bima', 'volvo');

var_dump($cars);

echo "\n";

//Accessing array contents
echo $cars[2];
echo "\n";

echo strtoupper($cars[1][0].strtolower(substr($cars[1],1)));

echo "\n";



