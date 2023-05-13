#!/usr/bin/php

<?php
/*
Write a program that prints the ASCII alphabet, in lowercase, not followed by a new line.

Print all the letters except q and e
*/

for ($char = ord('a'); $char <= ord('z'); $char ++){
    if ($char !== ord('e') && $char !== ord('q')){
        echo chr($char);
    }
}