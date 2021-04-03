<?php 
  include '../class/chatbot.php';
  $chatbot = new Chatbot();
?>
<html>
	<head>
		<title>Dashboard</title>
	<?php include '../templates/stylesheet.php'?>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/main.css">
	</head>
	<body>
    <?php include 'navbar.php';?>
    <div class="container card-container bot-card">
    	<div class="row rounded ">
         <div class="bot-img-container col-md-4 bg-deepergreen p-5">
             <img class="bot-card-img" src="../img/bot-illustration.png">
         </div>  
         <div class="col-md-8 bg-deepergreen p-5">
             <h3 class="text-white">Meet Our Virtual Agent</h3>
             <p class="text-white">Our chatbot provides an intelligent solution that can keep up with the instant and personal nature of medical services and providing information.</p>
             <a href="chatbot/" class="btn bg-white text-deepergreen">Launch</a> 
         </div>
        </div>
    </div>
    <div  class="container mt-3 card-container">
        <div class="row">
        <div class="col-md-3 p-2">
            <div class="nav-card">
                <div style="background-color:#48d3831a;" class="nav-card-icon">
                    <img src="../img/corona.png" alt="" class="card-icon">
                </div>
                <h6  class="ml-2"><a style="color:#2ECC71;" href="#">Covid-19 Cases</a></h6>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="nav-card">
                <div style="background-color:#e74c3c1f;" class="nav-card-icon">
                    <img src="../img/fruits.png" alt="" class="card-icon">
                </div>
                <h6  class="ml-2"><a style="color:#E74C3C;" href="healthtips.php">Health Tips</a></h6>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="nav-card">
                <div style="background-color:#2980b936;" class="nav-card-icon">
                    <img src="../img/hospital.png" alt="" class="card-icon">
                </div>
                <h6  class="ml-2"><a style="color:#2980B9;" href="services.php">Home Services</a></h6>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="nav-card">
                <div style="background-color:#f1c40f3b;" class="nav-card-icon">
                    <img src="../img/faqs.png" alt="" class="card-icon">
                </div>
                <h6  class="ml-2"><a style="color:#F1C40F;" href="faqs.php">FAQS</a></h6>
            </div>
        </div>
        </div>
        <div class="container card-container mt-5">
            <h5>Today Health Picks</h5>
            <h6 class="text-gray">Daily health suggestions for you!</h6>
            <div class="row mt-2">
                <div class="col-md-3 p-2 ">
            <div class="tip-card">
            <h4 style="color:#75B50B;">Apples</h4>
            <img src="../img/pngtree-fresh-green-apple-set-isolated-on-transparent-png-image_1934551-removebg-preview.png" alt="">
            <p>Apples are a good source of fiber and vitamin C. They also contain polyphenols, which may have numerous health benefits.</p>
        </div>
                </div>
                <div class="col-md-3  p-2">
                    <div class="tip-card">
            <h4 style="color:#FA8000;">Oranges</h4>
            <img src="../img/purepng.com-orangesorangefruitfoodtastydeliciousorangecolor-3315225826354ezzx.png" alt="">
            <p>Oranges are primarily made up of carbs and water. They’re also a good source of fiber, which may support digestive health.</p>
        </div>
                </div>
                <div class="col-md-3  p-2">
                    <div class="tip-card">
            <h4 style="color:#bc0d0d;">Watermelons</h4>
            <img src="../img/watermelon.png" alt="">
            <p>Watermelon is a low-calorie fruit high in some nutrients, especially carotenoids, vitamin C and cucurbitacin E.</p>
        </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="tip-card">
            <h4 style="color:#e0a00e;">Bananas</h4>
            <img src="../img/banana.png" alt="">
            <p>Bananas contain three natural sugars – sucrose, fructose and glucose – giving you a fat and cholesterol-free source of energy. </p>
        </div>
          </div>
            </div>
        </div>
        <div class="container card-container mt-5">
            <h5>What Do You Need?</h5>
            <h6 class="text-gray">Enjoy our services from the comfort of your home</h6>
            <div class="row">
               <?php $chatbot->listServices();?>
            </div>
        </div>
        
    </div>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.js"></script>
	</body>
</html>