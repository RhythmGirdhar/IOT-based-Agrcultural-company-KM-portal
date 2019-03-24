
<!DOCTYPE html>
<html>
<title>IoT in Agriculture</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

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
.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}
.w3-col :hover .image {
  opacity: 0.3;
}
.w3-col :hover .middle {
  opacity: 1;
}
#details
{
	text-align: justify;
	margin:8%;
}
#button
{
	margin-top: -20%;
	margin-left: 94%;
	padding: 0.5% 1.5% 0.5% 1.5%;
	border: 1px solid black;
	border-radius: 12px;
	font-size: 120%;
	color: white;
	background-color: black;
}
#submit
{
	padding: 0.5% 1.5% 0.5% 1.5%;
	border: 2px solid black;
	border-radius: 12px;
	font-size: 120%;
	color: white;
	background-color: black;	
}
.text
{
	border: 2px solid black;
	border-radius: 8px;
}
#ex1
{
	border: 2px solid black;
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
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#iot" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-cogs"></i>IoT</a>
  <a href="#products" onclick="w3_close()" class="w3-bar-item w3-button">PRODUCTS</a>
  <a href="#dept" onclick="w3_close()" class="w3-bar-item w3-button">DEPARTMENTS</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <a href="login.html" onclick="w3_close()" class="w3-bar-item w3-button">LOG IN</a>
</nav>

<!-- product life cycles and complete details about the products in technical-->
<!-- Individual FAQs section in each department -->

<!-- Main div containing the content -->
<div id="details">
	<center><h1> Sales </h1></center> <a href="#ex1" rel="modal:open"><input type="button" name="Edit" value="Edit" id="button"></a>
	<h2 id="parampara" class="headings">What Is the Importance of a Sales Department?</h2> 
	<p> A sales department is the direct link between a company’s product or service and its customers. However, a well-trained sales department does more than making sales. Your sales staff builds relationships with your customers. Further, a quality salesperson helps identify a customer’s unique needs and makes sure that those needs are met. Since salespeople have direct contact with your customers on an ongoing basis, they become privy to personal information that helps make sales interactions smoother and friendlier. A highly trained sales professional tailors sales pitches to the individual customer and learns the ins and outs of their needs.<br>
</p>
<br>
<h2 id="pratishtha" class="headings">What Are the Objectives of a Sales Department? </h2>
<p> A sales department has several objectives, aside from just making sales. Since your sales department is often the link between your customers and the product or service your company offers, there are other necessary functions a sales department must meet: <br>
<ul>
	<li><b>Converting sales:</b> Of course, a sales department’s main objective is to make sales. However, they must also do so efficiently and as inexpensively as possible. It is not enough to collect credit card information and process an order. A sales department is always concerned with improving its conversion rate. A conversion rate is the percentage of customers who complete a sale. So if your sales team speaks to 100 potential customers per day and 20 of those conversations result in a sale, then your team has a 20 percent conversion rate. A well-oiled sales department is always looking for ways to improve its conversion rate. A better conversion means the business spends less money converting each customer, resulting in higher profits.</li>
	<li><b>Customer retention:</b> Your sales team is responsible for retaining customers, a monumentally important task. It costs a business five- to-25 times more money to attract new customers than it does to keep existing customers. Research further shows that upping your customer retention rate by only 5 percent can result in increased profits of 25-to-95 percent for your business. It makes sense always to keep your customers happy. This is where your sales team comes in. As the direct point-of-contact for your business, your sales department is building valuable relationships with customers. A sales team that follows up with customers and makes sure they are happy with the product or service you are providing is crucial. Most customers who take their business elsewhere do so quietly, without informing anyone. So one objective of a sales staff is to make sure customers remain happy and continue to do business with your company.</li>
	<li><b>Business growth:</b> The sales department is one of the most critical sectors of business for growth. Through relationship-building and keeping customers happy, word-of-mouth recommendations increase. Plus, satisfied customers are usually willing to leave positive reviews for your company online. Reviews are critically important in doing business these days. Prospective clients want to see that you have made other customers happy, and are all too willing to go to your competitors if there is no evidence that you're doing so. This is why your sales team can help you grow your business. Through outstanding customer service, your customers become loyal and sing your praises to others, bringing in new business. What’s more, a quality sales staff will always be searching for new client leads, further growing your business.  </li>
</ul></p>
<br>
<h2 id="anushaasan" class="headings">The Different Roles of a Sales Department </h2>
<p> The responsibilities of a sales department are varied. Thus, a sales department is often split up into multiple roles, each with their unique functions:<br>
	<ul>
		<li><b>Sales Development Representative:</b> Also called business development representatives, a sales development representative is responsible for step one of the sales process: researching, identifying and contacting leads. This person is often a cold caller or the team member who makes the first contact with a prospective client. Once the customer lead has been identified as a “qualifying lead” (one likely to result in a sale), a sales development representative passes that lead to a higher-level sales representative.</li>
		<li><b>Account Executive:</b> The account executive is responsible for bringing in new business and making sales, filling the traditional salesperson role. This person must be a closer since the success of the deal ultimately falls on their shoulders. Account executives create presentations, run demonstrations, write proposals, identify any obstacles to the purchase process, negotiate terms with clients and finally, make the sale.</li>
		<li><b>Sales Specialist:</b> A sales specialist has in-depth knowledge of the product and the industry. This is the person you want handling complicated issues or difficult customer questions. A sales specialist is also adept at doing product demonstrations and client proposals. In a sales department, this specialist takes on any complex sales or advanced challenges that come up for the rest of the team.</li>
		<li><b>Customer Success Representative:</b> A customer success representative is responsible for following up and renewing sales with customers who have already made purchases. This role is crucial for customer retention and ensuring your business isn’t leaving money on the table. A customer success representative keeps your best customers happy and finds new ways to further the relationship, thus increasing your profits.</li>
		<li><b>Sales Manager:</b> The sales manager is the leader of the team, and responsible for making sure the team is meeting their responsibilities and hitting their goals. This person is charged with steering the ship as well as measuring and improving outcomes.</li>
	</ul>
</p>
<br>

<!-- Main div ends -->
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

 <div id="ex1" class="modal">
  <h3>Choose your heading</h3>
  	<select id = "addheading" class ="text"></select><br><br>
	<textarea id="addtext" class="text" rows="4" cols="50"></textarea><br><br>
	<input type="button" name="Submit" value="Submit" id="submit"><br><br>
   <a href="#" rel="modal:close"><span id="success"></span>Close</a>
</div>
<script type="text/javascript">
	var select = $("#addheading");
	$(".headings").each(function () {
		var option = document.createElement("option");
		console.log($(this).attr('id'));
		option.setAttribute("value",$(this).attr('id'));
		option.innerHTML = $(this).html();
		select.append(option);
	});
	$("#submit").on("click",function () {
		//alert("clicked");
		var text = $("#addtext").val();
		var selected = $("#addheading").children("option:selected").val();
		//alert(selected);
		console.log(selected);
		var paratext = $("#"+selected).next();
		paratext.html(paratext.html() + text);
		$("#addtext").val('');
		$("#success").html("Text Added Successfully! Please ");
		return false;
	});
</script>

</footer>
</body>
</html>