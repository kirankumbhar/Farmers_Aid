<html>
<head>
<title>Farmer's Area</title>
</head>
<body>


<form method="post" action="farmer.php">
<table>
<tr>
	<td>Name:</td><td><input type="email" name="email" placeholder="abc@xy.com" required/></td>
</tr>
<tr>
	<td>Need</td><td><input type="text" name="need" placeholder="Description" required/></td>
</tr>
<tr>
	<td>Contact NO.</td><td><input type="text" name="mobno" placeholder="Mobile number" required/></td>
</tr>
<tr>
	<td><button type="submit">Submit</button>
</tr>
</form>
</body>
<?php
include 'dbconn.php';
if(!isset($_SESSION['name']))
  {
	  die('Error'.mysql_error());
	  
  }
  else{
	  $email=$_POST['email'];
	  $need=$_POST['need'];
	  $contact=$_POST['mobno'];
	  
	  $sql="insert into donation"."(Email,Need,Contact)"."values('$email','$need','$contact')";
	  $res=mysql_query($sql,$conn);
	  if(!$res)
	  {
		  die('Error');
		  $text=mysql_error();
	  echo '$text';
	  }
	  else
		  echo "Done";
	  
  }
	  

?>
</html>