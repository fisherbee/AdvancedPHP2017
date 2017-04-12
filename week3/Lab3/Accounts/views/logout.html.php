
<p>Current User: </p>
<p>User ID - </p>
<p>Email - </p>

<?php 
    include './autoload.php';
    $logout = filter_input(INPUT_GET, 'logout');
    $util = new Util();
    
    if($logout == 1) {
        unset($_SESSION['user_id']);
        $util->redirect("Login.php");
    }

?> 

<a href="?logout=1">Logout</a>