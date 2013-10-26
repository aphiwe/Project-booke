<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
 
    <title>Something Else</title>
 
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
 
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
 
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
#apDiv1 {
	position:absolute;
	left:715px;
	top:98px;
	width:337px;
	height:337px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:716px;
	top:68px;
	width:339px;
	height:29px;
	z-index:2;
}
</style>
  </head>
 
  <body>
  <?php 
        // this will make 'home', 'view products' and 'view cart' appear
        include 'Navigation.php' 
    ?>
    <div id="apDiv1">
      <table width="140" height="323" border="1">
        <tr>
          <td width="415"><p>
          
          
          <form action="register.php" method="POST">
    	Username: <input type="text" name="username" value="<?php //echo "$name"; ?>"><p>
        Email: <input type="text" name="email" value="<?php //echo "$username"; ?>"> <p>
        Password: <input type="password" name="password"> <p>
        Re-Enter Password: <input type="password" name="password1"><p>
        <input type="submit" name="submit" value="Register">
    </form>
          
          
          
          
          
          
          
          
          
          &nbsp;</p>
          <p>&nbsp;</p></td>
        </tr>
      </table>
    </div>
    <div id="apDiv2">
      <?php
if($_POST['submit'])
{
	$username = trim($_POST['username']);
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	$password1 = trim($_POST['password1']);
	
	
	
	//$enc_password = md5($password);
	
	if($username && $email && $password && $password1)
	{
		//if(strlen($username)<30)
		if (eregi('^[a-z0-9]{6,}$',$username))
		{
			//if(strlen($email)<10)
			if (eregi('^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$', $email))
			{
				//if(strlen($password)<15 || strlen($password)>6)
				if (eregi('^[A-Za-z0-9!@#$%^&*()_].{6,20}$',$password))
				{
					if($password == $password1)
					{
						require "config.php";
						$query = mysql_query("INSERT INTO users VALUES ('','$username','$email','$password')");
						echo "Registration Complete! <a href='login.php'>Click here to login</a>";
					}
					else
					{
						//echo "Passwords must match";
						echo '<span style="font-size:14px; color:#cc0000; margin-top:10px">Passwords must match</span>';
					}
				}
				else
				{
					//echo "Your password must be between 6 and 15 characters";	
					echo '<span style="font-size:14px; color:#cc0000; margin-top:10px">Your password must be between 6 and 15 characters</span>';
				}
			}
			else
			{
				//echo "Invalid email";	
				echo '<span style="font-size:14px; color:#cc0000; margin-top:10px">Invalid email</span>';
			}
		}
		else
		{
			//echo "Invalid username";
			echo '<span style="font-size:14px; color:#cc0000; margin-top:10px">Invalid username</span>';
		}
	}
	else
	{ 
		//echo "All fields are required"; 
		echo '<span style="font-size:14px; color:#cc0000; margin-top:10px">All fields are required</span>';
	}
}

?>
    </div>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href='index.php' class='customButton'>Home</a></li>
		
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
  </div>
 
 
    <div class="container">
   
      <!--<div class="starter-template">
       <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>-->
     
    </div><!-- /.container -->
     

 
    
    <div class='sectionContents'>
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
		
		
        
		 <h2 align="center">register page</h2>
  <p align="center">&nbsp;</p>
		 <p>&nbsp;</p>
</body>
</html>

