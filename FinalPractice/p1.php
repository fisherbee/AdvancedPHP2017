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
        <p>Will it validate??</p>
        <input type="text" name="check" value="" />
        <button href="p2.php?check=<?php filter_input(INPUT_POST, 'check'); ?>">Check it</button>
        <?php
        // put your code here
        ?>
    </body>
</html>
