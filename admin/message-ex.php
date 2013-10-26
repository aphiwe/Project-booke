<?php
   include('config.php');
	
    
    $current_date = date("Y-m-d"); 
    
    $current_time = date("H:i:s");
    
    $new_subject=($_POST['subject']);
	$new_message=($_POST['txtmessage']);
    
    $from = "administrator";
	
     $result = mysql_query("INSERT INTO message(from,date,time,subject,text) VALUES('$from','$current_date','$current_time','$new_subject','$new_message')")
     or die("Message sending failed ..." . mysql_error()); 
 
     if($result){
         header("Location: messages.php");
         exit();
     }
     else
     {
        die("Message sending failed ..." . mysql_error());
     }
?>