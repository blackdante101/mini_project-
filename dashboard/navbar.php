<nav class="navbar fixed-top navbar-expand-lg navbar-light">
	<a href="index.php" class="navbar-brand logo">Healthbag</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	<div class="collapse navbar-collapse" id="navbarNav">
	<ul class="navbar-nav d-flex align-items-center ml-auto">
		<li class="nav-item">
			<a href="bookings.php" class="nav-link"><img src="../img/notification.svg" width="25" height="25"></a>
		</li>
		<li class="nav-item mr-3">
		<div class="profile  ml-2">
		<div class="profile-img"></div>
		<span style="margin-top:3px;">
		<?php 
		if(isset($_SESSION['username']))
		{
			echo $_SESSION['username'];
		}
		else
		{
			echo "user";
		}
		 ?></span>
	</div>
		</li>
		<li class="nav-item">
			<a style="color:#000;font-size:14px;" href="logout.php" class="nav-link">Logout&nbsp;<i  class="fa fa-sign-out-alt"></i></a>
		</li>
		
	</ul>
</div>
</nav>