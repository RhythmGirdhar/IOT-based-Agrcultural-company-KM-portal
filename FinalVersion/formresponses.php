<?php

session_start();	

$username = $_SESSION["username"];

$db = mysqli_connect('localhost', 'root', '', 'kmportal');

$experience = mysqli_real_escape_string($db, $_POST['experience']);
$commented = mysqli_real_escape_string($db, $_POST['comments']);


$query = "INSERT INTO feedback (expert_name, experience, comments) 
  			  VALUES('$username', '$experience', '$commented')";

mysqli_query($db, $query);		
header('location: landing.php');
?>