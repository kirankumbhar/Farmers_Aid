<html>

<link rel="shortcut icon" href="images/icons.jpg" />
<title>Farmer's aid-showdonation</title>
<style>

	tr,td{
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 320px;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

</style>


<body>
	<br/><br/><?php
include 'menu.php';
$query= "SELECT * FROM `donation`,`user` where `FarmerEmail`=`Email`";
$run=mysql_query($query,$conn);
//$row=mysql_fetch_array($run);
if($run==FALSE)
			{
				die(mysql_error());
				//echo"<script>fail()</script>";
			}
while($row = mysql_fetch_assoc($run)){
	?>

<div align="center" >
	<table>
		<tr><td>Name of Farmer :</td><td><?php echo $row['Name'];?></td></tr>
		<?php
		if(isset($_SESSION['email'])){
			?><tr><td>Contact of Farmer </td><td><?php echo $row['Contact'] ; ?></td></tr><?php
		}
		 ?>
		<tr><td>Need </td><td><?php echo $row['Need'];?></td></tr><br/>
	</table>
</div>
	<?php
	//echo 'Name of Seller '.$row['Name'].'<br>'.$row['Contact'].'<br>'.$row['Area'].'<br>'.$row['Rent/Month'];
}

?>
</body>



</html>
