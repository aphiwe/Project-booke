<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 

$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['password']); 


$sql="SELECT id FROM users WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];

$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
session_register("myusername");
$_SESSION['login_user']=$myusername;

header("location: welcome.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>
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
#apDiv2 {
	position:absolute;
	left:132px;
	top:67px;
	width:364px;
	height:39px;
	z-index:1;
}
</style>
  </head>
 
  <body>
    <?php 
        // this will make 'home', 'view products' and 'view cart' appear
        include 'Navigation.php' ;
		  
    ?>
    <div id="apDiv2"><span style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></span></div>
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
		 <h1>&nbsp;</h1>
		
		 <div id="apDiv1">
         <div style="font-size:11px; color:#cc0000; margin-top:10px"></div>
<form action="" method="post">
<div class="col-lg-3">
<label>UserName  :</label><input type="text" name="username" class="form-control" placeholder="simangaliso23"/><br />

<label>Password  :</label><input type="password" name="password" class="form-control" placeholder="************"/><br/>
</div>
<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>

</form>

</div>
		
		 
		 
		 
         
         
		 
	
		 

</body>
</html>

