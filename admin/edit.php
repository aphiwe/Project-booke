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
	left:280px;
	top:178px;
	width:557px;
	height:320px;
	z-index:1;
}
</style>
</head>

<body>
<div id="apDiv2">
<?php
include ("config.php");

$strquery = "SELECT * from product where id= '" . $_GET["id"] . "' ";
$results = mysql_query ($strquery);
$row = mysql_fetch_array($results);

?>

<form id="form1" name="form1" method="get" action="update.php">
<label>Name:
<input name="title" type="text" id="name" value=" <?php echo $row["title"]; ?>" />
</label>
<p>
<label>Description:
<input name="author" type="text" id="price" value=" <?php echo $row["author"]; ?>" />
</label>
</p>
<p>
<label>Price:
<input name="price" type="text" id="price" value=" <?php echo $row["price"]; ?>" />
</label>
<input name="id" type="hidden" id="section2"  value=" <?php echo $row["id"]; ?>" />
</p>
<p>
<label></label>
</p>
<p>
<label>
<input type="submit" name="Submit" value="Update" />
</label>
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
         
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href='profile.php' class='customButton'>Profile</a></li>
            <li class="active"><a href='add.php' class='customButton'>Home</a></li>
			<li class="active"><a href='main.php' class='customButton'>Products</a></li>
            <li class="active"><a href="main.php">Add Products</a></li>
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
		
		 
		 
		
		 
  </body>
</html>

