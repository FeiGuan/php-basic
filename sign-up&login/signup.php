<?php include_once("db.php") ?>

<?php
	$user = $_POST['n'];
	$pass = $_POST['p'];
	$id = $_POST['id'];
	$sql = "INSERT INTO phplogin values(".$id.",'".$user."','".$pass."')";
	$qury = mysql_query($sql);

	if(!$qury){
		echo "Failed ".mysql_error();
		echo "<br/><a href='signupform.php'>Signup</a>";
	}
	else
		echo "Successful";
?>
