<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="navbar-header">
		<?php include 'header.php';?>
	</div>	
	<?php 
	include 'server.php';
	$id=$_GET['D_id'];
	$select=$server->query("SELECT * from donors where D_id='$id'");
	while ($fetch=mysqli_fetch_array($select)) {
		# code...?>

<form method="POST">
	<label>FirstName</label><br>
	<input type="text" name="fname" required="" value="<?php echo $fetch['F_Name'] ?>"><br>
	<label>LastName</label><br>
	<input type="text" name="lname" required="" value="<?php echo $fetch['L_Name'] ?>"><br>
	<label>Sex</label><br>
	<input type="text" name="gender" required="" value="<?php echo $fetch['Sex'] ?>"><br>
	<label>Date</label><br>
	<input type="date" name="date" required="" value="<?php echo $fetch['Date'] ?>"><br>
	<label>Email</label><br>
	<input type="email" name="email" required="" value="<?php echo $fetch['Email'] ?>"><br>
	<input type="submit" name="submit" value="submit">
	<?php
	}

	 ?>
</form>
</body>
</html>
<?php 
include 'server.php';
if (isset($_POST['submit'])) {
	$id=$_GET['D_id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$sex=$_POST['gender'];
	$date=$_POST['date'];
	$email=$_POST['email'];
	$up=$server->query("UPDATE donors SET F_Name='$fname',L_Name='$lname',Sex='$sex',Date='$date',Email='$email' WHERE D_id='$id'")or die("failed");
	if ($up) {
		# code...
		echo "<script>alert('Update')</script>";
		echo "<script>window.location.replace('donors_select.php')</script>";
	}
}
 ?>