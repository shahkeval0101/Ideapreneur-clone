<?php
session_start();
if(!isset($_SESSION['email'])){
	echo"<script> location.href='login.php'</script>";
}
else{
	echo "username:".$_SESSION['email']."password".$_SESSION['password'];
}
if(isset($_REQUEST['logout'])){
	session_unset();
	session_destroy();
	echo"<script> location.href='login.php'</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form method="post" action="">
			<button class="login_button" name="logout" type="submit">Log Out</button>
		</form>
</body>
</html>