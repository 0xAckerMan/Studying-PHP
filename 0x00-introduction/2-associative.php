<?php

//Associative array
$agearr = ['Nicholas' => 27, 'Hope' => 21, 'Brian' => 22];

print_r($agearr);

echo "\n";

echo $agearr['Hope'];

echo "\n";

foreach ($agearr as $key => $value){
    echo "Name = $key and Age = $value";
    echo "\n";
}

