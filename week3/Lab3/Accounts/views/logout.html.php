<html>
<?php 
    session_start();
    $userID = $_SESSION['user_id'];
    
    
    include './autoload.php';
    $logout = filter_input(INPUT_GET, 'logout');
    $util = new Util();
    
    ?>
    <div class="col-md-3"></div>
    <div class="col-md-9">
    
        <table class="table table-striped table-bordered">
            <th>Current User</th>
            <tr><td>User ID</td> <td><?php echo $userID;?></td></tr>
            <tr><td>Email</td> <td><?php 
                if (isset($_SESSION['email'])) {
                    echo $_SESSION['email'];
                }
            ?></td></tr>
        </table>

        <?php
        if($logout == 1) {
            unset($_SESSION['user_id']);
            $util->redirect("Login.php");
        }
    
?> 
    <a href="?logout=1" class="btn btn-danger">Logout</a>
    </div>


</html>