<?php
session_start();
if (isset($_SESSION['username'])) {
	header('location: user.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>iDEAR</title>
	<link rel='stylesheet' href='thirdparties/bootstrap/css/bootstrap.css'>
	<link rel='stylesheet' href="css/style.css">
</head>
<body>

<div class="container-fluid">
	<!--Navigation bar-->
	<?php include('includes/nav.include.php');?>
	<!-- ENd of Navigation -->
</div>
<br>
<div class="container">

	<div class="col-md-6">
	
	</div>
<br>
	<div class="carousel slide" data-ride="carousel" style="
	border-radius:10px;
	border:6px solid #d8d0ca;">
		<div class="carousel-inner">
			<div class="item active">
				<img src="thirdparties/images/Jewel.jpg"> 
			</div>
			<div class="item">
				<img src="thirdparties/images/healthy.jpg"> 
			</div>
			<div class="item">
				<img src="thirdparties/images/67.jpg"> 
			</div>
			<div class="item">
				<img src="thirdparties/images/60.jpg"> 
			</div>
			<div class="item">
				<img src="thirdparties/images/5.jpg"> 
			</div>
			<div class="item">
				<img src="thirdparties/images/69.jpg"> 
			</div>
			<div class="item">
				<img src="thirdparties/images/The.jpg"> 
			</div>
			<div class="item">
				<img src="thirdparties/images/Ends.jpg"> 
			</div>
			<div class="item">
				<img src="thirdparties/images/End.png"> 
			</div>
		</div>
		
	</div>
		<div class="row">
		<div class="col-md-12"><br>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
</div>

	
<div class="row"><br>
	<div class="col-md-4" style="border-radius:10px; border:3px solid #d8d0ca;">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
		</div>
		<div class="col-md-4">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<div class="col-md-4">
			<?php require("includes/form-processor.php");?>
			<h4> Register</h4>
			<hr>
			<form action="" method="post" class="form"> 
				<div class="form-group">
					<label for="name">Firstname:</label>
					<input type="text" class="form-control" name="firstname">
				</div>
				<div class="form-group">
					<label for="name">Lastname:</label>
					<input type="text" class="form-control" name="lastname">
				</div>
				<div class="form-group">
					<label for="name">Username:</label>
					<input type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" class="form-control" name="password" >
				</div>
				<div class="form-group">
					<input type="submit" name="register" class="btn btn-md btn-primary" value="register">
					<a href="login.php" class="btn btn-md btn-primary"> Sign in</a>

			</div>

		</form>
		</div>
	</div>
</div>		

<footer>
	<a href='login.php' class='btn btn-md btn-success'>Sign in instead</a>
</footer>

</body>
<script src="thirdparties/jquery.js"></script>
<?php include('includes/scripts.include.php');?>
</html>