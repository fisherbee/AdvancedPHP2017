<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./views/bootstrap.min.css">
    </head>
    <body class="container-fluid">
        <?php
        session_start();
        include './autoload.php';
        
        $util = new Util();
        $accounts = new Accounts();
        
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        
        if($util->isPostRequest()) {
            
            $loginInfo = $accounts->login($email, $password);
            
            if($loginInfo > 0 ) {
                $_SESSION['user_id'] = $loginInfo;
                $_SESSION['email'] = $email;
                $util->redirect("Admin.php", array("email" => $email));
            } else {
                echo "Login failed";
            }
        }
        
        
        include './views/login.html.php';
        
        
        ?>
    </body>
</html>
