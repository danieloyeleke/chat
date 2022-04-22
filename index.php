<?php
require('includes/core.inc.php');

if(isset($_POST['send'])){
  if(send_msg($_POST['sender'],$_POST['message'])){
      echo "Message Sent";
  }else{
      echo'Messsage failed to send Please retype what you meant';
  }
    
}
?> 
<!DOCTYPE html>
<html lang="en">
<head> <title> A Simple Chat For WebAuthor</title></head>
<link type="text/css"  rel="stylesheet" href="public/css/main.css" />
<body>
        <div id="input" >   
              <form action="index.php" method = "post" id="form_input">

                <label>Enter Name:<input type="text" name="sender" id="sender" /></label>

                <label>Enter Message:<input type="text" name="message" id="sender" /></label><br />

                <input type="submit" name="send" value="Send Message" id="send" />

            </form>
            </div> 

            <div id="messages">
                <?php
                //This code are now pasted in chat.php in php folder....
                
                 $messages = get_msg();

                foreach($messages as $message){
                  echo'<strong>' .$message['sender']. '  Sent</strong><br />';
                  echo $message['message'].'<br /><br />';
                }

                ?>
            </div><!-- messages -->

<script type="text/javascript" src="script/js/jquery.1.7.1.js"></script>
<script type="text/javascript" src="script/js/auto_chat.js"></script>
<script type="text/javascript" src="script/js/send.js"></script>
          

</body>
</html>