<?php

class DB {
    //put your code here
    
    protected $db = null;
    protected $dns;
    protected $user;
    protected $password;
    
    function __construct($dns, $user, $password) {
        $this->dns = $dns;
        $this->user = $user;
        $this->password = $password;
    }
      
    public function getDb() { 
        
        /*
         * If the DB is not null a connection has been made.
         */
        if ( null != $this->db ) {
            return $this->db;
        }
        
        try {
            /* Create a Database connection and 
             * save it into the variable */
            $this->db = new PDO($this->dns, $this->user, $this->password);
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (Exception $ex) {
            /* If the connection fails we will close the 
             * connection by setting the variable to null */
            $this->closeDB();
            throw new Exception($ex->getMessage());
                        
        }

        return $this->db;
    }
    
    protected function closeDB() {
        $this->db = null;
    }
    
    function dbconnect() {
        $config = array(
            'DB_DNS' => 'mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017',
            'DB_USER' => 'root',
            'DB_PASSWORD' => ''
        );

        try {
            /* Create a Database connection and 
             * save it into the variable */
            $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (Exception $ex) {
            /* If the connection fails we will close the 
             * connection by setting the variable to null */
            $db = null;
            $message = $ex->getMessage();
            var_dump($message);
            exit();
        }

        return $db;
    }
}
