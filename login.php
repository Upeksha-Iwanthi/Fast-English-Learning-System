<?php

session_start();
?>



<?php
$username=$_POST['username'];
$password=$_POST['password'];
$db = mysqli_connect('localhost','root','','fastenglishlearning')
 or die('Error connecting to MySQL server.');

$sql="SELECT * FROM login WHERE userName='$username' and password='$password'";

$result=mysqli_query($db,$sql);

$count=mysqli_num_rows($result);


if($count!=1){echo "Wrong Username or Password";}
else
	{
		$_SESSION[user]=$username;
		header("location:home.php");
	}

ob_end_flush();
?>

<?php
	session_start();
	$_SESSION['userName'] = $username;
?>