<?php
    session_start();
   
    require_once('config.php');

    
    //Function to sanitize values received from the form. Prevents SQL injection
    function clean($str) {
        $str = @trim($str);
        if(get_magic_quotes_gpc()) {
            $str = stripslashes($str);
        }
        return mysql_real_escape_string($str);
    }
    
    // check if Delete is set in POST
     if (isset($_POST['Delete'])){
         // get id value of category and Sanitize the POST values
         $category_id = clean($_POST['category']);
         
         // delete the entry
         $result = mysql_query("DELETE FROM categorie WHERE category_id='$category_id'")
         or die("There was a problem while deleting the category ... \n" . mysql_error()); 
         
         // redirect back to options
         header("Location: options.php");
     }
     
         else
            // if id isn't set, redirect back to options
         {
            header("Location: options.php");
         }
     
 
     // check if the 'id' variable is set in URL
     if (isset($_GET['id']))
     {
         // get id value
         $id = $_GET['id'];
         
         // delete the entry
         $result = mysql_query("DELETE FROM categorie WHERE category_id='$id'")
         or die("There was a problem while deleting the category ... \n" . mysql_error()); 
         
         // redirect back to the categories
         header("Location: categories.php");
     }
     else
        // if id isn't set, redirect back to the categories
     {
        header("Location: categories.php");
     }
 
?>