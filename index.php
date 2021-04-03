<?php 
session_start();
if(isset($_SESSION['username']))	
{
	header('location:dashboard/');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<?php include 'templates/stylesheet.php';?>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="container-fluid">
		<div class="sign-up-form row">
			<div class="col-md-6 p-5 form-img signin-img">
				<h1>Making Health Services And Consultation Easier</h1>
				<p></p>
				
			</div>
			<div class="col-md-6 p-5 ">
				<a href="signup.php" class="btn text-white bg-green float-right mb-3">Sign Up &nbsp;<i class="fas fa-user-plus"></i></a><br><br><br>
				<form method="POST" action="processors/formprocessor.php" class="mt-5">
					<h5>Welcome Back</h5>
					<h4>Log In to Continue</h4>
					<?php 
				if(isset($_GET['s']))
				{
					if($_GET['s']=='err')
					{
						echo "<h6 class='err'>Error: Please enter valid login details</h6>";
						$err="err-textbox";
					}
				}
				else
				{
					$err="";
				}

				 ?>
					<div class="form-group mt-4">
						<div class="form-input <?php echo $err ?>">
							<input type="email" placeholder="Email" name="email" required>
							<i class="fa fa-envelope"></i>
						</div>
					</div>
					<div class="form-group mt-2">
						<div class="form-input <?php echo $err ?>">
							<input type="password" placeholder="Password" name="password" required>
							<i class="fa fa-key"></i>
						</div>
					</div>
					<button name="login" class="btn bg-green  form-button text-white">Log In</button>
					
				</form>
			</div>
		</div>
	</div>
</body>
</html>