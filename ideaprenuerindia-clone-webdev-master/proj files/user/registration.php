<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#bdc3c7">
</div>
<div id="main-wrapper">
	<center><h2><b>Sign Up</b></h2></center>
	<center><p>Fill up the form with correct values.</p></center>

	<div class="inner_container">
		<form action="registration.php" method="post">

			<label for="fullname"><b>Full Name</b></label>
			<input class="form-control" id="fullname"  type="text" name="fullname" required>

			<label for="email"><b>Email Address</b></label>
			<input class="form-control" id="email"  type="email" name="email" required>

			<label for="password"><b>Password</b></label>
			<input class="form-control" id="password"  type="password" name="password" required>

			<input class="sign_up_btn" type="submit" id="register" name="create" value="Sign Up">
			</form>
	</div>
</div>

<div>
	<?php
	if(isset($_POST['create'])){
		$fullname 		= $_POST['fullname'];
		$email 			= $_POST['email'];
		$password 		= $_POST['password'];
		$query = "insert into users values('$fullname','$email','$password')";
		$query_run = mysqli_query($con,$query);
		echo"<script> location.href='../homepage.php'</script>";
	}
	


	?>
</div>

</body>
</html>
