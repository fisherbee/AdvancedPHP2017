<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Is it valid?</p>
        <?php
        // put your code here
        $checkNum = filter_input(INPUT_GET, 'check');
        if($checkNum == 4) {
            echo "Yes";
        } else {
            echo "No";
        }
        ?>
    </body>
</html>
