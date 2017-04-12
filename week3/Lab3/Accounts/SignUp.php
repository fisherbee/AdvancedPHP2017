<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        include './autoload.php';
        
        $util = new Util() ;
        $accounts = new Accounts();
        
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        
        if($util->isPostRequest()) {
            if($accounts->signup($email, $password)) {
                echo "Sign-Up worked";
                $util->redirect("Login.php", array("email"=>$email));
                
            } else {
                echo "Did not work";
            }
        }
        
        include './views/SignUp.html.php';
        
        ?>
    </body>
</html>
