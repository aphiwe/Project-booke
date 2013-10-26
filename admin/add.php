<?php
    session_start();
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
	left:95px;
	top:65px;
	width:346px;
	height:70px;
	z-index:1;
}
.Session {
	color: #00F;
}
#apDiv3 {
	position:absolute;
	left:445px;
	top:143px;
	width:632px;
	height:349px;
	z-index:2;
}
#apDiv4 {
	position:absolute;
	left:93px;
	top:147px;
	width:307px;
	height:338px;
	z-index:3;
}
</style>
</head>

<body>
<div id="apDiv2"><p>Welcome <span class="Session"><?php echo $_SESSION['username'];?> </span>to admin</p></div>
<div id="apDiv3"><img src="../images/admin.jpeg" width="632" height="348" alt="administration_image"></div>
<div id="apDiv4">
  <p>No unathorised users </p>
  <p>Any step you take be carefull </p>
  <p>Sensitive information for the company. </p>
  <p>If found violating this page, strong step will be taken against you. Please be carefully</p>
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
            <li class="active"><a href="main.php">Add Products</a></li>
            <li class="active"><a href='products.php' class='customButton'>New Products</a></li>
            <li class="active"><a href='main.php' class='customButton'>Products</a></li>
            <li class="active"><a href='categories.php' class='customButton'>Categories</a></li>
             <li class="active"><a href='messages.php' class='customButton'>Messages</a></li>
             <li class="active"><a href='accounts.php' class='customButton'>Members</a></li>
             <li><a href="#">logged in as <?php echo $_SESSION['username'];?></a></li>
              <li class="active"><a href='logout.php' class='customButton'>logout</a></li>
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

