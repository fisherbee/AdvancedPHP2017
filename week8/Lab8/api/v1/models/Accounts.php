<?php

/**
 * Description of Accounts
 *
 * @author 001301554
 */
class Accounts extends DBSpring {
    //put your code here
    
    public function signup($email ,$password){
        $db = $this->getDB();
        $stmt = $db->prepare("INSERT INTO users SET email = :email, password = :password, created = NOW()");
        $binds = array(
            ":email" => $email,
            ":password" => password_hash($password, PASSWORD_DEFAULT)
        );
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }
    
        return false;
    }
    
    public function login($email, $password) {
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $binds = array(
            ":email" => $email,
        );
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if(password_verify($password, $results['password'])) {
                return $results['user_id'];
            }
        }
    
        return 0;
    }

    
    
}
