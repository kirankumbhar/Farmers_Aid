<html>
    <head>
<?php
include 'menu.php';
if(isset($_SESSION['email']))
{
  echo"<script>window.location.href='index.php';</script>";
}
?>
    <title>Login</title>
	<head>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body >
        <div align="center">

        <div class="w3-container w3-text-black w3-padding-32 w3-hide-small"><br/><h1>Login</h1></div>
	    <table>
		<form method="post" action="log.php">
		<tr><td>Username:</td><td><input class="w3-input w3-border" type="text" id="k" name="email"></td></tr>
		<tr><td>Password:</td><td><input class="w3-input w3-border" type="password" name="password";><td></tr>
		<tr><td><br/></td>
		</tr>

		<tr><td></td>
		<td><button class="w3-button w3-black w3-margin-bottom" type="reset";>Reset</button>
		<button class="w3-button w3-black w3-margin-bottom w3-right" type="submit";>Login</button></td></tr>
		</form>
		</table>
		</div>


    </body>
</html>
