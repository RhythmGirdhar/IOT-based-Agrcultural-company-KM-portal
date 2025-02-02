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
<title>Cowler</title>
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
    <a href="landing.php#home" class="w3-bar-item w3-button w3-wide"><img class="w3-image w3-round-large" src="Images/logo.jpeg" alt="LOGO" width="100" height="80"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="experts.html" class="w3-bar-item w3-button" id="experts"><i class="fa fa-edit"></i> EXPERTS</a>
      <a href="landing.php#about" class="w3-bar-item w3-button"><i class="fa fa-info-circle"></i> ABOUT</a>
      <a href="landing.php#iot" class="w3-bar-item w3-button"><i class="fa fa-cogs"></i> IoT</a>
      <a href="landing.php#products" class="w3-bar-item w3-button"><i class="fa fa-th"></i> PRODUCTS</a>
      <a href="landing.php#dept" class="w3-bar-item w3-button"><i class="fa fa-building"></i> DEPARTMEMTS</a>
      <a href="landing.php#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
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

  <a href="landing.php#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>

  <a href="landing.php#iot" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-cogs"></i>IoT</a>

  <a href="landing.php#products" onclick="w3_close()" class="w3-bar-item w3-button">PRODUCTS</a>

  <a href="landing.php#dept" onclick="w3_close()" class="w3-bar-item w3-button">DEPARTMENTS</a>

  <a href="landing.php#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>

  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>

</nav>











<!-- Product 2 -->

<div class="bgimg-1 w3-display-container w3-grayscale-min" id="p2">

  <div div class="w3-container w3-white" style="padding:70px 16px">

    <!--<center><img  src="Images/img3.png"><br><br></center>-->
    <center><img src="Images/img3.png" style="width:20%"></center>

    <div class="w3-container w3-light-grey" >

      <p style="text-align:center;margin-right:100px;margin-left:150px;padding-right:20px">Smart non-invasive neck collars that monitor temperature, activity & behavior of each individual cow. Our actionable recommendations help significantly improve income on dairy farms.</p>

    </div><br>

    <h2 style="text-align:center">Description</h2>

    <hr style="margin-left:490px;margin-right:480px;border-width: 2px;">

    <p style="text-align:center;margin-right:100px;margin-left:150px;padding-right:60px">Our smart neck collars monitor dairy cows 24 hours a day, 365 days a year. Installation is seamless and only takes a minute. Designed with care to ensure no disruption any farm operations, our rugged, waterproof & non-invasive monitoring system is comfortable for the cow to wear & requires little to no maintenance.</p><br>

    <div>

      <!--<img src="Images/img1.png" width="300" height="200" style="margin-left:520px;" >-->
      <center><img src="Images/img1.png" style="width:20%" onClick="onClick(this)"></center>

    </div>

  </div>





<div>

    <h2 style="text-align:center">How It Works</h2>

    <hr style="margin-left:490px;margin-right:480px;border-width: 2px;">

    <h6 style="margin-top:80px;margin-right:100px;margin-left:240px;font-weight:bold;">INSTALL THE COW ROUTER</h6>

    <p style="margin-right:500px;margin-left:100px;padding-right:150px">Our easy to install Cow router is completely solar powered and can be installed by anyone in just 20 minutes. It connects with all Cowlars within a 2 mile range and uses cellular connectivity to pass this information to our servers. We make sense of the data using machine learning & dairy science based on each cows individual breed. No maintenance is required. Say good bye to wires, technicians and stress. You can monitor your cows anytime, anywhere.</p>





  </div>

  <div>

    <img src="Images/pic1.png" width="300" height="200" style="margin-left:800px;margin-top:-300px;" onClick="onClick(this)">

    </div>



    <div>

    <h6 style="margin-top:80px;margin-right:100px;margin-left:260px;font-weight:bold;">STRAP THE COWLARS</h6>

    <p style="margin-right:500px;margin-left:100px;padding-right:150px">Tie the cowlar on the cow’s neck. The Cowlar simply consists of a strap designed to comfortably fit around your cow and a small magic box that measure temperature, activity and cow behaviour, i.e. whether it’s eating, sleeping, ruminating or showing lameness. This data is crucial to monitor your cow in a bid to prevent diseases, detect heat cycles and increase milk yield.</p>





  </div>

  <div>

    <img src="Images/pic2.png" width="300" height="200" style="margin-left:800px;margin-top:-280px;" onClick="onClick(this)">

    </div>



    <div>

    <h6 style="margin-top:80px;margin-right:100px;margin-left:250px;font-weight:bold;">MONITOR YOUR COWS</h6>

    <p style="margin-right:500px;margin-left:100px;padding-right:150px">The installation process is extremely easy and takes just a few minutes. As soon as that is done, Cowlars will start transmitting live data to your interactive dashboard. The dashboard shows your cow’s temperature & activity readings over time through immersing graphs along with easy to understand insights and actionable recommendations that can be converted into tasks, for your ease.</p>





  </div>

  <div>

    <img src="Images/pic3.png" width="300" height="200" style="margin-left:800px;margin-top:-270px;" onClick="onClick(this)">

  </div><br>



  <div>

    <h6 style="margin-top:80px;margin-right:200px;margin-left:150px;font-weight:bold;">GET ALERTS & ACTINABLE RECOMMENDATIONS</h6>

    <p style="margin-right:500px;margin-left:100px;padding-right:150px">The data sent by your cows undergoes our complex, machine learning based algorithms where data gets combined with expert knowledge base and years of experience to bring you the best actionable recommendations. You’re prompted every time there is a health alert or your cow shows any disease symptoms or enters into heat or pregnancy. A healthy and happy cow significantly increases your dairy profit</p>





  </div>

  <div>

    <img src="Images/pic4.png" width="300" height="250" style="margin-left:800px;margin-top:-270px;" onClick="onClick(this)">

  </div><br>





  <div>

      <h2 style="text-align:center">Why Cowlar</h2>

      <hr style="margin-left:500px;margin-right:500px;border-width: 2px;">

    </div>

    <div style="background-color: lightgrey;width: 300px;border: 2px;padding: 25px;margin: 25px;margin-left:150px;"><b>Improved reproduction rates</b><br>

      <p>With Cowlar, you never miss a heat cycle again ! This translates into more milking days from each cow on your farm as well as more calfs born from each cow over its lifetime.</p>

    </div>

    <div style="background-color: lightgrey;width: 300px;border: 2px;padding: 25px;margin: 25px;margin-left:530px;margin-top:-290px;"><b>Early disease detection</b><br>

      <p>While it is extremely hard for you or your labour to detect diseases at an early stage and monitor your cows 24/7 for disease symptoms, Cowlar easily does that using our next-gen sensors that constantly monitor temperature, activity & cow behaviour.</p>

    </div>

    <div style="background-color: lightgrey;width: 300px;border: 2px;padding: 25px;margin: 25px;margin-left:900px;margin-top:-350px;"><b>Feed optimization</b><br>

      <p>Cowlar monitor your cow’s important metrics such as temperature, activity & behaviour including rumination. Based on this, we’re able to let dairy farmers compare their cow’s performance in comparison with the feed intake.</p>

    </div>


  </div><br>

  </div>

</div><br>
<div>
<h3 style="text-align:center;"> Buy this for</h3>
<hr style="margin-left:480px;margin-right:480px;border-width: 2px;">
<h4 style="text-align:center;margin-bottom:100px;" >8000/-</h4>
</div>




<!-- Modal for full size images on click-->

<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">

  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>

  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">

    <img id="img01" class="w3-image">

    <p id="caption" class="w3-opacity w3-large"></p>

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
    <form action="" target="_blank">
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






<!-- Footer -->

<footer class="w3-center w3-black w3-padding-64">

  <a href="#" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>

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
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    // var captionText = document.getElementById("caption");
    // captionText.innerHTML = element.alt;
  }
  function w3_open() {
      if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
      } else {
      mySidebar.style.display = 'block';
      }
  }
  // Close the sidebar with the close button
  function w3_close() {
      mySidebar.style.display = "none";
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
      window.location.href = 'login.html';
      </script>";
    }
  }
?>


</body>
</html>
