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
		<?php include 'k_header.php'; ?>
	</div>
<fieldset style="width: 20vw;">
	<div class="form">
	<h2>User SignIn</h2>
<form method="POST">
<label>Username</label><br>
<input type="text" name="username" required=""><br>
<label>password</label><br>
<input type="password" name="password" required=""><br>
<input type="submit" name="submit" value="submit">
<a href="user_registration.php">Need access?</a>	
</form>
</div>
</fieldset>
</body>
</html>
<?php 
include 'server.php';
session_start();
if (isset($_POST['submit'])) 
{
$user=$_POST['username'];
$pass=$_POST['password'];
$select=$server->query("SELECT * FROM users where u_Name='$user' and u_Password='$pass'");
$num=mysqli_num_rows($select);
if ($num) 
{
	$fetch=mysqli_fetch_array($select);
	$_SESSION['user_id']=$fetch['user_id'];
	$_SESSION['username']=$fetch['u_Name'];
	if ($_SESSION['username']) {
		# code...
		echo "<script>alert('$user logged on'),window.location.replace('index.php')</script>";
	}

}

}

 ?>