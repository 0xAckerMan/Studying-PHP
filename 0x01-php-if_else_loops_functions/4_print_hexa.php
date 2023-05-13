#!/usr/bin/php

<?php
//Write a program that prints all numbers from 0 to 98 in decimal and in hexadecimal

for ($i = 0; $i < 99; $i++){
    $hex = dechex($i);
    echo "$i = 0x$hex\n";
}