<?php
ob_start();
  session_start();
    include('db.php');
	
   $user = $_POST['username'];
   $pass = $_POST['password'];

   $login = mysql_query("SELECT * FROM admin WHERE username = '$user' AND password = '$pass'");
  
   $rows = mysql_fetch_array($login);
    if(mysql_num_rows($login) >0)
	{
			$_SESSION['IsValid'] = true;
			$_SESSION['id'] = $rows['id'];
			$_SESSION['username'] = $rows['username'];
			$_SESSION['password'] = $rows['password'];
			header("Location: add.php");
		}else
		{
					header("Location: index.php?msg=2");
			
			}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>