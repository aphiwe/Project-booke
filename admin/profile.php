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
	left:129px;
	top:171px;
	width:701px;
	height:302px;
	z-index:1;
}
#apDiv3 {
	position:absolute;
	left:259px;
	top:108px;
	width:705px;
	height:244px;
	z-index:1;
}
</style>
</head>

<body>

<div id="apDiv3">
  <table align="center">
    <tr>
  
      <form method="POST" action="update_ex.php">
    <table>
    <CAPTION>
            <h3>CHANGE PASSWORD</h3>
          </CAPTION>
    <tr>
    <td>Enter your UserName</td>
    <td><input type="username" size="10" name="username"></td>
    <td>Enter your existing password:</td>
    <td><input type="password" size="10" name="password"></td>
    </tr>
    <tr>
    <td>Enter your new password:</td>
    <td><input type="password" size="10" name="newpassword"></td>
    </tr>
    <tr>
    <td>Re-enter your new password:</td>
    <td><input type="password" size="10" name="confirmnewpassword"></td>
    </tr>
    </table>
    <p><input type="submit" value="Update Password">
    </form>
      <td>
      <form id="staffForm" name="staffForm" method="post" action="staff-exec.php" onSubmit="return staffValidate(this)">
        <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
          <CAPTION>
            <h3>ADD NEW STAFF</h3>
          </CAPTION>
          <tr>
            <td colspan="2" style="text-align:center;"><font color="#FF0000">* </font>Required fields</td>
          </tr>
          <tr>
            <th>First Name </th>
            <td><font color="#FF0000">* </font>
              <input name="fName" type="text" class="textfield" id="fName" /></td>
          </tr>
          <tr>
            <th>Last Name </th>
            <td><font color="#FF0000">* </font>
              <input name="lName" type="text" class="textfield" id="lName" /></td>
          </tr>
          <tr>
            <th>Street Address </th>
            <td><font color="#FF0000">* </font>
              <input name="sAddress" type="text" class="textfield" id="sAddress" /></td>
          </tr>
          <tr>
            <th>Mobile/Tel </th>
            <td><font color="#FF0000">* </font>
              <input name="mobile" type="text" class="textfield" id="mobile" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Add" /></td>
          </tr>
        </table>
        </td>
      </form>
    </tr>
  </table



>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p></div>
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

