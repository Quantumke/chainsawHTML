<?php

mysql_connect('localhost', 'root', 'master12!') or die(mysql_error());
mysql_select_db('portfolio') or die (mysql_error());

if (isset($_POST['submit'])=='continue')
{
	ob_start();
	$username = $_POST['username'];
	$password =md5($_POST['password']);

	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	$sql = "select * FROM auth WHERE username='$username' and  password='$password' ";
	$result = mysql_query($sql);
	if ($result ==false)

	{
		die(mysql_error());
	}

	$count = mysql_num_rows($result);
	if($count==1){
	session_start();
	$_SESSION['username' ] =mysql_result(result, 0 , "username");
	header("location:home.php");
	}
	else {
		$msg = urlencode("Invalid login ");
		header("location:index.php?msg=$msg");
	}
	ob_end_flush();
	}
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	<form action="" method="POST">
            <input type="text" name="username" id="username"><br>
<input type="password" name="password" id="password"><br>
<input type="submit" name="submit" value="continue">
	</form>
	</body>
	</html>
