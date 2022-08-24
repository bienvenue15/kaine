<!DOCTYPE html>
<html>
<head>
	<title>www.kaine_fc.com</title>
	<link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>
	<div class="php-code">
		<?php 
          session_start();
          if (!$_SESSION['username']) {
          	echo "<script>alert('not allowed to access this page')</script>";
          	echo "<script>window.location.replace('user_login.php')</script>";
          }
		?>
	</div>
<div class="container">
	<div class="row">
		<div class="navbar">
			<ol>
				<li><a href="index.php">Home</a></li>
				<li><a href="donors_select.php">Donors</a></li>
				<li><a href="select_donation.php">Donation</a></li>
				<li><a href="report.php">Report</a></li>
				<li><a href="logout.php" id="logout">Logout</a></li>
			</ol>
		</div>
	</div>
</div>
</body>
</html>