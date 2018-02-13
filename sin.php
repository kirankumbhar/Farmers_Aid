 <?php
 include 'dbconn.php';

 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
  $contact=$_POST['mobno'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $pincode=$_POST['pincode'];
  $district=$_POST['district'];
  $cat=$_POST['cat'];
  //$name=$_POST['name'];

  mysql_select_db("algo");

  $sql1="select * from user where Email='$email'";

  $res=mysql_query($sql1,$conn);

    $row = mysql_fetch_assoc($res);
    if($email==$row['Email'])
    {
    echo ("<SCRIPT>
     window.alert('There is already an account associated with ".$email.".<br/>Please try again with different email or login.');
     window.location.href='signup.php';
     </SCRIPT>");
    }
  else {

$sql="insert into user"."(Name,Email,Password,Contact,Address,City,Pincode,District,Category)"."values('$name','$email','$password','$contact','$address','$city','$pincode','$district','$cat')";


 if( !(mysql_query($sql,$conn)))
 {die('Error'.mysql_error());}
 else
 {
	 echo ("<SCRIPT>
		window.alert('Welcome ".$name."!!!');
    window.loaction.href='login.php';
		</SCRIPT>");
 }
 }
 ?>
