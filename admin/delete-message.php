<?php
    session_start();
    
    include('config.php');
    
     // check if the 'id' variable is set in URL
     if (isset($_GET['id']))
     {
         $id = $_GET['id'];
         
         $result = mysql_query("DELETE FROM messages WHERE message_id='$id'")
         or die("There was a problem while removing the message ... \n" . mysql_error()); 
        
         header("Location: messages.php");
         }
     else
     {
        header("Location: messages.php");
     }
 
?>