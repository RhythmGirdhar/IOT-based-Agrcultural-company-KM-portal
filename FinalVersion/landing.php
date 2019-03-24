<?php
	session_start();
	if (isset($_SESSION["role"]))
	{
		$role = $_SESSION["role"];
		$username = $_SESSION["username"];
	}
	else
		$role = "role";
?>

<!DOCTYPE html>
<html>
<title>IoT in Agriculture</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}


body, html {
  height: 100%;
  line-height: 1.8;

}

.grey-background{
  background-color: #76987B; 

}

.pr_column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.pr_row::after {
  content: "";
  clear: both;
  display: table;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("Images/landing.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}


.accordion {
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}
.accordion:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  color: black;
  float: right;
  margin-left: 5px;
}
.active:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}
/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .accordion:hover {
  background-color: #ccc;
  color:black;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}


</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
	<a href="#home" class="w3-bar-item w3-button w3-wide"><img class="w3-image w3-round-large" src="Images/logo.jpeg" alt="LOGO" width="100" height="80"></a>
	<!-- Right-sided navbar links -->
	<div class="w3-right w3-hide-small">
	  <a href="experts.php" class="w3-bar-item w3-button" id="experts"><i class="fa fa-edit"></i> EXPERTS</a>
	  <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-info-circle"></i> ABOUT</a>
	  <a href="#iot" class="w3-bar-item w3-button"><i class="fa fa-cogs"></i> IoT</a>
	  <a href="#products" class="w3-bar-item w3-button"><i class="fa fa-th"></i> PRODUCTS</a>
	  <a href="#dept" class="w3-bar-item w3-button"><i class="fa fa-building"></i> DEPARTMENTS</a>
	  <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
	  <a href="#faq" class="w3-bar-item w3-button"><i class="fa fa-comment"></i> FAQs</a>
	  <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
	  <a href="login.html" class="w3-bar-item w3-button" id="log"><i class="fa fa-key"></i> LOG IN</a> 
	</div>
	<!-- Hide right-floated links on small screens and replace them with a menu icon -->

	<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
	  <i class="fa fa-bars"></i>
	</a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="experts.php" class="w3-bar-item w3-button" id="experts"><i class="fa fa-edit"></i> EXPERTS</a>
  <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-info-circle"></i> ABOUT</a>
  <a href="#iot" class="w3-bar-item w3-button"><i class="fa fa-cogs"></i> IoT</a>
  <a href="#products" class="w3-bar-item w3-button"><i class="fa fa-th"></i> PRODUCTS</a>
  <a href="#dept" class="w3-bar-item w3-button"><i class="fa fa-building"></i> DEPARTMENTS</a>
  <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
  <a href="#faq" class="w3-bar-item w3-button"><i class="fa fa-comment"></i> FAQs</a>
  <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
  <a href="login.html" class="w3-bar-item w3-button" id="log"><i class="fa fa-key"></i> LOG IN</a> 
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
	<span class="w3-jumbo w3-hide-small grey-background">&nbsp;Start something that matters&nbsp;</span><br>
	<span class="w3-xxlarge w3-hide-large w3-hide-medium grey-background">&nbsp;Start something that matters&nbsp;</span><br>
	<p><b><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></b></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
	<i class="fa fa-facebook-official w3-hover-opacity"></i>
	<i class="fa fa-instagram w3-hover-opacity"></i>
	<i class="fa fa-snapchat w3-hover-opacity"></i>
	<i class="fa fa-pinterest-p w3-hover-opacity"></i>
	<i class="fa fa-twitter w3-hover-opacity"></i>
	<i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:100px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
	<p style="text-align:center;margin-left: 70px;margin-right: 70px;">We at Smart Farmer believe in providing cutting edge technological solutions to our customer's farming needs. Maintaining the accuracy of our equipments is our top priority and so is customer satisfaction. We provide a wide range of products ranging from basic equipment for low scale produce to high end products suitable for large scale produce. Maintaining high quality and reasonable pricing us helps us stand apart from the rest of the IOT-based manufacturers.<br>Since the inception of the organization in 2001, we have grown rapidly by focusing mainly on innovation and accuracy. We have over 300 happy customers spanning across five states. We also organise frequent camps in rural areas to educate farmers about sustainable farming methods. We also fund research project in the field of IOT. That's our way of giving back to the society.</p>
  <p class="w3-center w3-large" style="font-weight: bold;">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
	<div class="w3-quarter">
	  <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
	  <p class="w3-large">Responsive</p>
	  <p>We respond to customer requests and queries instantly, keeping the time required to process these a bare minimum.</p>
	</div>
	<div class="w3-quarter">
	  <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
	  <p class="w3-large">Innovation</p>
	  <p>We try coming up with new and feasible solutions, thanks to our robust Research and Development team.</p>
	</div>
	<div class="w3-quarter">
	  <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
	  <p class="w3-large">Community Welfare</p>
	  <p>Our workshops and camps in rural areas have touched the lives of over thousands of people </p>
	</div>
	<div class="w3-quarter">
	  <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
	  <p class="w3-large">Support</p>
	  <p>Servicing and repair done efficiently at minimal costs or free depending on the usage scenario</p>
	</div>
  </div>
</div>

<!-- Promo Section - "We believe in our products" -->
<div class="w3-container w3-light-grey" style="padding:100px 80px">
  <div class="w3-row-padding">
  <div class="w3-col m6">
	<h3>We believe in our products.</h3>
	<p>We have designed our products to help the farmers embrace technology and see substantial growth.<br> We bring automation right at your doors.<br> Smart farming at its best. Give us a try.<br></p>
	<p><a href="#products" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Products</a></p>
  </div>
  <div class="w3-col m6">
	<img class="w3-image w3-round-large" src="Images/about.jpg" alt="IoT" width="700" height="394">
  </div>
  </div>
</div>


<!-- IoT Section -->
<div class="w3-container " style="padding:100px 16px;" id="iot">
  <h3 style="margin-left: 70px;">IoT In Agriculture</h3>
	<div class="row">
	<div class="column">
	<p style="margin-left: 70px;margin-right: 600px;">IoT has the capability to influence the world we live in; advanced industries, connected vehicles, and smarter cities are all components of the IoT equation. However, applying technology like IoT to the agriculture industry could have the greatest impact.<br>
		<br>So, what is smart farming?<br>Smart farming is a capital-intensive and hi-tech system of growing food cleanly and sustainable for the masses. It is the application of modern ICT (Information and Communication Technologies) into agriculture.<br>Five ways IOT can improve agriculture:<ul style="margin-left: 70px;margin-right: 600px;"><li>Data, tons of data, collected by smart agriculture sensors</li><li>Better control over the internal processes and, as a result, lower production risks</li><li>Cost management and waste reduction thanks to the increased control over the production</li><li>Increased business efficiency through process automation</li><li>Enhanced product quality and volumes</li></ul>
		</p>
	</div>
	<div class="w3-col m6">
	  <img class="w3-image w3-round-large" src="Images/iot_in_agri.jpg" style="margin-left: 830px;margin-top: -500px;" alt="IoT" width="500" height="194">
	</div>    
	</div>
</div>


<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-black w3-padding-64">
  <div class="w3-quarter">
	<span class="w3-xxlarge">14+</span>
	<br>Partners
  </div>
  <div class="w3-quarter">
	<span class="w3-xxlarge">55+</span>
	<br>Projects Done
  </div>
  <div class="w3-quarter">
	<span class="w3-xxlarge">300+</span>
	<br>Happy Clients
  </div>
  <div class="w3-quarter">
	<span class="w3-xxlarge">150+</span>
	<br>Meetings
  </div>
</div>

<!-- Products Section -->
<div class="w3-container w3-light-grey" style="padding:100px 16px" id="products">
  <h3 class="w3-center">OUR PRODUCTS</h3>
  <p class="w3-center w3-large">What we've done for people</p>

  <div class="pr_row" style="margin-top:64px">
	
	<div class="pr_column">
	  <a href="p1.php" ><img src="Images/p1_farmapp.jpg" style="height:310px; width:100%" class="w3-hover-opacity" alt="Farm App"></a>
	  <div><center><b>Farm App</b></center></div>
	</div> 

	<div class="pr_column">
	  <a href="p2.php" ><img src="Images/p2_cowlar.jpg" style="height:310px; width:100%" class="w3-hover-opacity" alt="Cowlar"></a>
	  <div><center><b>Cowlar</b></center></div>
	</div> 

	<div class="pr_column">
	  <a href="p3.php" ><img src="Images/p3_pycno.jpeg" style="height:310px; width:100%" class="w3-hover-opacity" alt="Pycno"></a>
	  <div><center><b>Pycno</b></center></div>
	</div>

  </div>

</div>



<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
	<img id="img01" class="w3-image">
	<p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Department Section -->
<div class="w3-container" style="padding:128px 16px; " id="dept">
  <h3 class="w3-center">DEPARTMENTS</h3>
  <p class="w3-center w3-large">What we are made of </p>


<div class="w3-row" style="margin-top:64px">
  <div class="w3-col l3 m3">
	<a href="humanresources.php"><img src="Images/hr.png" style="width:50%;margin-left: 25%" onclick="onClick(this)" class="w3-hover-opacity" alt="Human Resources"></a>
	<div class="caption"><center><h2>Human Resources</h2></center></div>
  </div>
  <div class="w3-col l3 m3">
	<a href="sales.php"><img src="Images/sales.png" style="width:50%;margin-left: 25%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sales"></a>
	<div class="caption"><center><h2>Sales</h2></center></div>
  </div>
  <div class="w3-col l3 m3">
	<a href="technical.php"><img src="Images/tech.png" style="width:50%;margin-left: 25%" onclick="onClick(this)" class="w3-hover-opacity" alt="Technical"></a>
	<div class="caption"><center><h2>Technical</h2></center></div>
  </div>
  <div class="w3-col l3 m3">
	<a href="design.php"><img src="Images/design.png" style="width:50%;margin-left: 25%" onclick="onClick(this)" class="w3-hover-opacity" alt="Design"></a>
	 <div class="caption"><center><h2>Design</h2></center></div>

  </div>
</div>

<div class="w3-row" style="margin-top:64px">
  <div class="w3-col l3 m3">
	<a href="marketing.php"<img src="Images/marketing.png" style="width:50%;margin-left: 25%" onclick="onClick(this)" class="w3-hover-opacity" alt="Marketing"></a>
	 <div class="caption"><center><h2>Marketing</h2></center></div>
  </div>
  <div class="w3-col l3 m3">
	<a href="customer.php"><img src="Images/support.png" style="width:50%;margin-left: 25%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sales"></a>
	 <div class="caption"><center><h2>Customer Support</h2></center></div>
  </div>
  <div class="w3-col l3 m3">
	<a href="security.php"><img src="Images/security.png" style="width:50%;margin-left: 25%" onclick="onClick(this)" class="w3-hover-opacity" alt="Security"></a>
	 <div class="caption"><center><h2>Security</h2></center></div>
  </div>
  <div class="w3-col l3 m3">
	<a href="legal.php"><img src="Images/legal.png" style="width:50%;margin-left: 25%" onclick="onClick(this)" class="w3-hover-opacity" alt="Legal"></a>
	 <div class="caption"><center><h2>Legal</h2></center></div>
  </div>
</div>
</div>

<!-- Team Section -->
<div class="w3-container " style="padding:100px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who run this company</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
  <div class="w3-col l3 m6 w3-margin-bottom">
	<div class="w3-card">
	<!-- <img src="/w3images/team2.jpg" alt="Ananth Koppar" style="width:100%"> -->
	<div class="w3-container">
	  <h3>Dr. Ananth Koppar</h3>
	  <p class="w3-opacity">KM Experts</p>
	  
	  <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
	</div>
	</div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
	<div class="w3-card">
	<!-- <img src="/w3images/team1.jpg" alt="Mamatha Shetty" style="width:100%"> -->
	<div class="w3-container">
	  <h3>Dr. Mamtha Shetty</h3>
	  <p class="w3-opacity">KM Experts</p>

	  <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
	</div>
	</div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
	<div class="w3-card">
	<!-- <img src="/w3images/team3.jpg" alt="Poorva Tiwari" style="width:100%"> -->
	<div class="w3-container">
	  <h3>Poorva Tiwari</h3>
	  <p class="w3-opacity">Web Designer</p>
	  
	  <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
	</div>
	</div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
	<div class="w3-card">
	<!-- <img src="/w3images/team4.jpg" alt="Pragna Prasanna" style="width:100%"> -->
	<div class="w3-container">
	  <h3>Pragna Prasanna</h3>
	  <p class="w3-opacity">Product Designer</p>
	  
	  <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
	</div>
	</div>
  </div>
  </div>

  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
  <div class="w3-col l3 m6 w3-margin-bottom">
	<div class="w3-card">
	<!-- <img src="/w3images/team2.jpg" alt="Priya Nayak" style="width:100%">
	 --><div class="w3-container">
	  <h3>Priya Nayak</h3>
	  <p class="w3-opacity">Backend Developer</p>
	  
	  <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
	</div>
	</div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
	<div class="w3-card">
	<!-- <img src="/w3images/team1.jpg" alt="Preeti Agrawal" style="width:100%">
	 --><div class="w3-container">
	  <h3>Preeti Agrawal</h3>
	  <p class="w3-opacity">Product Designer</p>
	  
	  <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
	</div>
	</div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
	<div class="w3-card">
	<!-- <img src="/w3images/team3.jpg" alt="Rachana Aithal" style="width:100%">
	 --><div class="w3-container">
	  <h3>Rachana Aithal</h3>
	  <p class="w3-opacity">Web Designer</p>
	  
	  <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
	</div>
	</div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
	<div class="w3-card">
	<!-- <img src="/w3images/team4.jpg" alt="Rhythm Girdhar" style="width:100%">
	 --><div class="w3-container">
	  <h3>Rhythm Girdhar</h3>
	  <p class="w3-opacity">Web Designer</p>
	  
	  <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
	</div>
	</div>
  </div>
  </div>
</div>


<!--FAQs-->

  <div class="w3-container w3-light-grey" style="padding:100px 50px" id="faq">
	  <center><h3 >Frequently Asked Questions </h3></center><br>

	  <button class="accordion">What risks and challenges should be considered in the Internet of Everything?</button>
	<div class="panel">
		<p>Some important considerations in the Internet of Everything include privacy, security, energy consumption and network congestion. The given products are less affected by these constraints. </p>
	</div>

	<button class="accordion">How can I know more about the products? </button>
	<div class="panel">
		<p>You can know about various products right from our website. Simply click on the 'View our products' to view them in detail and get to know more about them. </p>
	</div>

	<button class="accordion">Do you offer any discount?</button>
	<div class="panel">
		<p>Our pricing is based on a long term relationship aimed at giving maximum benefits to our customers.</p>
	</div>
	<button class="accordion">How do I contact you? </button>
	<div class="panel">
		<p>You can connect to us on our 24 hour service using the e-mail or the given customer-care number present on the website. </p>
	</div>

	<button class="accordion">Do we need internet connectivity?</button>
	<div class="panel">
		<p>Yes. Our products- FarmApp, Pycno and Cowlar require elastic internet connectivity for their working. </p>
	</div>


</div>
<!--End of FAQs-->



<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:100px 50px 0px 50px; " id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
	<p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Bangalore, India</p>
	<p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +80 22446688</p>
	<p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@smartfarmer.com</p>
	<br>
	<form action="contact.php" target="_blank" method="POST">
	  <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
	  <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
	  <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
	  <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
	  <p>
		<button class="w3-button w3-black" type="submit">
		  <i class="fa fa-paper-plane"></i> SEND MESSAGE
		</button>
	  </p>
	</form>
	
  </div>
</div>

  <!-- Image of location/map -->
  <div class="w3-container w3-light-grey" style="padding:0px 50px 30px 50px;">
	<img src="Images/map.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
  </div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
	<i class="fa fa-facebook-official w3-hover-opacity"></i>
	<i class="fa fa-instagram w3-hover-opacity"></i>
	<i class="fa fa-snapchat w3-hover-opacity"></i>
	<i class="fa fa-pinterest-p w3-hover-opacity"></i>
	<i class="fa fa-twitter w3-hover-opacity"></i>
	<i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>

</footer>
 
<script>



var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
	this.classList.toggle("active");
	var panel = this.nextElementSibling;
	if (panel.style.maxHeight){
	  panel.style.maxHeight = null;
	} else {
	  panel.style.maxHeight = panel.scrollHeight + "px";
	} 
  });
}
</script>

<?php
	
	if ($role == "admin" || $role == "expert")
	{
		echo "<script type='text/javascript'>
			var a = document.getElementById('experts');
			a.style.visibility = 'visible';
			var b = document.getElementById('log');
			b.innerHTML = 'LOGOUT';
			b.href = 'logout.php';
			</script>";
	} 
	else
	{

		if ($role == "enduser") {

		echo "<script type='text/javascript'>
			var a = document.getElementById('experts');
			a.style.visibility = 'hidden';
			var b = document.getElementById('log');
			b.innerHTML = 'LOGOUT';
			b.href = 'logout.php';
			</script>";
		}

		else {
		echo "<script type='text/javascript'>
			var a = document.getElementById('experts');
			a.style.visibility = 'hidden';
			</script>";
		}
	}
?>

</body>

