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
$id=$_GET['Ot_id'];
$select=$server->query("SELECT * from donation where Ot_id='$id' ");
while ($fetch=mysqli_fetch_array($select)) {
	?>
	<form method="POST">
	<label>Name</label><br>
	<input type="text" name="name" value="<?php echo $fetch['Name']; ?>"><br>
	<label>Date</label><br>
	<input type="date" name="date" value="<?php echo $fetch['Date']; ?>"><br>
	<label>Type</label><br>
	<input type="text" name="type" value="<?php echo $fetch['Type']; ?>"><br>
	<label>Amount</label><br>
	<input type="text" name="amount" value="<?php echo $fetch['Amount']; ?>"><br>
	<input type="submit" name="submit" value="submit">
</form>
	<?php
}
 ?>

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
	$update=$server->query("UPDATE donation SET Name='$name',Date='$date',Type='$type',Amount='$amount' where Ot_id='$id'");
	if ($update) {
		# code...
		echo "<script>alert('updated'),window.location.replace('select_donation.php')</script>";
	}
	else
	{
		echo "<script>alert('not updated'),window.location.replace('select_donation.php')</script>";
	}
}
 ?>