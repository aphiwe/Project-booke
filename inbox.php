<?php
     include('config.php');

    $memberId=$_SESSION['SESS_MEMBER_ID'];

    $messages=mysql_query("SELECT * FROM message")
    or die("Something is wrong ... \n" . mysql_error()); 
    //get the number of rows
    $num_messages = mysql_num_rows($messages);
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
#apDiv5 {
	position:absolute;
	left:133px;
	top:73px;
	width:831px;
	height:321px;
	z-index:1;
}
</style>
</head>

<body>
<div id="apDiv5">
<table width="850" style="text-align:left;">
<CAPTION>
<h4>INBOX Message</h4>
</CAPTION>
<tr>
<th>From</th>
<th>Date Received</th>
<th>Time Received</th>
<th>Subject</th>
<th>Text</th>
</tr>

<?php
//loop through all table rows
while ($row=mysql_fetch_array($messages)){
echo "<tr>";
echo "<td>" . $row['from']."</td>";
echo "<td>" . $row['date']."</td>";
echo "<td>" . $row['time']."</td>";
echo "<td>" . $row['subject']."</td>";
echo "<td width='350' align='left'>" . $row['text']."</td>";
echo "</tr>";
}
mysql_free_result($messages);
//mysql_close($link);
?>
</table>

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
            <li class="active"><a href='welcome.php' class='customButton'>Home</a></li>
			<li class="active"><a href='welcome.php' class='customButton'>View Products</a></li>
			 <li class="active"><a href='Cart.php' class='customButton'>View Cart <?php echo "({$cartItemCount})"; ?></a></li>
             <li class="active"><a href='update.php' class='customButton'>Update Password</a></li>
            <li class="active"><a href='inbox.php' class='customButton'>Inbox[<?php echo $num_messages;?>]</a></li>
             <li class="active"><a href='edit.php' class='customButton'>Update Account</a></li>
             <li class="active"><a href='index.php' class='customButton'>logout</a></li>
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

