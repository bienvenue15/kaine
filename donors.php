<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="navbar-header">
		<?php include 'header.php';?>
	</div>	
<form method="POST">
	<label>FirstName</label>
	<input type="text" name="fname" required="">
	<label>LastName</label>
	<input type="text" name="lname" required="">
	<label>Sex</label>
	<input type="radio" name="gender" value="Male" required="">Male
	<input type="radio" name="gender" value="Female" required="">Female
	<label>Date</label>
	<input type="date" name="date" required="">
	<label>Email</label>
	<input type="email" name="email" required="">
	<input type="submit" name="submit" value="submit">

</form>
</body>
</html>
<?php 
include 'server.php';
if (isset($_POST['submit'])) {
	$id=$_GET['Ot_id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$sex=$_POST['gender'];
	$date=$_POST['date'];
	$email=$_POST['email'];
	$insert=$server->query("INSERT into donors values('','$fname','$lname','$sex','$date','$email','$id','".$_SESSION['user_id']."')") or die("insert failed");
	if ($insert) {
		# code...
		echo "<script>alert('$type added'),window.location.replace('donors_select.php')</script>";
	}
}
 ?>