<?php
    include('connect.php');
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<header>
			<a class="navbar-brand" href="#">
				<img src="images/logo.png" alt="Logo" style="width:70px;" height="50px" class="rounded-pill">
			  </a>
			<nav class="navigation">
				<a href="index.php">Home</a>
				<a href="about.php">About Us</a>
				<a href="services.php">Services</a>
				<a href="contactus.php">Contact</a>
				</nav>
		</header>
	</div>

    <div id="container" class="container">
		<div class="row">
			
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
				    <form action="register.php" method="post">
						<div class="form sign-up">
							<div class="input-group">
								<i class='bx bxs-user'></i>
								<input type="text" name="username" placeholder="Username">
							</div>
							<div class="input-group">
								<i class='bx bx-mail-send'></i>
								<input type="email" name="email" placeholder="Email">
							</div>
							<div class="input-group">
								<i class='bx bxs-lock-alt'></i>
								<input type="password" name="password" placeholder="Password">
							</div>
							<button type="submit" >
								Sign up
							</button>
							<p>
								<span>
									Already have an account?
								</span>
								<b onclick="toggle()" class="pointer">
									Sign in here
								</b>
							</p>
						</div>
					</div>
				</form>
			</div>

			<div class="col align-items-center flex-col sign-in">
			
				<div class="form-wrapper align-items-center">
				<form method="post" action="sign_in.php">
					<div class="form sign-in">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" name="username" placeholder="Username">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="password" placeholder="Password">
						</div>
						<button>
							Sign in
						</button>
						<p>
							<b>
								Forgot password?
							</b>
						</p>
						<p>
							<span>
								Don't have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign up here
							</b>
						</p>
					</div>
				</form>
				</div>
				<div class="form-wrapper">

				</div>
			</div>
		</div>

		<div class="row content-row">
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						Welcome BHEL
					</h2>

				</div>
				<div class="img sign-in">

				</div>
			</div>
			<div class="col align-items-center flex-col">
				<div class="img sign-up">

				</div>
				<div class="text sign-up">
					<h2>
						Join with us
					</h2>

				</div>
			</div>
		</div>
	</div>

    <script src="index.js"></script>
</body>
</html>