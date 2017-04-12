<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        class Dog {
            public $name;
            
            public function __construct($name) {
                $this->name = $name;
            }
            
            public function bark() {
                echo "$this->name is barking <br />";
            }
        }
        
        $newdog = 'Dog';
        $dog = new $newdog('Rosie');
        
        $dog->bark();
        echo $dog->$name;
        
        ?>
    </body>
</html>
