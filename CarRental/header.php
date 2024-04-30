
<header>
			<div class="wrapper">
				<h1 class="logo"> Car Company</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
					
					session_start();
						if(!isset($_SESSION['email']) && (!isset($_SESSION['pass']))){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><h2><a href="index.php">Login to Rent Car!!</a></h2></li>
						<li><a href="#">About</a></li>
						
					</ul>
					<a href="account.php">Client Login</a>
					<a href="login.php">Admin Login</a>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="message_admin.php">Message Admin</a></li>
							</ul>
					<a href="admin/logout.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>
