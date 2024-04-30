<?php
	if(isset($_POST['log'])){
		include 'includes/config.php';
					
		$uname = $_POST['email'];
		$pass = $_POST['pass'];
					
		$qy = "SELECT * FROM client WHERE email = '$uname' AND id_no = '$pass'";
		$log = $conn->query($qy);
		$num = $log->num_rows;
		$row = $log->fetch_assoc();
			if($num > 0){

				
				session_start();
				$_SESSION['email'] = $row['email'];
				$_SESSION['pass'] = $row['id_no'];
				echo "<script type = \"text/javascript\">
					alert(\"Login Successful.................\");
					window.location = (\"index.php\")
					</script>";
				} else{
					echo "<script type = \"text/javascript\">
					alert(\"Login Failed. Try Again................\");
					window.location = (\"account.php\")
					</script>";
					}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Car Rental</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section>
		<?php
			include ('header.php');
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="search">
		<div class="wrapper">
		<div id="form">
			<form method="post">
			<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Client Login Area</h3>
				<table height="100" align="center">
					<tr>
						<td>Email Address:</td>
						<td><input type="email" name="email" placeholder="Enter Email Address" required></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Enter ID Number" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="log" value="Login Here"></td>
						<td style="text-align:right;"><a href="signup.php">Sigup Here</a></td>
					</tr>
				</table>
			</form>

			
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

	</section><!--  end search section  -->

	<footer> <!--  start footer  -->
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">...</a></li>
						
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Mercedes</a></li>
						<li><a href="#">Range Rover</a></li>
						<li><a href="#">Landcruisers</a></li>
						<li><a href="#">Others.</a></li>
					</ul>
				</li>

				<li class="about">
					<p>Car Rental company that rents cars and other vehicles to clients at lower costs. We we are here to serve every Kenyan Citizen</p>
					
				</li>
			</ul>
		</div>

		
	</footer>
	
</body>
</html>