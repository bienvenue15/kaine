<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php 
include 'server.php';
$id=$_GET['Ot_id'];
$delete=$server->query("DELETE FROM donation where Ot_id='$id'");
if ($delete) {
	echo "<script>window.location.replace('select_donation.php')</script>";
}

 ?>