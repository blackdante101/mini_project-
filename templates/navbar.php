<nav>
	<div class="p-3">
		<h3><a href="index.php">Logo</a></h3>
	</div>
	<div id="nav-item1" class="p-3">
	<div class="search-input">
		<i class="fa fa-search"></i>
		<input type="text" name="search" placeholder="Search for service">
	</div>
</div>
	<div id="nav-item" style="justify-content: flex-end;" class="p-3">
	<div class="profile">
		<div class="profile-img">
			
		</div>
		<p>
		<?php 
		if(isset($_SESSION['username']))
		{
			echo $_SESSION['username'];
		}
		else
		{
			echo "user";
		}


		 ?></p>
		<a href="logout.php">Logout</a>
	</div>
</div>
</nav>