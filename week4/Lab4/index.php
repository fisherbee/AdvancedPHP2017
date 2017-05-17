<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        include './links.template.php';
        // put your code here
        include './autoload.php';
        
        if(count($_FILES) > 0) {
            
            $filehandler = new Filehandler();
            
            try {
                $fileName = $filehandler->upLoad('upfile');
            }  catch (RuntimeException $e) {
                $error = $e->getMessage();
            }
            
        }
        ?>
        
        <?php if(isset($error)): ?>
        <p><?php echo $error; ?></p>
        <?php endif; ?>
        
        <?php if(isset($fileName)): ?>
        <p><?php echo $fileName; ?> was uploaded</p>
        <?php endif; ?>
        
        <form enctype="multipart/form-data" action="#" method="POST">
            Select file: <input name="upfile" type="file" />
            <input type="submit" value="Send File" />
        </form>
    </body>
</html>
