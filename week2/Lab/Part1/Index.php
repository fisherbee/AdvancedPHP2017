<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './autoload.php';
        
        
        $testMsg = new Message();
        
        $testMsg->addMessage("test1", "Message Test One");
        $testMsg->addMessage("test2", "Message Test Two");
        $testMsg->addMessage("test3", "Message Test Three");
        
        $testMsg->removeMessage("test3");
        
        var_dump('<br />', $testMsg->getAllMessages());
        

        $testErr = new ErrorMessage();
        
        $testErr->addMessage("test1", "Error Test One");
        $testErr->addMessage("test2", "Error Test Two");
        $testErr->addMessage("test3", "Error Test Three");
        
        $testErr->removeMessage("test2");
        
        var_dump('<br />', $testErr->getAllMessages());
        
        
        $testSuccess = new ErrorMessage();
        
        $testSuccess->addMessage("test1", "Success Test One");
        $testSuccess->addMessage("test2", "Success Test Two");
        $testSuccess->addMessage("test3", "Success Test Three");
        
        $testSuccess->removeMessage("test1");
        
        var_dump('<br />', $testSuccess->getAllMessages());
        
        ?>
    </body>
</html>
