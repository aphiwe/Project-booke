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
	left:76px;
	top:151px;
	width:345px;
	height:131px;
	z-index:1;
}
#apDiv3 {
	position:absolute;
	left:236px;
	top:289px;
	width:904px;
	height:87px;
	z-index:2;
}
#apDiv4 {
	position:absolute;
	left:635px;
	top:151px;
	width:506px;
	height:137px;
	z-index:3;
}
</style>
</head>

<body>
<div id="apDiv2">





</div>
<div id="apDiv3">

<table width="749" border="1">
<tr>
<td width="289">TITLE</td>
<td width="214">DESCRIPTION</td>
<td width="57"> PRICE </td>
<td width="57"> BOOK_ID </td>
<td width="161"> ACTION </td>
</tr>

<?php
include ("config.php");


$strquery="SELECT * from product";
$results=mysql_query($strquery);
$num=mysql_numrows($results);

$i=0;
while ($i< $num)

{

$f1=mysql_result($results,$i,"title");
$f2=mysql_result($results,$i,"author");
$f3=mysql_result($results,$i,"price");
$f4=mysql_result($results,$i,"id");

?>

<tr>
<td><?php echo $f1 ; ?></td>
<td><?php echo $f2 ; ?></td>
<td><?php echo $f3 ; ?></td>
<td><?php echo $f4 ; ?></td>
<td><?php echo " <a href='edit.php?do=edit&id=" . $f4 . "'> edit </a> "; ?> | <?php echo " <a href='delete.php?id=" . $f4 . "'> delete </a> "; ?></td>
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
<div id="apDiv4">

<form id="form1" name="form1" method="get" action="search.php">
<div class="col-lg-3">

  <input name="search" type="text" id="search" class="form-control" placeholder=" Product ID"/></div>
<button type="submit" class="btn btn-default">Search</button>
</p>
</form>

</div>
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
          <a class="navbar-brand" href="#" <?php echo $_SESSION['user'];?>Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href='profile.php' class='customButton'>Profile</a></li>
            <li class="active"><a href='add.php' class='customButton'>Home</a></li>
			<li class="active"><a href='main.php' class='customButton'>Products</a></li>
            <li class="active"><a href='products.php' class='customButton'>New Products</a></li>
            <li class="active"><a href='main.php' class='customButton'>Products</a></li>
            <li class="active"><a href='categories.php' class='customButton'>Categories</a></li>
             <li class="active"><a href='accounts.php' class='customButton'>Members</a></li>
            
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
		

		



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>

</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp; </p>



  </body>
</html>

