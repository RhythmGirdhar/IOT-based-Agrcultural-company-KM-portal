<?php
	$db = mysqli_connect('localhost', 'root', '', 'kmportal');
	
	$name = mysqli_real_escape_string($db, $_POST['Name']);
	$email = mysqli_real_escape_string($db, $_POST['Email']);
	$subject = mysqli_real_escape_string($db, $_POST['Subject']);
	$message =	mysqli_real_escape_string($db, $_POST['Message']);
	$query = "INSERT INTO contact (name, email, subject, message) 
  			  VALUES('$name', '$email', '$subject', '$message')";

mysqli_query($db, $query);		
header('location: landing.php#home');
?>
