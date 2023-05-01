<?php

function sortArrayOfNumbers ($numbers) {
    sort($numbers, SORT_NUMERIC); 
    
    return $numbers;
}
