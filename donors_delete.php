<?php
include'server.php';
$id=$_GET['D_id'];
$delete=$server->query("DELETE FROM donors where D_id='$id'");
if ($delete) {
	echo "<script>alert('data removed')</script>";
	echo "<script>window.location.replace('donors_select.php')</script>";
}
?>