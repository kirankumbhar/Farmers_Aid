
 <?php
 $dbhost="localhost";
 $dbuser="root";
 $dbpass="k";
 $db="algo";
 $conn=mysql_connect($dbhost,$dbuser,$dbpass,$db);
 mysql_select_db("algo");
 if(!$conn)
	 die(mysql_error().'Error');
 else
	 //echo "Connected";

session_start();

if(!isset($_SESSION['email']))
{

}
else
{
}
?>
