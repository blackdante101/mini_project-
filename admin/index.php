<?php 
session_start();
if(isset($_SESSION['username']))
{
	if($_SESSION['username']=="admin")
	{
		header("location:dashboard.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Log In</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/main.css">
</head>
<body class="bg-dark">
	<div class="container rounded mt-5 justify-content-center bg-light p-5 w-50">
		<h3>Admin Login</h3>
		<?php 
		if(isset($_GET['s']))
		{
			echo '<h6 class="text-danger">Please enter valid credentials</h6>';
		}


		 ?>
		<form method="POST" action="../processors/formprocessor.php">
		<div class="form-group mt-4">
			<div style="width:100% !important" class="form-input">
				<input type="text" placeholder="Username" name="username" required>
				<i class="fa fa-envelope"></i>
			</div>
		</div>
		<div class="form-group mt-2">
			<div style="width:100% !important" class="form-input">
			<input type="password" placeholder="Password" name="password" required>
			<i class="fa fa-key"></i>
		</div>
			</div>
		<button style="width:100% !important" name="admin_login" class="btn bg-green  form-button text-white">Log In</button>
	</div>
</form>
	
</body>
</html>