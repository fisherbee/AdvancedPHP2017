<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet" href="./templates/bootstrap.min.css">
    </head>
    <body>
        <p class="container-fluid">
        <p><a href="add.php" class="btn btn-primary">Add Address</a></p>
        
        <?php
        include_once './models/dbconnect.php';
        include_once './models/addressCRUD.php';
        
        $addresses = readAllAddress();
        
        include './templates/view-address.html.php';
        
        
        
        ?>
        
        </p>
    </body>
</html>
