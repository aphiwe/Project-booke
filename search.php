<?php
$searchTerm=$_POST['searchType'];
$searchTerm2=trim($_POST['search']);

if(!$searchTerm2)
{
	echo "Enter id please.";
	exit();
}

$host = "localhost";
$db = "shopping"; 
$user = "root"; 
$pwd = ""; 

$link = mysqli_connect($host, $user, $pwd, $db);
$query = "SELECT * FROM product WHERE ".$searchTerm." LIKE '%".$searchTerm2."%'";


$results = mysqli_query($link, $query);

if(mysqli_num_rows($results) >= 1)
{
	$output = "";
	echo "<left><table border=1>";
	while($row = mysqli_fetch_array($results))
	{
		 echo"<tr>";
echo '<td><a href=images/'. $row['product_photo']. ' alt="click to view full image" target="_blank"><img src=images/'. $row['product_photo']. ' width="250" height="250"></a></td>';
echo"<td align= left> Title of Book:".$row['title']."</td></br>";
echo"<td align= left> Author :".$row['author']."</td><br />";
echo"<td align= left> R ".$row['price']."</td>";
echo '</div>';
echo"</tr>";

	}
	echo "</table>";
	echo $output;
}
else
	echo "There was no matching record for the id " . $searchTerm;
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
  


    <div id="apDiv2">
      <div id="apDiv1">
        <p align="center">
                  </p>
        
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
            <li class="active"><a href='welcome.php' class='customButton'>Home</a></li>
			<li class="active"><a href='welcome.php' class='customButton'>View Products</a></li>
           
            <li><a href="#contact">Contact</a></li>
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

