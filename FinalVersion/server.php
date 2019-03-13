<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$name     = "";
$phone    = "";
$area     = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'kmportal');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $area = mysqli_real_escape_string($db, $_POST['area']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "Phone Number is required"); }
  if (empty($area)) { array_push($errors, "Area is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  
  if (count($errors) == 0) {
  	$password = md5($password_1);
  	$query = "INSERT INTO users (name, email, phonenum, area, username, password, role) 
  			  VALUES('$name', '$email', '$phone', '$area', '$username', '$password', 'enduser')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: landing.php');
  }
}


?>