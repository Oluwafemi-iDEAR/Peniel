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
	<title>iDEAR App</title>
	<link rel='stylesheet' href='thirdparties/bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet' href="css/style.css">
</head>
<body>


<div class="container-fluid">
	<!--Navigation bar-->
	<?php include('includes/nav.include.php');?>
	<!-- ENd of Navigation -->

	<div class="row">
		<div class="col-md-3">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<div class="col-md-3">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<div class="col-md-6">
			<?php require('includes/form-processor.php'); ?>

			<h4>Sign in</h4>
			<hr>

			<form action='' method='POST' class="form">
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username">
				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password">
				</div>

				<div class="form-group">
					<input type="submit" name="login" class="btn btn-md btn-primary" value="Sign in!">
				</div>
					<!-- Sign up button -->
					<label>Not a member?</label>
			<a href='index.php' class="btn btn-md btn-danger">Sign up</a>
		</form>
		</div>
	</div>
</div>


</body>
</html>