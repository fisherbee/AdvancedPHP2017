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
        include './links.template.php';
        $folder = './uploads';
        if ( !is_dir($folder) ) {
            die('Folder <strong>' . $folder . '</strong> does not exist' );
        }
        $directory = new DirectoryIterator($folder);
           
        ?>
        <table border="1">
        <?php foreach ($directory as $fileInfo) : ?>  
            <?php if ( $fileInfo->isFile() ) : ?>

            <tr>
                <td><?php echo $fileInfo->getFilename(); ?></td> 
                <td><a href="viewSingle.php?fileName=<?php echo $fileInfo->getPathname(); ?>">View</a></td> 
                <td><a href="delete.php?fileName=<?php echo $fileInfo->getPathname(); ?>">Delete</a></td>
            </tr>
             
            <?php endif; ?>  
        <?php endforeach; ?>
            </table>
    </body>
</html>
