<?php
require('../../includes/database/connect.db.php');
require('../../includes/functions/chat.func.php');

if(isset($_GET['sender']) && !empty($_GET['sender']))
{
    $sender = $_GET['sender'];
    
    if(isset($_GET['message']) && !empty($_GET['message'])){
        $message = $_GET['message'];
    }else{
        echo 'No Message was entered.';
    }
}else{
    echo 'No Name was Entered.';
}


?>