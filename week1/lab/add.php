
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once './models/dbconnect.php';
            require_once './models/util.php';
            require_once './models/addressCRUD.php';
            
            $fullname = filter_input(INPUT_POST, 'fullname');
            $email = filter_input(INPUT_POST, 'email');
            $addressline1 = filter_input(INPUT_POST, 'addressline1');
            $city = filter_input(INPUT_POST, 'city');
            $state = filter_input(INPUT_POST, 'state');
            $zip = filter_input(INPUT_POST, 'zip');
            $birthday = filter_input(INPUT_POST, 'birthday');
            
            $errors = [];
            $states = getStates();
            
            if (isPostRequest()) {
                
               if(empty($fullname)) {
                  $errors[] = 'Full name is required'; 
               } 
                
               if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                  $errors[] = 'Email is not valid'; 
               } 
               
               if(empty($addressline1)) {
                  $errors[] = 'Address Line 1 is required'; 
               }
               
               if(empty($city)) {
                  $errors[] = 'City is required'; 
               }
                
            }
            
            include './templates/errors.html.php';
            include './templates/messages.html.php';
            include './templates/add-address.html.php';
        
        
        
        
        ?>
    </body>
</html>
