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
	<label>Name</label><br>
	<input type="text" name="name" required=""><br>
	<label>Date</label><br>
	<input type="date" name="date" required=""><br>
	<label>Type</label><br>
	<input type="text" name="type" required=""><br>
	<label>Amount</label><br>
	<input type="text" name="amount" required=""><br>
	<input type="submit" name="submit" value="submit">

</form>
</body>
</html>
<?php 
include 'server.php';
if (isset($_POST['submit'])) {
	# code...
	$name=$_POST['name'];
	$date=$_POST['date'];
	$type=$_POST['type'];
	$amount=$_POST['amount'];
	$insert=$server->query("INSERT into donation values('','$name','$date','$type','$amount')") or die("insert failed");
	if ($insert) {
		# code...
		echo "<script>alert('$type added'),window.location.replace('select_donation.php')</script>";
	}
}
 ?>