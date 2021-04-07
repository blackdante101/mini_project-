<?php 
include '../class/chatbot.php';
$chatbot = new Chatbot();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Services</title>
	<?php 
		include '../templates/stylesheet.php'
		 ?>
		 <link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
<?php include 'navbar.php'; ?>
	<div class="banner  services-img">
	 <h1>Our Services</h1>
	</div>
	<div class="container p-5">
		<div class="row">
        <?php $chatbot->listServices(); ?>
		</div>
	</div>
</body>
</html>