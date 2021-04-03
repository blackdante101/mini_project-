<?php 
session_start();
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
			<?php
			if(isset($_SESSION['bookingerr']))
             {
			 echo"<h6 class='text-danger'>".$_SESSION['bookingerr']."</h6>"; 
	         }
	         unset($_SESSION['bookingerr']);
			 ?>
		
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
					<?php
					if($_GET['id']=="4")
					{
						echo '<div class="form-input mt-2">
						<select name="test_type">
						<option>--- Select Lab Test Type ---</option>
						<option>Blood Test</option>
						<option>Malaria Test</option>
						</select>
					</div>';
					}

					 ?>
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