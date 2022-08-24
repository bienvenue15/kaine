<!DOCTYPE html>
<html>
<head>
	<title>www.kaine_fc.com</title>
</head>
<body>
<div class="navbar-header">
	<?php include 'header.php';?>
</div>
<table border="1">
	<thead>
		<th>FirstName</th>
		<th>LastName</th>
		<th>Sex</th>
		<th>date</th>
		<th>Email</th>
		<th colspan="2">Actions</th>
	</thead>
	<tbody>
		<?php 
include 'server.php';
$select=$server->query("SELECT * from donors");
while ($fetch=mysqli_fetch_assoc($select)) {
	# code...?>
	<tr>
		<td><?php echo $fetch['F_Name'] ?></td>
		<td><?php echo $fetch['L_Name'] ?></td>
		<td><?php echo $fetch['Sex'] ?></td>
		<td><?php echo $fetch['Date'] ?></td>
		<td><?php echo $fetch['Email'] ?></td>
		<td>
			<button><a href="donors_update.php?D_id=<?php echo $fetch['D_id']; ?>">Update</a></button>
			<button><a href="donors_delete.php?D_id=<?php echo $fetch['D_id']?>">Delete</a></button>
		</td>
	</tr>
	<?php
}
		 ?>
	</tbody>
</table>
<div class="button">
	<a href="donors.php">Add-Donors</a>
</div>
</body>
</html>