<?php
//process the sign up form
require("connection.php");


if(isset($_POST["register"])){	

		$errors = array();
		$firstname = trim($_POST['firstname']);
		$lastname = trim($_POST['lastname']);
		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]);

		if (empty($username)) {
			$errors[] ="Please enter username";
		}

		if (empty($password)) {
			$errors[] ="<div style='margin-top:5px;'>Please enter password</div>";
		}

		if (empty($errors)) {



			$query = "INSERT INTO flm_users (firstname, lastname, username, password, date_created) VALUES('$firstname', '$lastname', '$username', md5('$password'), NOW())";

			$query_result = mysqli_query($conn, $query);

			if($query_result){

				echo "<div class='alert alert-success' style='margin-top: 10px;'> User registered. You can now <a href= 'login.php' class= 'btn btn-sm btn-success'> sign in </a></div>";
			}else{
				echo "Could not registered user: ".mysqli_error($conn);
			}

		}
		else{
			foreach($errors as $error){
			echo "<div class='alert alert-danger'>{$error}</div><br>";
	}
		}

		
	}
	

//Login
	if (isset($_POST['login'])){
		$errors = array();
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		if (empty($username)) {
			$errors[] = "You did not enter username";
		}

		if (empty($password)) {
			$errors[] = "You did not enter password";
		}

		if (empty($errors)) {
			//check the values in database..
			$username = mysqli_real_escape_string($conn, trim($username));
			$password = mysqli_real_escape_string($conn, trim($password));


			$query = "SELECT id, firstname, lastname, username, date_created FROM `flm_users` WHERE `username`='$username' AND `password`= md5('$password') LIMIT 1";



			$query_result= mysqli_query($conn, $query);

			//print_r($query_result);

			if ($query_result) {
				//continue
				if (mysqli_num_rows($query_result) ==1) {
					//log in the user
					session_start();
					$_SESSION = mysqli_fetch_array($query_result, MYSQLI_ASSOC);


					//redirect the user
						header('location: user.php');


				}else{
					echo "<div class='alert alert-danger' style='margin-top:10px;'>incorrect username or password</div>";
				}
			}else{
				echo "There was an error".mysqli_error($conn);
			}



		}else{
			//there are errors..
			echo "<div style='margin-top:10px;'></div>";
			foreach ($errors as $error) {
				echo "<div class='alert alert-warning'>{$error}</div>";
			}
		}
	}

//Udate Profile Names
 if (isset($_POST['update_names'])) {

 	$errors= array();
 	$firstname = trim($_POST['firstname']);
 	$lastname = trim($_POST['lastname']);
 	$username = $_POST['username'];
 	if (empty($firstname)) {
 		$errors[] ="firstname cannot be empty!";
 	}

 if (empty($lastname)) {
 		$errors[] ="lastname cannot be empty!";
 	}
 if (empty($errors)) {
 	//no error

 	$query = "UPDATE flm_users SET firstname='$firstname', lastname='$lastname' WHERE username='$username' LIMIT 1";

 	$query_result = mysqli_query($conn, $query);
 	if ($query_result) {
 		$select_query = "SELECT * FROM flm_users WHERE username='$username'";
 		$select_query_result = mysqli_query($conn, $select_query);

 		if($select_query_result){
 			$_SESSION = [];
 			$_SESSION = mysqli_fetch_array($select_query_result, MYSQLI_ASSOC);
 		

 		echo "<div class='alert alert-success'>
 		Your profile names have been updated! You may need to reload to effect changes
 		</div>";
		echo "<script>
		window.location.href='profile.php';
		</script>";
			}else{
				echo "could not select:".mysqli_error($conn);
			}

 	}else{
 		//error..
 		echo "There was an error updating your names:".mysqli_error($conn);
 	}
 }else{
 	//there are errors..
 	foreach ($errors as $error) {
 		echo "<div class='alert alert-danger'>{$error}</div>";
 	}
 }
 }

 //update username
 if (isset($_POST['update_username'])) {
 	$errors = array();

 	$old_username = trim($_POST['old_username']);
 	$new_username = trim($_POST['new_username']);
 	$password = trim($_POST['password']);

 	if (empty($old_username)) {
 		//
 		$errors[] = "please enter your old username";
 	}

 	if (empty($new_username)) {
 		$errors[] = "please enter your new username";
 	}
 	if (empty($password)) {
 		$errors[] = "please enter your password";
 	}

 	if (empty($errors)) {
 		//update query..
 		$query = "UPDATE flm_users SET username='$new_username' WHERE username='$old_username' AND password=md5('$password')";
 		$result = mysql_query($conn, $query);
 		if ($result) {
 			echo "<strong>Your username was updated successfully!</strong>";
 		}else{
 			echo "Sorry, we could not update your username: ".mysqli_error($conn);
 		}
 	}else{
 		foreach ($errors as $error) {
 			echo "<strong style='color: red;'>{$error}</strong><br>";
 		}
 	}
 }

//Create post 
if(isset($_POST['create_post'])){

	$errors = array();

	$post_title = trim($_POST['post_title']);
	$post_body = trim($_POST['post_body']);
	$author_id = $_SESSION['id'];

	$post_status = (int)$_POST['post_status'];


if(empty($post_title)){
	$errors[] = "Enter post title";
}

if(empty($post_body)){
	$errors[] = "Enter post body";
}


if(empty($errors)){
	//there are no errors..
	$query = "INSERT INTO posts(`author_id`, `post_title`, `post_body`, `created_date`, `status`) VALUES($author_id, '$post_title', '$post_body', NOW(), $post_status)";
	$result = mysqli_query($conn, $query);
	if($result){
		//qeuery ran ..
		echo "<div class='alert alert-success'>
					<i class='glyphicon glyphicon-ok'></i>
					Post created successfully!
		</div>";
	}else{
		//error 
		echo "There was an error creating your post: ".mysqli_error($conn);
	}

	
}else{
	//there are errors 
	foreach($errors as $error){
		echo "<div class='alert alert-warning'>{$error}</div>";
	}
}



}
