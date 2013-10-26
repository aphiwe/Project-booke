<?php
require_once('config.php');

$categories=mysql_query("SELECT * FROM categorie")
or die("There are no records to display ... \n" . mysql_error()); 

?>
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
</style>
</head>

<body>
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
    


    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" simaProject name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            
            <li class="active"><a href='add.php' class='customButton'>Home</a></li>
            <li><a href="#">About</a></li>
			<li><a href='main.php' class='customButton'>Products</a></li>
            <li><a href="main.php">Add Products</a></li>
            <li class="active"><a href='main.php' class='customButton'>Products</a></li>
            <li class="active"><a href='categories.php' class='customButton'>Categories</a></li>
             <li class="active"><a href='accounts.php' class='customButton'>Members</a></li>
             <li><a href="register.php"></a></li>
             <li><a href="register.php"></a></li>
             <li><a href="register.php"></a></li>
             <li><a href="register.php"></a></li>
             <li><a href="#">logged in as sima</a></li>
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
		
		 
		 
		 <H2>OPTIONS page</H2>
		<table align="center" width="910">
<CAPTION><h3>MANAGE CATEGORIES</h3></CAPTION>
<tr>
<form name="categoryForm" id="categoryForm" action="categories-exec.php" method="post" onsubmit="return categoriesValidate(this)">
<td>
  <table width="250" border="0" cellpadding="2" cellspacing="0" align="center">
    <tr>
        <td>Category</td>
        <td><input type="text" name="name" class="textfield" /></td>
        <td><input type="submit" name="Insert" value="Add" /></td>
    </tr>
  </table>
</td>
</form>
<td>
<form name="categoryForm" id="categoryForm" action="delete-category.php" method="post" onsubmit="return categoriesValidate(this)">
  <table width="250" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
        <td>Category</td>
        <td><select name="category" id="category">
        <option value="select">- select category -
        <?php 
        //loop through categories table rows
        while ($row=mysql_fetch_array($categories)){
        echo "<option value=$row[category_id]>$row[category_name]"; 
        }
        ?>
        </select></td>
        <td><input type="submit" name="Delete" value="Remove" /></td>
    </tr>
  </table>
</form>
</td>
</tr>
</table>

  </body>
</html>

