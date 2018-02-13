<!DOCTYPE html>
<?php

include 'menu.php';
?>

<html>
<head>
	<link rel="shortcut icon" href="images/icons.jpg" />
<title>Farmer's aid</title>
<style>
.kir{
	height:380px;
	width:100%;
	size:relative;
}

table{
border:solid black 1px;
padding:40px;
margin:20px;
}
a{
	text-decoration:none;
}

ak{
	height:40px;
}


</style>
</head>
<body>



<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
 <div class="box"><div class="mySlides w3-display-container w3-center"> <!--  Image -->
    <a href="seeds.php"><img class="kir" src="images/seeds.jpg">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
     <h3>Seeds</h3>
      <p><b>See here which seeds are perfect for your land.</b></p></a>
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <a href="fertilizer.php"><img class="kir" src="images/ferti1.jpg">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Fertillizers</h3>
      <p><b>Make a great use of fertilizer! Read Here.</b></p></a>
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <a href="biocides.php"><img class="kir" src="images/bio.jpg">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Pesticides</h3>
      <p><b>Grow you crops with care. Read about safety here.</b></p></a>
    </div>
  </div>
</div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="desc">
    <h2 class="w3-wide">Farmer's aid</h2>
    <p class="w3-opacity"><i></i></p>
    <p class="w3-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; A farmer in India is a basic unit of Indian economy. Farmer's aid is a simple platform created for farmers to connect with other people, providing
			 information about seeds and fertilizers available in the market for new generation farmers. It also help farmers to join with other farmers for better production in
			 terms of quantity and quality. Due to exponential growth in population, agricultural land shortage occurs. Our website offers solution by providing storage area on
			 rent from land holder. Today’s farmer is going through a lot problems.  You can show your support to farmers by fulfilling their needs via donation facility which is
			  provided by our website.  </p>

  </div>


<!--- Categoeries  -->
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <!--img src="/w3images/newyork.jpg" alt="New York" style="width:100%" class="w3-hover-opacity"-->
          <div class="w3-container w3-white">
            <p class="w3-black w3-padding-large"><b>Rent</b></p>
            <p class="w3-opacity">Out of storage space? Need more space for storage of your goods? <br/>Then this section contains different location available for storage. </p>
            <p>Various locations available for renting on monthly basis.</p>
            <a href="showrent.php"><button class="w3-button w3-black w3-margin-bottom">View</button></a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <!--img src="/w3images/paris.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity"-->
          <div class="w3-container w3-white">
            <p class="w3-black w3-padding-large"><b>Club</b></p>
            <p class="w3-opacity">Help farmers to collaborate with each other to maximize their production. </p>
            <p>Unite farmers by forming their groups.</p>
						  <a href="showclub.php"><button class="w3-button w3-black w3-margin-bottom" tyep="submit">View</button><a/>
            <!--button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('club').style.display='block'">View</button -->
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <!--img src="/w3images/sanfran.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity"-->
          <div class="w3-container  w3-white">
            <p class="w3-black w3-padding-large"><b>Donations</b></p>
            <p class="w3-opacity">There are farmers who require your support so they can grow food and help us for better future</br>So support them by donating something.</p>
            <p>Request from farmers for their needs.</p>
              <a href="showdonation.php"><button class="w3-button w3-black w3-margin-bottom">View</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>



<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

	<?php
	if(!isset($_SESSION['email']))
	{
		echo "<Script>window.location(index.php)</script>";
	}
	?>
	    <script>
		function f(){
			alert("your Land clubbing request posted succesfully !!");
		}
		function f1(){
			alert("your Donation request posted succesfully !!");
		}
		function f1(){
			alert("Advertisement for rent posted succesfully !!");
		}
		function fail(){
			alert("The email you provided is invalid !!");
		}
		</script>

<!-- Club modal  -->
<div align="center">
		<div id="club" class="w3-modal">
		  <div class="w3-modal-content w3-animate-top w3-card-8">
		    <header class="w3-bar w3-black w3-card-2">
		      <span onclick="document.getElementById('club').style.display='none'"class="w3-closebtn w3-padding-xlarge w3-xxlarge w3-display-topright">x</span>
		      <h2 class="w3-wide">Form A Club</h2>
		    </header>
				  <div class="w3-container">
						<h3>Please fill in the below form for requesting to form a club.</h3>
		<table>
			<tr>
		<form method="POST" action="index.php">
		    <tr><td>Email:</td>
			<td><input class="w3-input w3-border" name="emailc" type="text" size=20></td>
			</tr>
			<tr><td>Type of product:</td>
			<td><input class="w3-input w3-border" name="product_typec" type="text" size=20></td>
			</tr>
			<tr><td> Area:</td>
			<td><input class="w3-input w3-border" name="areac" type="text" size=10></td>
</tr>

		<tr>
			<td></td>
			<td>
				<button class="w3-right w3-button w3-black w3-margin-bottom" type="submit">Submit</button></td>
			</tr>
		</table>
		</form>
</div>
<footer class="w3-bar w3-black w3-card-2">
	<h2 class="w3-wide"><br/></h2>
</footer>
</div>

</div>
</div>


<?php
	//include 'dbconn.php';

	if(!empty($_POST['product_typec'])&& !empty($_POST['areac'])){
		$product=$_POST['product_typec'];
		$area=$_POST['areac'];
		$email=$_POST['emailc'];

		$query="INSERT INTO `club` VALUES('$email','".$product."','".$area."')";
			$result = mysql_query($query);

			if($result==FALSE)
			{
				//die(mysql_error());
				echo"<script>window.alert('Request for clubbing is alredy sent!')</script>";

			}
			else
			{

				echo"<script>f()</script>";
			}
	}
?>



<!--  donation form-->
<div align="center">
		<div id="donate" class="w3-modal">
		  <div class="w3-modal-content w3-animate-top w3-card-8">
		    <header class="w3-bar w3-black w3-card-2">
		      <span onclick="document.getElementById('donate').style.display='none'"class="w3-closebtn w3-padding-xlarge w3-xxlarge w3-display-topright">x</span>
		      <h2 class="w3-wide">Request for Donation</h2>
		    </header>
				  <div class="w3-container">
						<h3>Please fill in the below form for request for donation.</h3>
						<form action="index.php" method="post">
		<table>
			<tr>
			<td>Name:</td><td><input type="text" name="named" placeholder="First Name"></td>
			</tr>
			<tr>
			<td>Need:</td><td><input type="textarea" name="needd" placeholder="Description of your need"></td>
			</tr>
			<tr>
			<td>Contact:</td><td><input type="tel" name="mobnod" placeholder="eg.9876543210"></td>
			</tr>
			<tr>
			<td>Email:</td><td><input type="text" name="emaild" placeholder="eg.exampl@abc.com"></td>
			</tr>
			<td><button class="w3-right w3-button w3-black w3-margin-bottom" type="submit">Submit</button></td>
		</table>
		</form>
	</div>
	<footer class="w3-bar w3-black w3-card-2">
	<h2 class="w3-wide"><br/></h2>
	</footer>
	</div>

	</div>
	</div>

	<?php

	if(!empty($_POST['named'])&& !empty($_POST['needd'])&&!empty($_POST['mobnod'])){
		$name=$_POST['named'];
		$need=$_POST['needd'];
		$contact=$_POST['mobnod'];
		$email=$_POST['emaild'];
		$query="INSERT INTO `donation` VALUES('$email','$need','$contact','$name')";
				$result = mysql_query($query);
				if($result==FALSE)
				{
					//die(mysql_error());
					echo"<script>fail();window.location.href='index.php';</script>";
				}
				else
				{

					echo"<script>f1();window.location.href='index.php';</script>";
				}
	}
	else{
		//echo"<script>empty()</script>";
	}
	?>

	<!--  rent form-->

<div align="center">
			<div id="rent" class="w3-modal">
			  <div class="w3-modal-content w3-animate-top w3-card-8">
			    <header class="w3-bar w3-black w3-card-2">
			      <span onclick="document.getElementById('rent').style.display='none'"class="w3-closebtn w3-padding-xlarge w3-xxlarge w3-display-topright">x</span>
			      <h2 class="w3-wide">Rent</h2>
			    </header>
					  <div class="w3-container">
							<h3>Please fill in the below form for Renting.</h3>
							<form action="index.php" method="post">
			<table>
						<tr><td>Email:</td>
					<td><input name="emailr" type="text" size=20></td>
					</tr>
					<tr>
					<td>Location:</td>
					<td><input name="locationr" type="text" size=20></td>
					</tr>
					<tr>
					<td> Area:</td>
					<td><input name="arear" type="text" size=10></td>
					</tr>
					<tr>
					<td>Rent per month:</td>
					<td><input name="rentpermonthr" type="text" size=10></td>
					</tr>
					<tr>
						<td></td>
					<td>
					<button class="w3-right w3-button w3-black w3-margin-bottom" type="submit">Submit</button>
					</td>

				</form>
</table>
</form>
</div>
<footer class="w3-bar w3-black w3-card-2">
<h2 class="w3-wide"><br/></h2>
</footer>
</div>

</div>
</div>
<?php
	if(!empty($_POST['rentpermonthr'])&& !empty($_POST['arear'])){

		$rentpermonth=$_POST['rentpermonthr'];
		$area=$_POST['arear'];
		$email=$_POST['emailr'];

		$query="INSERT INTO `rent` VALUES('$email','$area','$rentpermonth')";
			$result = mysql_query($query);
			if($result==FALSE)
			{
				die(mysql_error());
				echo"<script>fail();window.location.href='index.php';</script>";
			}
			else
			{

				echo"<script>f2();window.location.href='index.php';</script>";
			}
	}
?>

<!-- Footer -->

<footer class="w3-container w3-center w3-opacity w3-grey w3-small">
<div align="center" > <p>Devloped by<p/>

		 <p>Akash Karan
		 ,Kiran Kumbhar
		 ,Sanzil Madye</p>

 </div>

</footer>
</body>
</html>
