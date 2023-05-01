<?php

function emailValidation($emailAdress) {
    
    if (emailContainsOneAtSign($emailAdress)&&emailContainsDot($emailAdress)&&emailHasValidTLD($emailAdress)) {
        return "valid";
    } else {
        return "not valid";
    }
}

function emailContainsOneAtSign($emailAdress) {
    $emailToArray = explode("@", $emailAdress);
    return count($emailToArray) == 2 ? true : false;
}

function emailContainsDot($emailAdress) {
    $emailToArray = explode(".", $emailAdress);
    return count($emailToArray) == 2 ? true : false;
}

function emailHasValidTLD($emailAdress) {
    $tldList = ["com", "net", "org", "gov", "edu", "io", "ai", "tech"];
    $emailToArray = explode(".", $emailAdress);
    $tld = end($emailToArray);
    return in_array($tld, $tldList);
}