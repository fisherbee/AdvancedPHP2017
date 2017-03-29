<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p><a href="add.php">Add Address</a></p>
        
        <?php
        include_once './models/dbconnect.php';
        include_once './models/addressCRUD.php';
        
        $addresses = readAllAddress();
        
        include './templates/view-address.html.php';
        
        
        
        ?>
        
        
    </body>
</html>
