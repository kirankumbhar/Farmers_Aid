<?php

include 'dbconn.php';
$email=$_POST['email'];
$password=$_POST['password'];
mysql_select_db("algo");
$sql="select * from user where Email='$email' AND Password='$password'";

$res=(mysql_query($sql,$conn));
	if ((!$row = mysql_fetch_assoc($res)))
	{
		die("<script>window.alert('Login Failed!');
		window.location.href='login.php';
		</script>".mysql_error());
	}
else
	{
		$_SESSION['name']=$row['Name'];
		//$_SESSION['games']=$row['games'];
	    $_SESSION['email']=$row['Email'];
		$_SESSION['category']=$row['Category'];
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Welcome ".$_SESSION['name']."!!!');
		window.location.href='index.php';
		</SCRIPT>");
	}
 ?>
