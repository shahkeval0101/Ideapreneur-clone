 <?php
	if(isset($_REQUEST['username'])){
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];

		if($username=="admin" && (int)$password==1234)
		{
			echo"<script> location.href='../controls/transfer.html'</script>";
		}
		else{
			echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
			echo "<script> location.href='admin1.php'</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="style.css">

<style media="screen">
/*CSS file*/
body{
	background-color:#8EC5FC;
	background-image: linear-gradient(62deg,#8EC5FC 0%,#E0C3FC 100%);
}
input{
		width: 430px;
	margin: 0 auto;
		padding: 10px;
		border: 1px solid #ccc;
}

#main-wrapper{
	border-radius : 10px;
	background-color: white;
	border: 3px solid #f1f1f1;
	width: 500px;
	margin-top: 65px;
	margin-left: 33%;
	align-items: center;
	box-shadow: 0 0 10px #000;
	background-color: skyblue;
}
.inner_container{
	width:450px;
	margin:0 auto;
}
.login_button {
		background-color: #6873b0;
		color: white;
	margin-top:10px;
		padding:10px;
		width: 100%;
	font-size:18px;
	font-weight: bold;
}
.login_button:hover{
	background-color: green;
	transform: scale(1.03);
}
.create_btn{
	background-color: #6873b0;
		color: white;
	margin-top:10px;
	margin-bottom:15px;
	padding:10px;
		width: 100%;
	font-size:16px;
	font-weight: bold;

}
.create_btn:hover{
	background-color: green;
	transform: scale(1.03);
}
.back_btn{
	margin-top:10px;
	color: white;
	margin-bottom:15px;
		padding: 10px;
		background-color: #e67e22;
}
.logout_button{
	background-color: #c0392b;
		color: white;
	margin-top:10px;
		padding:10px;
		width: 100%;
	font-size:18px;
	font-weight: bold;
}

.sign_up_btn {
	background-color: #3498db;
		color: white;
	 padding:12px;
	margin-top:10px;
	margin-bottom:10px;
		width: 100%;
	font-size:16px;
	font-weight: bold;
}
.sign_up_btn:hover{
	background-color: green;
	transform: scale(1.03);
}
.imgcontainer {
		text-align: center;
		margin: 24px 0 12px 0;
}

/*img.avatar {
		width: 30%;
		border-radius: 50%;
}*/

.container {
		margin: 16px;
	width:100%;
}

.delete_btn{
	background-color: #3498db;
		color: white;
	margin-top:10px;
	margin-bottom:15px;
	padding:10px;
		width: 100%;
	font-size:16px;
	font-weight: bold;
}
</style>
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>Admin Login Form</h2></center>

		<form action="../controls/transfer.html" method="post">

			<div class="inner_container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>

				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>

				<button class="login_button" name="login" type="submit">Login</button>
			</div>
		</form>
	</div>
</body>
</html>
