<?php
session_start();
include('mysql.class.php');
include('connect.php');
include('cart.class.php');


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
#apDiv2 {
	position:absolute;
	left:228px;
	top:30px;
	width:784px;
	height:55px;
	z-index:1;
}
#apDiv3 {
	position:absolute;
	left:226px;
	top:89px;
	width:774px;
	height:177px;
	z-index:2;
}
</style>
</head>

<body>
<div id="apDiv2">
<div id="shoppingcart">

<?php
$s = new Cart();
//echo $s->showCart();
?>

</div>
</div>
<div id="apDiv3">
  <table width="226" border="1">
    <tr>
      <td><form action="save.php" method='post'>
        <h4 align="center">Billing Info</h4>
        <table border="0" cellpadding="2px">
          <tr>
            <td>Order Total:</td>
             <td> </td>
            <td><?php echo $s->showCart();?></td>
          </tr>
          <tr>
            <td>Your Name:</td>
            <td><input type="text" name="username" /></td>
          </tr>
          <tr>
            <td>Address:</td>
            <td><input type="text" name="address" /></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><input type="text" name="mobile" /></td>
          </tr>
          <tr>
            <td>Phone:</td>
            <td><input type="text" name="email" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="Place Order" /></td>
          </tr>
        </table>
        
      </form>
        &nbsp;</td>
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
			<li class="active"><a href='welcome.php' class='customButton'>View Products</a></li>
			 <li class="active"><a href='cart.php' class='customButton'>View Cart <?php echo "({$cartItemCount})"; ?></a></li>
            

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

