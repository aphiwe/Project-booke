<?php
   session_start();
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
	left:257px;
	top:157px;
	width:453px;
	height:208px;
	z-index:1;
}
</style>
  </head>
 
  <body>
  <?php 
        // this will make 'home', 'view products' and 'view cart' appear
        include 'Navigation.php' 
    ?>
    <div id="apDiv2">
      <div id="apDiv1">
        <p align="center">
          <?php 
    if(isset($_GET['msg']))
	{
		$message = $_GET['msg'];
		if($message == 1)
			echo "<span style= 'color:green'>Your Entry been saved</span>";
			
			if($message == 2)
			echo "<span style='color:red;'>Invalid username & password";
		
		}

?>
        </p>
        <form id="form1" name="form1" method="post" action="login.php">
          <table width="339" border="0">
            <tr>
            <div class="col-lg-3">
              <td width="82">username</td>
              <td width="147"><label for="textfield"></label>
                <input type="text" name="username" id="user" class="form-control" placeholder="simanga123"/></td>
              <td width="88">&nbsp;</td>
            </tr>
            <tr>
              <td>password</td>
              <td><input type="password" name="password" id="pass" class="form-control" placeholder="************"/></td>
              <td>&nbsp;</td>
            </div>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
      </form>
    </div>
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
            <li class="active"><a href='../index.php' class='customButton'>Home</a></li>
			
           
        
          </ul>
        </div><!--/.nav-collapse -->
      </div>
  </div><hr>

 
 
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
		 

</body>
</html>

