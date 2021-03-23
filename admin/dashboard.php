<?php
 include '../class/chatbot.php';
 $chatbot = new Chatbot();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<title>Admin Dashboard</title>
</head>
<body>
	<header class="navbar navbar-light navbar-light bg-dark">
		<a href="#" class="navbar-brand text-white">Dashboard</a>
		<ul class="navbar-nav">
		<li class="nav-item">
			<a href="logout.php" class="nav-link text-white">Logout</a>
		</li>
	</ul>
	</header>
	<div class="container  mt-2 p-5">
		<h3>All Bookings</h3>
		
		<h5 class="mt-3">Pending Bookings</h5>
		<table class="table table-bordered mt-3">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Location</th>
				<th>Phone Number</th>
				<th>Service</th>
				<th>Status</th>
				<th>Actions</th>

			</tr>
			<?php 
			$chatbot->listPendingBookings();
			?>
		</table>
		<h5 class="mt-5">Confirmed Bookings</h5>
		<table class="table table-bordered mt-3">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Location</th>
				<th>Phone Number</th>
				<th>Service</th>
				<th>Status</th>
			</tr>
			<?php 
			$chatbot->listConfirmedBookings();
			?>
		</table>
	</div>
</body>
</html>