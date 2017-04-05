<?php

function isZipValid($zip) {
    $zipRegex = '/^[0-9]{5}$/';
    
    if (preg_match($zipRegex, $zip)) {
        return true;
    }
    
    return false;
}

function isDateValid($date) {
    return (bool)strtotime($date);
}

function isEmailValid($email) {
    
}