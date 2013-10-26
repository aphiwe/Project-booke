<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position:absolute;
	left:298px;
	top:189px;
	width:329px;
	height:293px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:262px;
	top:322px;
	width:557px;
	height:320px;
	z-index:1;
}
#apDiv3 {
	position:absolute;
	left:134px;
	top:57px;
	width:904px;
	height:87px;
	z-index:2;
}
</style>
</head>

<body>
<div id="apDiv2">
<?php
include ("config.php");

$strquery = "SELECT * from users where id= '" . $_GET["id"] . "' ";
$results = mysql_query ($strquery);
$row = mysql_fetch_array($results);

?>

<form id="form1" name="form1" method="get" action="account-update.php">
<label>username:
<input name="title" type="text" id="name" value=" <?php echo $row["username"]; ?>" />
</label>
<p>
<label>email address:
<input name="author" type="text" id="price" value=" <?php echo $row["email"]; ?>" />
</label>
</p>
<p>
<label>
<input type="submit" name="Submit" value="Update" />
</label>
</p>
</form>



</div>
</div>
<div id="apDiv3">
  <table width="749" border="1">
    <tr>
      <td width="289">Username</td>
      <td width="214">Email </td>
      <td width="161"> ACTION </td>
    </tr>
    <?php
include ("config.php");


$strquery="SELECT * from users";
$results=mysql_query($strquery);
$num=mysql_numrows($results);

$i=0;
while ($i< $num)

{

$f1=mysql_result($results,$i,"username");
$f2=mysql_result($results,$i,"email");
$f4=mysql_result($results,$i,"id");

?>
    <tr>
      <td><?php echo $f1 ; ?></td>
      <td><?php echo $f2 ; ?></td>
      <td><?php echo $f4 ; ?></td>
      <td><?php echo " <a href='edit.php?do=edit&id=" . $f4 . "'> edit </a> "; ?></td>
    </tr>
    <?php

  $i++;
  }
  ?>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html><!DOCTYPE html>
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
  </head>
 
  <body>
  <?php 
        // this will make 'home', 'view products' and 'view cart' appear
        include 'Navigation.php' 
    ?>
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
            <li class="active"><a href='welcome.php' class='customButton'>Home</a></li>
            <li><a href="login.php">login</a></li>
             <li><a href="register.php">register</a></li>
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
		
		 
		 
		
		 
  </body>
</html>

