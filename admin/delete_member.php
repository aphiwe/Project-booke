<?php
    //Start session
    session_start();
    
	//checking connection and connecting to a database
	require_once('config.php');
	
     if (isset($_GET['id']))
     {
         // get id value
         $id = $_GET['id'];
         
         // delete the entry
         $result = mysql_query("DELETE FROM users WHERE id='$id'")
         or die("The member does not exist ... \n"); 
         
         // redirect back to the accounts page
         header("Location: accounts.php");
     }
     else
        // if id isn't set, redirect back to the accounts page
     {
        header("Location: accounts.php");
     }
 
?>