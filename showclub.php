<html>
<link rel="shortcut icon" href="images/icons.jpg" />
<title>Farmer's aid-showclub</title>
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

<?php

include 'menu.php';

$query="Select * from `club`,`user` where `FarmerEmail`=`Email`";
$run=(mysql_query($query,$conn));
//$row=mysql_fetch_array($run);
if($run==FALSE){
	die(mysql_error());
}

while($row = mysql_fetch_assoc($run)){
	?>
	<br/>
	<br />
	<div align="center">
		<table>
		<tr><td>Name of Farmer </td><td><?php echo $row['Name'];?></td></tr>
		<?php
		if(isset($_SESSION['email'])){
			?><tr><td>Contact of Farmer </td><td> <?php echo $row['Contact'];?></td></tr><?php
		}
		 ?>

		<tr><td>Type of product </td><td><?php echo $row['Type of Product'];?></td></tr>
		<tr><td>Area of Farm </td><td><?php echo $row['Area']." hectre";?></td></tr>
<br/>

	</table>
</div>
	<?php

}
?>
