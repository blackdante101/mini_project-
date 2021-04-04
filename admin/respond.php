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
		<a href="index.php" class="navbar-brand text-white">Dashboard</a>
		<ul class="navbar-nav">
		<li class="nav-item">
			<a href="logout.php" class="nav-link text-white">Logout</a>
		</li>
	</ul>
	</header>
	<div class="container w-50 bg-light mt-5 p-5">
		<h4>Confirm Booking</h4>
		<table class="table table-bordered mt-4">
			<thead>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Tel.</th>
				<th>Location</th>
				<th>Service</th>
			</thead>
			<tbody>
					<?php
					$id = $_GET['id'];
					$chatbot->listBooking($id);

					 ?>
				
			</tbody>
		</table>
      <h6 class="mt-5">Add message:</h6>
      <form method="POST" action="../processors/formprocessor.php">
      	<div class="form-group">
      		 <textarea class="form-control" name="message" id="" cols="30" rows="5"></textarea>
      		 <input type="hidden" value="<?echo $id; ?>" name="id">
      	</div>
      <button name="addmessage" class="btn btn-success">submit</button>
  </form>
	</div>
</body>
</html>