#!/usr/bin/php
<?php
// a program that prints 0 to 99
// ascending order with two digits
// last number should be followed by a new line
// only one loop

for($i = 0; $i < 100; $i++){
    $num = str_pad($i, 2, "0", STR_PAD_LEFT);
    echo("$num,");
}


?>
