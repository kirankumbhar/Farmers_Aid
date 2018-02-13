<html>
<?php include 'menu.php'; ?>
<link rel="shortcut icon" href="images/icons.jpg" />
<title>Farmer's aid-seeds</title>
<style>

.kk{
background: rgba(255,255,255,0.1);
border: 1px solid gray;
font-size: 16px;
height: auto;
width:70%;
outline: 0;
padding: 15px;

background-color: #e8eeef;
color: #8a97a0;
box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
margin-bottom: 30px;
}


</style>
<body>
<br><br>
<?php

$query = "SELECT * FROM `seeds`";
$run=(mysql_query($query,$conn));
if($run==FALSE){
	die(mysql_error());
}
while($row = mysql_fetch_assoc($run)){
	?><br><br>
	<div align="center">
		<div  align="left" class="kk">

		<?php echo '<b>'."Name of Seed:- ".'</b>'.$row['Name'];?>
		<br>
		<?php echo '<b>'."Type of Seed:- ".'</b>'.$row['Type'];?>
		<br>
		<?php echo '<b>'."Description:- ".'</b>'.$row['Description'];?>
	</div>
</div>
	<?php
}
?>

<footer class="w3-container w3-center w3-opacity w3-grey w3-small">
<div align="center" > <p>Devloped by<p/>

		 <p>Akash Karan
		 ,Kiran Kumbhar
		 ,Sanzil Madye</p>

 </div>

</footer>
