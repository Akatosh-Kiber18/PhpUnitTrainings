<?php

function toUppercase ($value) {
    
    $result = validator($value);

    return $result === true ? strtoupper($value) : 'String is not valid';
}

function validator ($objectForValidation) {
    $validationArray = [
        "@",".",",","/",
        "!","1","2","3",
        "4","5","6","7",
        "8","9","0","{",
        "<","}",">","?",
        ];

    foreach ($validationArray as $validationItem){
        if (strpos($objectForValidation, $validationItem)) {
           return false;
        }
    }

    return true;
}