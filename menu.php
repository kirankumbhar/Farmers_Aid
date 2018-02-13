

<?php
include 'dbconn.php';

?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script>
	function press(){
				window.location.href='rent.php';

	}
	function clubpress(){
				window.location.href='club.php';

	}
	function donatepress(){
				window.location.href='donate.php';

	}
  function logout(){
window.location.href='logout.php';
 }
 function login(){
window.location.href='login.php';
}  function signup(){
window.location.href='signup.php';
 }
</script>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2">
    <a class="w3-bar-item w3-button w3-padding-xlarge w3-hide-medium w3-hide-large w3-opennav w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Farmer's aid</a>
	 <a href="rights.php" class="w3-bar-item w3-button w3-padding-large">Legal Rights</a>
	      <a href="about.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">About Us</a>




    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Services <i class="fa fa-caret-down"></i></button>

      <div class="w3-dropdown-content w3-bar-block w3-card-4" >
        <a href="showrent.php" class="w3-bar-item w3-button">Land on Rents</a>
        <a href="showclub.php" class="w3-bar-item w3-button">Field Clubbing Requests</a>
        <a href="showdonation.php" class="w3-bar-item w3-button">Donation Requests</a>
      </div>
    </div>




	<?php
if(isset($_SESSION['email'])){
//echo"ok";
	if($_SESSION['category']=='seller'){
		//echo "ok";

    ?><div class='w3-right w3-dropdown-hover w3-hide-small'><button class='w3-padding-large w3-button' title='Profile'>Seller <i class='fa fa-caret-down'></i></button>
    <div class='w3-dropdown-content w3-bar-block w3-card-4' >
  	<button class="w3-bar-item w3-button" onclick="document.getElementById('rent').style.display='block'">Rent</button>
  <button class='w3-bar-item w3-button w3-padding-large w3-hover-red ' onclick='logout();'>Logout</button></div><?php
	}
	if($_SESSION['category']=='farmer'){
		//echo "ok";
		?><div class='w3-right w3-dropdown-hover w3-hide-small'><button class='w3-padding-large w3-button' title='Profile'>Farmer <i class='fa fa-caret-down'></i></button>
    <div class='w3-dropdown-content w3-bar-block w3-card-4' >
    <button class="w3-bar-item w3-button" onclick="document.getElementById('club').style.display='block'">Club Request</button>
		<button class="w3-bar-item w3-button" onclick="document.getElementById('donate').style.display='block'">Donation Request</button>
    <button class='w3-bar-item w3-button w3-padding-large w3-hover-red ' onclick='logout();'>Logout</button></div><?php
	}
  if($_SESSION['category']=='donor') {
    ?><div class='w3-right w3-dropdown-hover w3-hide-small'><button class='w3-padding-large w3-button' title='Profile'>Donor <i class='fa fa-caret-down'></i></button>
    <div class='w3-dropdown-content w3-bar-block w3-card-4' >
		<!--button class="w3-bar-item w3-button" onclick="document.getElementById('donate').style.display='block'">Donation(change!)</button-->
		<button class='w3-bar-item w3-button w3-padding-large w3-hover-red ' onclick='logout();'>Logout</button></div><?php
	}

}
else {
  ?><div class='w3-right w3-dropdown-hover w3-hide-small'><button class='w3-padding-large w3-button' title='register'>Register <i class='fa fa-caret-down'></i></button>
  <div class='w3-dropdown-content w3-bar-block w3-card-4' >
  <button class='w3-bar-item w3-button w3-padding-large w3-hover-red ' onclick='signup();'>SignUp</button>
  <button class='w3-bar-item w3-button w3-padding-large w3-hover-red ' onclick='login();'>Login</button>
</div><?php
}
?>
<div class="w3-right w3-black w3-opacity" id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'bn,en,gu,hi,mr,ta,te,ur', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>

  </div>
  <!--a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a -->
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Legal Rights</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large">About us</a>

</div>
