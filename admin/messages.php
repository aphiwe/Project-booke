<?php
   session_start();
	include('config.php');
	
$result=mysql_query("SELECT * FROM message")
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
	left:122px;
	top:166px;
	width:888px;
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
<div id="apDiv3">
  <form action="message-ex.php" method="post">
  <table width="540" border="0" cellpadding="2" cellspacing="0" align="center">
    <CAPTION>
      <h3>SEND A MESSAGE</h3>
    </CAPTION>
    <tr>
      <th width="200">Subject</th>
      <td width="168"><input type="text" name="subject" id="subject" class="textfield" /></td>
    </tr>
    <tr>
      <th width="200">Message Box</th>
      <td width="168"><textarea name="txtmessage" class="textfield" rows="5" cols="60"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center"><input type="submit" name="submit" value="Send Message" />
        <input type="reset" name="Reset" value="Clear Field" /></td>
    </tr>
  </table>
  </form>
  <table border="0" width="1000" align="center">
    <CAPTION>
      <h3>SENT MESSAGES</h3>
    </CAPTION>
    <tr>
      <th>Message ID</th>
      <th>Date Sent</th>
      <th>Time Sent</th>
      <th>Message Subject</th>
      <th>Message Text</th>
      <th>Action(s)</th>
    </tr>
    <?php
//loop through all table rows
while ($row=mysql_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['message_id']."</td>";
echo "<td>" . $row['date']."</td>";
echo "<td>" . $row['time']."</td>";
echo "<td>" . $row['subject']."</td>";
echo "<td width='300' align='left'>" . $row['text']."</td>";
echo '<td><a href="delete-message.php?message_id=' . $row['message_id'] . '">Remove Message</a></td>';
echo "</tr>";
}
mysql_free_result($result);
//mysql_close($link);
?>
  </table>
  <p>&nbsp;</p>
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
    


    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" Project name</a>
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

