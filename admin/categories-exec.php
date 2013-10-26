<?php
    session_start();
   
    require_once('config.php');
   
    function clean($str) {
        $str = @trim($str);
        if(get_magic_quotes_gpc()) {
            $str = stripslashes($str);
        }
        return mysql_real_escape_string($str);
    }
    
    $name = clean($_POST['name']);

    $qry = "INSERT INTO categorie(category_name) VALUES('$name')";
    $result = @mysql_query($qry);
    
    //Check whether the query was successful or not
    if($result) {
        header("location: options.php");
        exit();
    }else {
        die("Query failed " . mysql_error());
    }
 ?>