<?php

$cars = [
    ['Bmw', 50, 10],
    ['Probox', 30, 0],
    ['Trucks', 10, 4],
];

print_r($cars);
echo "\n";

echo $cars[1][0];

echo "\n";

for ($a = 0; $a < count($cars); $a++) {
    for ($b = 0; $b < count($cars[$a]); $b++) {
        echo $cars[$a][$b] . ' ';
    }
    echo "\n";
}

echo "\n\n";

echo count($cars);
echo "\n\n";