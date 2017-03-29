<?php

function readAllAddress() {
    $db = dbconnect();
    $stmt = $db->prepare("SELECT * FROM phone");
    
    $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
       $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    return $results;
}

/**
 * A method to add an address and its' data to the database
 * 
 * @param String $fullname
 * @param String $email
 * @param String $addressline1
 * @param String $city
 * @param String $state
 * @param String $zip
 * @param String $birthday
 * 
 * @return boolean
 */
function createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday) {
    $db = dbconnect();
    
    $stmt = $db->prepare("INSERT INTO address SET fullname = :fullname, email = :email, addressline1 = :addressline1, city = :city, state = :state, zip = :zip, birthday = :birthday");
    $binds = array(
        ":fullname" => $fullname,
        ":email" => $email,
        ":addressline1" => $addressline1,
        ":city" => $city,
        ":state" => $state,
        ":zip" => $zip,
        ":birthday" => $birthday,
    );
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        return true;
    }
    
    return false;
}