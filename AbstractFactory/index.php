<?php
    include "vendor/autoload.php";
    
    use AbstractFactory\JSONMessageFactory;
    use AbstractFactory\MessagePrinter;
    use AbstractFactory\XMLMessageFactory;
    
    $data = array( 'sender' => array('name' => 'Jan', 'surname' => 'Novak', 'machine' => 'pc1'),
                   'receivers' => array(array('name' => 'George', 'surname' => 'Lucas', 'machine' => 'pc2'),
                                        array('name' => 'John', 'surname' => 'Receiver', 'machine' => 'pc3')
                                        ),
                   'message' => 'Hi There!');
    
    header("Content-Type: text/plain");
    
    $messageFactory = new JSONMessageFactory();
    $messagePrinter = new MessagePrinter($messageFactory);
    $messagePrinter->printMessage($data);
    
    echo "\n\n";
    
    $messageFactory = new XMLMessageFactory();
    $messagePrinter->setMessageFactory($messageFactory);
    $messagePrinter->printMessage($data);
?>