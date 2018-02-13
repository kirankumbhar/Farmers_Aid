<html>
<head><link rel="shortcut icon" href="images/icons.jpg" />
<title>Farmer's aid-donation</title>
<script>
		function f(){
			alert("your Donation request posted succesfully !!");
		}
		function fail(){
			alert("Request for donation is already sent !!");
		}
		function empty() {
			alert("All Fields are compulsory !!")
		}
		</script>
</head>
<body>
<br><br>
<form method="post" action="donation.php">
<table>
<tr>
<td>Name:</td><td><input type="text" name="name" placeholder="First Name"></td>
</tr>
<tr>
<td>Need:</td><td><input type="textarea" name="need" placeholder="Description of your need"></td>
</tr>
<tr>
<td>Contact:</td><td><input type="tel" name="mobno" placeholder="eg.9876543210"></td>
</tr>
<tr>
<td>Email:</td><td><input type="text" name="email" placeholder="eg.exampl@abc.com"></td>
</tr>
<td><button name="submit"  >Submit</button></td>
</table>
</form>

</body>
<?php

include 'menu.php';
if(!empty($_POST['name'])&& !empty($_POST['need'])&&!empty($_POST['mobno'])){
	$name=$_POST['name'];
	$need=$_POST['need'];
	$contact=$_POST['mobno'];
	$email=$_POST['email'];
	$query="INSERT INTO `donation` VALUES('$email','$need','$contact','$name')";
			$result = mysql_query($query);
			if($result==FALSE)
			{
				//die(mysql_error());
				echo"<script>fail();window.location.href='index.php';</script>";
			}
			else
			{

				echo"<script>f();window.location.href='index.php';</script>";
			}
}
else{
	//echo"<script>empty()</script>";
}
?>
