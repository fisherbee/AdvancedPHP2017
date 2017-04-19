<?php

class Validation {
    
    //Checking for valid zip code
    public function isZipValid($zip) {

        $zipRegex = '/^[0-9]{5}$/';

        if (preg_match($zipRegex, $zip)) {
            return true;
        }

        return false;
    }

    //Checking for a valid date
    public function isDateValid($date) {
        return (bool)strtotime($date);
    }

    public function isEmailValid($email) {
        return ( is_string($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) !== false );
        
    }
    
}
