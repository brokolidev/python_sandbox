<?php

$a = [1, 2, 3, 4, 5];

$total = array_reduce($a, function($a, $b){
    return $a + $b;
});

var_dump($total);