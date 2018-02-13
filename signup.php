<html>
<head><title>SignUp</title>
<?php
include 'menu.php';
if(isset($_SESSION['email']))
{
  echo"<script>window.location.href='index.php';</script>";
}
?>
</head>
<body>

<style>
table{
border:solid black 1px;
padding:70px;
margin:40px;
}
</style>

<div align="center">
<br/>
<br/>
 <div class="w3-container w3-text-black w3-padding-32 w3-hide-small">
 <h1>SignUp</h1>
 </div>

<form method="post" action="sin.php";>
<table>

<tr>
	<td>Name:</td><td><input class="w3-input w3-border" type="text" name="name" placeholder="First name Last name" required/></td>
</tr>
<tr>
	<td>Email:</td><td><input class="w3-input w3-border" type="email" name="email" placeholder="example@abc.com" required/></td>
</tr>
<tr>
	<td>Password:</td><td><input class="w3-input w3-border" type="password" name="password" required/></td>
</tr>
<tr>
	<td>Contact No.</td><td><input class="w3-input w3-border" type="tel" name="mobno" placeholder="eg.9876543210"required/></td>
</tr>
<tr>
	<td>Address</td><td><input class="w3-input w3-border" type="text" name="address"/></td>
</tr>
<tr>
	<td>City</td><td><input class="w3-input w3-border" type="text" name="city"/></td><td>Pincode</td><td><input class="w3-input w3-border" type="text" name="pincode" max="6"/>
</tr>






<tr>
	<td>State</td><td> Maharashtra</td>
</tr>
<tr>
<td>Select District</td>
<td>
	<select name="district"  class="dropdown" required>
	<option class="w3-input w3-border" selected="selected"value="0">Please select</option><option value="1109">AHMADNAGAR</option><option value="1123">AKOLA</option><option value="1124">AMRAVATI</option><option value="1115">AURANGABAD</option><option value="1118">BEED</option><option value="1128">BHANDARA</option><option value="1122">BULDANA</option><option value="1129">CHANDRAPUR</option><option value="1107">DHULE</option><option value="1130">GADCHIROLI</option><option value="1134">GONDIYA</option><option value="1131">HINGOLI</option><option value="1108">JALGAON</option><option value="1116">JALNA</option><option value="1114">KOLHAPUR</option><option value="1121">LATUR</option><option value="1135">MUMBAI</option><option value="1101">Mumbai Suburban</option><option value="1127">NAGPUR</option><option value="1119">NANDED</option><option value="1132">NANDURBAR</option><option value="1106">NASIK</option><option value="1120">OSMANABAD</option><option value="1136">Palghar</option><option value="1117">PARBHANI</option><option value="1110">PUNE</option><option value="1103">RAIGARH</option><option value="1104">RATNAGIRI</option><option value="1112">SANGLI</option><option value="1111">SATARA</option><option value="1105">SINDHUDURG</option><option value="1113">SOLAPUR</option><option value="1102">THANE</option><option value="1126">WARDHA</option><option value="1133">WASHIM</option><option value="1125">YEVATMAL</option>
	</select>
</td>
</tr>



<tr>
  <td><input type="radio" name="cat" value="farmer" checked>Farmer<br></td>
  <td><input type="radio" name="cat" value="seller">Seller<br></td>
  <td><input type="radio" name="cat" value="donor"> Donor </td>
</tr>
<tr>
<td><br/></td>
</tr>
<tr>
<td colspan="2">
<button class="w3-button w3-black w3-margin-bottom" type="reset">Reset</button>
</td>
<td colspan="2">
<button class="w3-button w3-black w3-margin-bottom" type="submit">SignUp</button>
</td>
</tr>
<tr><td>Alreay have an account?</td><td><a href="login.php" >Login here.</a></td></tr>
</table>
</form>
</div>


</body>
</html>
