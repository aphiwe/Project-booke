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
    
    //setup a directory where images will be saved 
    $target = "../images/"; 
    $target = $target . basename( $_FILES['photo']['name']); 
    
    //Sanitize the POST values
    $name = clean($_POST['title']);
    $description = clean($_POST['author']);
    $price = clean($_POST['price']);
    $category = clean($_POST['category']);
    $photo = clean($_FILES['photo']['name']);

    //Create INSERT query
    $qry = "INSERT INTO product(title, author, price, product_photo, product_category) VALUES('$name','$description','$price','$photo','$category')";
    $result = @mysql_query($qry);
    
    //Check whether the query was successful or not
    if($result) {
         
         $moved = move_uploaded_file($_FILES['photo']['tmp_name'], $target);
         
         if($moved) 
         {  
             //echo "The photo ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory"; 
			 header("Location: products.php");
         } else {  
             //Gives an error if its not okay 
             echo "Sorry, there was a problem uploading your photo. "  . $_FILES["photo"]["error"]; 
         }
        
        exit();
    }else {
        die("Query failed " . mysql_error());
    } 
 ?>