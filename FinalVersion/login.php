<?php
session_start();

// initializing variables
$username = "";
$errors = array(); 
$role = "";
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'kmportal');


if (isset($_POST['login_user'])) 
{
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}



	if (count($errors) == 0) {

		$userisexpert = "SELECT role FROM users where username='$username'";
		$results = mysqli_query($db, $userisexpert);
		while($row = $results->fetch_assoc())
		{
			if ($row["role"] == "admin")
				$role = "admin";
			else if ($row["role"] == "enduser")
				$role = "enduser";
			else
				$role = "expert";
		}
		if ($role == "enduser")
		{
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				$_SESSION['role'] = $role;
				header('location: landing.php');
			}
			else {
				echo "<script type='text/javascript'>alert('Wrong Username/Password')</script>";
				header('location: login.html'); 	
			}
		}

		else
		{
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				$_SESSION['role'] = $role;
				header('location: landing.php');
			}
			else {
				echo "<script type='text/javascript'>alert('Wrong Username/Password')</script>";
				header('location: login.html');   
			}
		}
	}
}

?>