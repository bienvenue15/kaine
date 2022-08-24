<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="report.css">
</head>
<body>
<div class="tables">	
<!--Donors all report table code-->	
<div class="h-d">
<!--php header for website-->
<?php
include'header.php';
include 'server.php';
?>
<!--php header for website-->
</div>
<div class="table">
<h1>Donors-List</h1>
 			<table border="1">
 				<th>Number</th>
 				<th>FirstName</th>
 				<th>LastName</th>
 				<th>Sex</th>
 				<th>Date</th>
 				<th>Email</th>

 		
<?php
 if (isset($_POST['send'])) {
 	$date=$_POST['date'];
 	$date1=$_POST['date1'];
 	if (empty($date)|| empty($date1)) {
 		echo "<script>alert('fill the both date')</script>";
 	}
 	else{
 		$select=$server->query("SELECT * FROM donors WHERE Date BETWEEN '$date' and '$date1'");
 		while($fetch_date=mysqli_fetch_array($select)){
 			?>
             <tr>
             	<td><?php echo $fetch_date['D_id'] ?></td>
             	<td><?php echo $fetch_date['F_Name'] ?></td>
             	<td><?php echo $fetch_date['L_Name'] ?></td>
             	<td><?php echo $fetch_date['Sex'] ?></td>
             	<td><?php echo $fetch_date['Date'] ?></td>
             	<td><?php echo $fetch_date['Email'] ?></td>
             </tr>
 			<?php
 		}
 	}
 }
 ?>
 </table>	
</div>
<!-- end-Donors-all-report-table-code-->
<!--Donation-all-report-table-code-->
<div class="donation">
	
</div>
<!-- end-Donation-all-report-table-code-->
<div class="d-table">
<h1>Donation-List</h1>
 			<table border="1">
 				<th>No</th>
 				<th>Name</th>
 				<th>Date</th>
 				<th>Type</th>
 				<th>Amount</th>

 		
<?php
 if (isset($_POST['submit'])) {
 	$date=$_POST['date'];
 	$date1=$_POST['date1'];
 	if (empty($date)|| empty($date1)) {
 		echo "<script>alert('fill the both date')</script>";
 	}
 	else{
 		$select=$server->query("SELECT * FROM donation WHERE   Date BETWEEN '$date' and '$date1'");
 		while($fetch_date=mysqli_fetch_array($select)){
 			?>
             <tr>
             	<td><?php echo $fetch_date['Ot_id'] ?></td>
             	<td><?php echo $fetch_date['Name'] ?></td>
             	<td><?php echo $fetch_date['Date'] ?></td>
             	<td><?php echo $fetch_date['Type'] ?></td>   	
             	<td><?php echo $fetch_date['Amount'] ?></td>
             </tr>
 			<?php
 		}
 	}
 }
 ?>
 </table>
<!--donors report form-->
</div>
<h1>Donors-Month-Report</h1>
<div class="report">
	<div class="r-form-header">
		<form method="POST">
			<label>From</label>
			<input type="date" name="date">
			<label>To</label>
			<input type="date" name="date1"><br>
			<input type="submit" name="send" value="Send">
		</form>
	</div>
</div>
<!--end-donors-report-->
<!--donors report-->

<div class="report-d">
	<div class="r-form-header">
		<h1>Donation-Month-Report</h1>
		<form method="POST">
			<label>From</label>
			<input type="date" name="date">
			<label>To</label>
			<input type="date" name="date1"><br>
			<input type="submit" name="submit" value="Send">
		</form>
	</div>
</div>
<!--end-donors-report-->
</body>
</html>