?php
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
</body>
</html>