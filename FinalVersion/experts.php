<?php
	session_start();	
	$role = $_SESSION["role"];
	$db = mysqli_connect('localhost', 'root', '', 'kmportal');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Experts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Experts</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="css/form.css" >
	<link rel="stylesheet" href="css/w3.css">
	<style>
	.w3-bar .w3-button {
	padding: 16px;
	}
	body, html {
		height: 100%;
		line-height: 1.8;
		font-family: "Raleway", sans-serif
	}
	</style>
</head>

<body style="background-image: url('Images/feedback.jpg');">
	<div class="w3-top">
	<div class="w3-bar w3-white w3-card" id="myNavbar">
		<a href="#home" class="w3-bar-item w3-button w3-wide"><img class="w3-image w3-round-large" src="Images/logo.jpeg" alt="LOGO" width="100" height="80"></a>
		<!-- Right-sided navbar links -->
		<div class="w3-right w3-hide-small">
			<a href="experts.php" class="w3-bar-item w3-button" id="experts"><i class="fa fa-edit"></i> EXPERTS</a>
	  		<a href="landing.php#about" class="w3-bar-item w3-button"><i class="fa fa-info-circle"></i> ABOUT</a>
			<a href="landing.php#iot" class="w3-bar-item w3-button"><i class="fa fa-cogs"></i> IoT</a>
			<a href="landing.php#products" class="w3-bar-item w3-button"><i class="fa fa-th"></i> PRODUCTS</a>
	  		<a href="landing.php#dept" class="w3-bar-item w3-button"><i class="fa fa-building"></i> DEPARTMENTS</a>
	  		<a href="landing.php#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
	  		<a href="landing.php#faq" class="w3-bar-item w3-button"><i class="fa fa-comment"></i> FAQs</a>
	  		<a href="landing.php#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
	  		<a href="login.html" class="w3-bar-item w3-button" id="log"><i class="fa fa-key"></i> LOG IN</a> 
			
		</div>
		<!-- Hide right-floated links on small screens and replace them with a menu icon -->

		<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
			<i class="fa fa-bars"></i>
		</a>
	</div>
	</div>

	<br><br>

	 <div class="container" id='formnew'> 
			<div class="row " style="margin-top: 50px">
				<div class="col-md-6 col-md-offset-3 form-container">
					<h2>Feedback</h2> 
					<p> Please provide your feedback below: </p>
					<form role="form" method="post" action="formresponses.php">
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>How do you rate your overall experience?</label>
								<select name="experience">
									<option value="bad">Bad</option>
									<option value="average">Average</option>
									<option value="good">Good</option>
									<option value="excellent" selected="selected">Excellent</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 form-group">
								<label for="comments"> Comments:</label>
								<textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 form-group">
								<button type="submit" class="btn btn-lg btn-warning btn-block" id='posting'>Post</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<br><br><br>
	<div id="responses">
		<?php
			
			$query = "SELECT * from feedback";
			$results = mysqli_query($db, $query);
			while($row = $results->fetch_assoc())
			{	
				$name = $row['expert_name'];
				$experience = $row['experience'];
				$comments = $row['comments'];
				$comments = trim(preg_replace('/\s\s+/', ' ', $comments));
				// $comments = str_replace("\n", " ", $comments);
				
				echo "<script type='text/javascript'>
					var name = '<b>Name: </b>".$name."';
					var experience = '<b>Experience: </b>".$experience."';
					var comments = '<b>Comments: </b>".$comments."';
					
					var x = document.createElement('p');
					x.innerHTML = name;

					var y = document.createElement('p');
					y.innerHTML = experience;

					var z = document.createElement('p');
					z.innerHTML = comments;

					var div = document.createElement('div');
					div.appendChild(x);
					div.appendChild(y);
					div.appendChild(z);
					
					div.style.borderRadius = '3px';
					div.style.color = 'black';
					div.style.background = 'linear-gradient(to right, #bdc3c7, #2c3e50)';
					div.style.marginLeft = '20px';
					div.style.marginRight = '20px';
					div.style.overflow = 'hidden';
					var divold = document.getElementById('responses');
					divold.appendChild(div);
				</script>";
			}
		?>
		
	</div>
</body>
<?php
	if ($role == "expert")
	{
		echo "<script>var formstyle = document.getElementById('formnew');
		formstyle.style.display = 'block';
		var formresponses = document.getElementById('responses');
		formresponses.style.display = 'none';
		var b = document.getElementById('log');
		b.innerHTML = 'LOGOUT';
		b.href = 'logout.php';
		</script>";

	}

	else if($role == "admin")
	{
		echo "<script>var formstyle = document.getElementById('formnew');
		formstyle.style.display = 'none';
		var formresponses = document.getElementById('responses');
		formresponses.style.display = 'block';
		var b = document.getElementById('log');
		b.innerHTML = 'LOGOUT';
		b.href = 'logout.php';</script>";
	}
?>
</html>
