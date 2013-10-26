<?php
session_start();
include('mysql.class.php');
include('connect.php');
include('cart.class.php');


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
	left:175px;
	top:69px;
	width:374px;
	height:49px;
	z-index:1;
}
  #apDiv2 {
	position:absolute;
	left:175px;
	top:108px;
	width:561px;
	height:320px;
	z-index:2;
}
  #apDiv3 {
	position:absolute;
	left:483px;
	top:75px;
	width:519px;
	height:53px;
	z-index:3;
}
  #apDiv4 {
	position:absolute;
	left:743px;
	top:143px;
	width:276px;
	height:342px;
	z-index:3;
}
  </style>
</head>
 
  <body>
    <?php 
        // this will make 'home', 'view products' and 'view cart' appear
        include 'Navigation.php' ;
		  include('lock.php');
    ?>
  <div id="apDiv1"> Welcome <?php echo $login_session; ?> <a href="logout.php">Sign Out</a></div>
    <div id="apDiv2">
    <div id="shoppingcart">
<h3>Your Shopping Cart</h3>
<?php
$s = new Cart();
echo $s->writeShoppingCart();
?>
</div>
         
<div id="booklist">

<h3>Books In Our Store</h3>

<?php
$sql = 'SELECT * FROM product ORDER BY id';
$result = $db->query($sql);
$output[] = '<ul>';
while ($row = $result->fetch()) {
	
	$output[] = '<td><a href=images/'. $row['product_photo']. ' alt="click to view full image" target="_blank"><img src=images/'. $row['product_photo']. ' width="250" height="250"></a></td>';
	$output[] = '<li>"'.$row['title'].'" by '.$row['author'].': R'.$row['price'].'<br /><a href="cart.php?action=add&id='.$row['id'].'">Add to cart</a></li>';
}
$output[] = '</ul>';

echo join('',$output);
?>

</div>
    
    
    
    
    
    
    
    
    
    
    
    
  </div>
    <div id="apDiv4">

<form action="search.php" method="post">
Choose Search Type:<br />
<select name="searchType">
<option value="author">Author</option>
<option value="title">Title</option>
</select>
<br />
Enter Search Term:<br />
<input name="search" type="text" size="40"/>
<br />
<input type="submit" name="submit" value="Search"/>
</form>
    
    
    
    
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
			 <li class="active"><a href='Cart.php' class='customButton'>View Cart <?php echo "({$cartItemCount})"; ?></a></li>
             <li class="active"><a href='inbox.php' class='customButton'>Inbox[<?php echo $num_messages;?>]</a></li>
            <li class="active"><a href='update.php' class='customButton'>Update Password</a></li>
             <li class="active"><a href='edit.php' class='customButton'>Update Account</a></li>
             <li class="active"><a href='index.php' class='customButton'>logout</a></li>
          </ul>
          <form class="navbar-form form-search pull-right" method="get" action="search.php">
						<input id="search" name="search" type="text" placeholder="keyword...." class="input-medium search-query">
						<button type="submit" class="btn">Search</button>
		  </form>
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
		 
		
		 

</body>
</html>

