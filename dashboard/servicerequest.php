<?php 
include '../class/chatbot.php';
$chatbot = new Chatbot();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Service Request</title>
	<?php include '../templates/stylesheet.php';?>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container mt mt-3">
	<div class="row">
		<div class="col-md-5 p-5">

			<?php 

			$id = $_GET['id'];
			$chatbot->getServiceDetails($id);
			 ?>
		</div>
		<div class="col-md-7 p-5">
			<h2>Fill in the required fields</h2>
			<form method="POST" action="../processors/formprocessor.php">
				<div class="form-group">
					<div class="form-input mt-2">
						<input type="text" name="first_name" placeholder="First Name" required>
						<i class="fa fa-user"></i>
					</div>
					<div class="form-input mt-2">
						<input type="text" name="last_name" placeholder="Last Name" required>
						<i class="fa fa-user"></i>
					</div>
					<div class="form-input mt-2">
						<input type="text" name="town" placeholder="Town" required>
						<i class="fa fa-map-marker"></i>
					</div>
					<div class="form-input mt-2">
						<input type="text" name="phone_number" placeholder="Phone Number" required>
						<i class="fa fa-phone"></i>
					</div>
					<input type="hidden" name="service_type" value="<?php echo $_SESSION['bookingtype']; ?>">
				</div>
				<button name="bookbtn" class="btn bg-green form-button text-white">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>