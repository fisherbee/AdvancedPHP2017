<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./views/bootstrap.min.css">
    </head>
    <body>
        <?php
        include './autoload.php';

        $util = new Util();
        $accounts = new Accounts();

        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $errors = [];

        if ($util->isPostRequest()) {


            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                $errors[] = 'Email is not valid';
            }
            
            if(empty($password)) {
                  $errors[] = 'Password is required'; 
               }

            if (count($errors) === 0) {
                if ($accounts->signup($email, $password)) {
                    $util->redirect("Login.php", array("email" => $email));
                } else {
                    echo "Did not work";
                }
            }
        }

        include './views/errors.html.php';
        include './views/SignUp.html.php';
        ?>
        
        
    </body>
</html>
