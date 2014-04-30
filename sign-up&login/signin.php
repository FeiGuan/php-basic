<?php include_once("db.php") ?>

<?php
	$uname = $_POST['name'];
	$pass = $_POST['pwd'];

	$sql = "SELECT count(*) FROM phplogin WHERE ( username='".$uname."' and password='".$pass."')";
	
	$qury = mysql_query($sql);
	$result = mysql_fetch_array($qury);
	
	if($result[0] > 0)
	{
		echo "Successful Login!";
	}
	else
	{
		echo "Login Failed";
		echo "<br/><a href='signupform.php'>Signup</a>";
		echo "<br/><a href='signinform.php'>Signin</a>";
	}

?>
