<?php

function primeNumber($number) {
    $count = 9;
    $result = 0;

    while($count > 0) {
      if(!is_float(delay($number, $count))) {
        $result++;
      }
      $count--; 
    }
    return $result <= 2;
}

function delay($a, $b) {
    return $a / $b;
}