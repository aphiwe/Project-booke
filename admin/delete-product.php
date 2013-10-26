<?php
    session_start();

    include('config.php');
    
     // check if the 'id' variable is set in URL
     if (isset($_GET['id']))
     {
         // get id value
         $id = $_GET['id'];
         
         // delete the entry
         $result = mysql_query("DELETE FROM product WHERE id='$id'")
         or die("There was a problem while removing the food ... \n" . mysql_error()); 
         
         // redirect back to the foods page
         header("Location: products.php");
         }
     else
     // if id isn't set, redirect back to the foods page
     {
        header("Location: products.php");
     }
 
?>