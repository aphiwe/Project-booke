<?php
    require_once('config.php');

    $result=mysql_query("SELECT * FROM product,categoriee WHERE product.product_category=categoriee.category_id")
    or die("There are no records to display ... \n" . mysql_error()); 

    //retrive categories from the categories table
    $categories=mysql_query("SELECT * FROM categoriee")
    or die("There are no records to display ... \n" . mysql_error()); 

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
  
  
    <div id="apDiv2">
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
	
		<div id="container">
<table width="760" align="center">
<CAPTION><h3>ADD A NEW PRODUCT</h3></CAPTION>
<form name="foodsForm" id="foodsForm" action="product-exec.php" method="post" enctype="multipart/form-data" onsubmit="return foodsValidate(this)">
<tr>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Category</th>
    <th>Photo</th>
    <th>Action(s)</th>
</tr>
<tr>
    <td><input type="text" name="title" id="title" class="textfield" /></td>
    <td><textarea name="author" id="author" class="textfield" rows="2" cols="15"></textarea></td>
    <td><input type="text" name="price" id="price" class="textfield" /></td>
    <td width="168"><select name="category" id="category">
    <option value="select">- select one option -
    <?php 
    //loop through categories table rows
    while ($row=mysql_fetch_array($categories)){
    echo "<option value=$row[category_id]>$row[category_name]"; 
    }
    ?>
    </select></td>
    <td><input type="file" name="photo" id="photo"/></td>
    <td><input type="submit" name="Submit" value="Add" /></td>
</tr>
</form>
</table>
<hr>
<table width="950" align="center">
<CAPTION><h3>AVAILABLE PRODUCTS</h3></CAPTION>
<tr>
<th>Product Photo</th>
<th>Product Title</th>
<th>Product Author</th>
<th>Product Price</th>
<th>Product Category</th>
<th>Action(s)</th>
</tr>

<?php

while ($row=mysql_fetch_array($result)){
echo "<tr>";
echo '<td><img src=../images/'. $row['product_photo']. ' width="80" height="70"></td>';
echo "<td>" . $row['title']."</td>";
echo "<td>" . $row['author']."</td>";
echo "<td>" . $row['price']."</td>";
echo "<td>" . $row['category_name']."</td>";
echo '<td><a href="delete-product.php?id=' . $row['id'] . '">Remove Product</a> | <a href="edit.php?do=edit&id=' . $row['id']  . '"> Edit Product</a></td>';

echo "</tr>";
}
mysql_free_result($result);

?>
</table>
<hr>
</div>
        

</body>
</html>

