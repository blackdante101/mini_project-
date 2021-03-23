<?php 
include '../class/chatbot.php';
$chatbot = new Chatbot();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Bookings</title>
	<?php include '../templates/stylesheet.php'?>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<div style="margin-top: 100px;" class="container  p-5">
	<h3 class="mb-2">My Bookings</h3>
	<?php $chatbot->getBookings(); ?>

</div>
	
</body>
</html>