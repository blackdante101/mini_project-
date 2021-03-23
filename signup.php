<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<?php include 'templates/stylesheet.php'; ?>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container-fluid">
		<div class="sign-up-form row">
			<div class="col-md-6 p-5 form-img signup-img">
				<h1>Making Health Services And Consultation Easier</h1>
				<p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Deleniti esse, sapiente fugit quas dolorem. Dolores?</p>
				
			</div>
			<div class="col-md-6 p-5 ">
				<a href='index.php' class="btn text-white bg-green float-right mb-3">Sign in &nbsp;<i class="fas fa-user-plus"></i></a><br><br><br>
				<form method="POST" action="processors/formprocessor.php" class="mt-4">
				
					<h4>Create a new account</h4>
					<div class="form-group mt-4">
						<div class="form-input">
							<input type="text" placeholder="First Name" name="first_name">
							<i class="fa fa-user"></i>
							
						</div>
						<div class="form-input mt-2">
							<input type="text" placeholder="Last Name" name="last_name">
							<i class="fa fa-user"></i>
							
						</div>
					</div>
					<div class="form-group mt-2">
						<div class="form-input">
							<input type="date" placeholder="Date Of Birth" name="dob">
							<i class="fa fa-calendar"></i>
						</div>
					</div>
					<div class="form-group mt-2">
						<div class="form-input">
							<input type="text" placeholder="Email" name="email">
							<i class="fa fa-envelope"></i>
						</div>
					</div>
					<div class="form-group mt-2">
						<div class="form-input">
							<input type="password" placeholder="Password" name="password">
							<i class="fa fa-key"></i>
						</div>
					</div>
					<button name="signup" class="btn bg-green form-button text-white">Sign Up</button>
					
				</form>
			</div>
		</div>
	</div>
</body>
</html>