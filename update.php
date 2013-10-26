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
#apDiv3 {
	position:absolute;
	left:327px;
	top:70px;
	width:519px;
	height:53px;
	z-index:3;
}
</style>
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
         
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href='welcome.php' class='customButton'>Home</a></li>
			<li class="active"><a href='welcome.php' class='customButton'>View Products</a></li>
        
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
		 
  <div id="apDiv3">
           <form method="POST" action="update_ex.php">
             <table>
               <CAPTION>
                 <h3>CHANGE YOUR PASSWORD</h3>
               </CAPTION>
               <tr>
                 <td>Enter your UserName</td>
                 <td><input type="username" size="10" name="username" required></td>
                 <td>Enter your existing password:</td>
                 <td><input type="password" size="10" name="password" required></td>
               </tr>
               <tr>
                 <td>Enter your new password:</td>
                 <td><input type="password" size="10" name="newpassword" required></td>
               </tr>
               <tr>
                 <td>Re-enter your new password:</td>
                 <td><input type="password" size="10" name="confirmnewpassword" required></td>
               </tr>
             </table>
             <p>
               <input type="submit" value="Update Password">
    </form>
  </div>
  <h2></h2>
</body>
</html>

