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
        <?php

        $folder = './uploads';
        if ( !is_dir($folder) ) {
            die('Folder <strong>' . $folder . '</strong> does not exist' );
        }
        $directory = new DirectoryIterator($folder);
           
        ?>

        <?php foreach ($directory as $fileInfo) : ?>  
        
            <?php if ( $fileInfo->isFile() ) : ?>
        
                
        <table>
            <tr><td><?php echo $fileInfo->getFilename(); ?></td> <td><a href=''>View</a></td> <td>Delete</td></tr>
            
        </table>
                
                <h2><?php echo $fileInfo->getFilename(); ?></h2>
                <p>uploaded on <?php echo date("l F j, Y, g:i a", $fileInfo->getMTime()); ?></p>
                <p>This file is <?php echo $fileInfo->getSize(); ?> byte's</p>
                <img src="<?php echo $fileInfo->getPathname(); ?>" />
                
            <?php endif; ?>
                
        <?php endforeach; ?>
    </body>
</html>
