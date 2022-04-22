<?php
require('includes/database/connect.db.php');

function get_msg(){
    global $connection;
    $query = "SELECT Sender,Message FROM chat ORDER BY Msg_ID DESC";
    
    $run = mysqli_query($connection,$query);
    $messages = array();
    
    while($message = mysqli_fetch_assoc($run)){
        $messages[] = array('sender' =>$message['Sender'],
                             'message' =>$message['Message']);
    }
    
    return $messages;
}

function send_msg($sender,$message){
     global $connection;
  if(!empty($sender)&& !empty($message)){
      
     $sender = mysqli_real_escape_string($connection,$sender);
      $message = mysqli_real_escape_string($connection,$message);
      
      $query = "INSERT INTO chat VALUE(null, '{$sender}', '$message')";
      
      if($run = mysqli_query($connection,$query)){
          return true;
      }else{
          return false;
      }
      
      
  } else{
      return false;
  } 
    
} 
?>