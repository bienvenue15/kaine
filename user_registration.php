<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
		fieldset{
			height: 300px;
			margin-top: 3%;
			margin-left: 40%;
		}
		.form{
			margin-top: 20%;
			margin-left: 15%;
		}
		label{
			font-family: cambria;
			font-size: 20px;
		}
		input[type='text'],input[type='password']{
			width: 200px;
			height: 20px;
			border: none;
			border-bottom: 2px solid black;
		}
		input[type='submit']{
			width:100px;
			margin-top: 3%; 
		}
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="navbar-nav">
		<?php include'k_header.php';?>
	</div>
<fieldset style="width: 20vw;">
<div class="form">
<h2>User SignUp</h2>	
<form method="POST">
<label>Username</label><br>
<input type="text" name="username" required=""><br>
<label>password</label><br>
<input type="password" name="password" required=""><br>
<label>Confirm password</label><br>
<input type="password" name="pass" required=""><br>
<input type="submit" name="submit" value="submit">	
</form>
</div>
</fieldset>
</body>
</html>
<?php 
include 'server.php';
if (isset($_POST['submit'])) {
	# code...
	$user=$_POST['username'];
	$pass=$_POST['pass'];
	$password=$_POST['password'];
	if ($pass==$password) {
		$insert=$server->query("INSERT INTO users values('','$user','$pass')") or die("insert failed");
		if ($insert) {
		# code...
		echo "<script>alert('Account Created'),window.location.replace('user_login.php')</script>";
	}
	}else{
		echo "<script>alert('Account Not Created')</script>";
	}
	
}
 ?>