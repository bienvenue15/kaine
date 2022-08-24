<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="navbar-header">
	<?php include 'header.php';?>
</div>
<table border="1">
	<thead>
		<th>Name</th>
		<th>date</th>
		<th>Type</th>
		<th>amount</th>
		<th>Actions</th>
	</thead>
	<tbody>
		<?php 
include 'server.php';
$select=$server->query("SELECT * from donation");
while ($fetch=mysqli_fetch_assoc($select)) {
	# code...?>
	<tr>
		<td><?php echo $fetch['Name'] ?></td>
		<td><?php echo $fetch['Date'] ?></td>
		<td><?php echo $fetch['Type'] ?></td>
		<td><?php echo $fetch['Amount'] ?></td>
		<td>
			<button><a href="donors.php?Ot_id=<?php echo $fetch['Ot_id']?>">Donors</a></button>
			<button><a href="update_donation.php?Ot_id=<?php echo $fetch['Ot_id']; ?>">Update</a></button>
			<button><a href="delete_donation.php?Ot_id=<?php echo $fetch['Ot_id']?>">Delete</a></button>
		</td>
	</tr>
	<?php
}
		 ?>
	</tbody>
</table>
<div class="button">
	<a href="donation.php">Add-donation</a>
</div>
</body>
</html>