<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $fileName = filter_input(INPUT_GET, 'fileName');
            
            try {
                $result = unlink($fileName);
            } catch (RuntimeException $e) {
                $error = $e->getMessage();
            }
            
            if($result) {
                echo 'File was deleted';
            } else {
                echo $error;
            }
            
        ?>
        
        
        <p><a href="viewFiles.php">Return to file list</a></p>
    </body>
</html>
