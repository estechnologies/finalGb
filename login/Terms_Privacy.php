<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
	header('Location:index.php');
}


require 'connect.php';

	$database = new connect();

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>GoodsCAB Terms and Privacy policy </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/images/goodscab.ico" type="image/x-icon" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Custom CSS -->
   <link href="css/logistics.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<style>
.panel-default>.panel-heading {
    color:black;
    background-color: #F1C40F;
    border-color: #F1C40F;
}
.nav-tabs {

    border-bottom: 1px solid #f1c40f;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
    background-color: black;
    color:white;
    border: 1px solid transparent;
    border-bottom-color: transparent;
    cursor: default;
}
.nav-tabs>li>a{

color: black;
    font-size: 18px;
}

.nav-tabs>li>a:hover {

 background-color:black;
 color:white;
     border: 1px solid black;
}
  p,ul {
    text-align: justify;
    text-justify: inter-word;
}
</style>
</head>

<body style="font-size: 16px;">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  <img  id="logo"  src="images/goodscab_logo.png">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
		 <ul class="nav navbar-nav navbar-right">
    <li class="headermain" style=""><a href="main.php" style=" padding-top: 8px;" class="navbar-btn btn-default btn pull-right"><span class="glyphicon glyphicon-home"></span> Home</a></li>
     <li style="margin-top:20px;margin-right:20px;" class="dropdown headerlinks">
 <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">My Account
    <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li class="headerlinks_drop"><a href="resetpassword.php">Reset Password</a></li>
        <li class="headerlinks_drop"><a href="logout.php">Logout</a></li>                        
      </ul>
    </li>
  </ul>
    </div>
  </div>
</nav>
	<div class="main" style="background-color:white;margin-top:100px;">
	<div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Terms" data-toggle="tab">TERMS OF USE</a></li>
                            <li><a href="#Privacy" data-toggle="tab">PRIVACY POLICY</a></li>
                        </ul>
                </div>
                <div class="panel-body">
					<div class="tab-content">
							<div class="tab-pane active" id="Terms">
								<div class="container" style="color:black">
								<div class="col-md-12">
									<h2>TERMS OF USE</h2>
									<p style="font-size:18px;">THANK YOU FOR USING GOODS CAB!</p>
									<ul>
										<li>By accessing or using our website or service, you agree to be bound by these Terms and by our Privacy Policy.</li>
										<li>Goods CAB is an online marketplace for hiring last-mile logistics services. Goods CAB does not own or operate any vehicles. We simply connect customers who require goods transportation to companies and individuals who offer the same. If you use the website (www.goodscab.com) or make a booking on Goods CAB via phone or email, you are subject to the following terms and conditions.</li>
										<li>You agree and acknowledge that Goods CAB is not your agent or the agent of participating goods carriers and is not a party to the contract for the hiring of the goods carriers.</li>
										<li>All goods carriers that are hired via Goods CAB are operated by third party providers. Goods CAB do not guarantee the ability of the goods carriers. It is solely your responsibility to determine if the goods carrier matched to you will meet your needs and expectations.
</li>
										<li>Goods CAB will not participate in disputes between you and the goods carrier. Use of goods carriers arranged or scheduled using the services is at your own risk and judgment. Goods CAB shall not have any liability arising from or in any way related to your transactions or relationship with the goods carrier.</li>
										<li>You undertake to Goods CAB that you shall not permit any other person who has an interest in the consignment to bring a claim or action against Goods CAB. If a claim or action is made you will indemnify Goods CAB and its partners against the consequences of the claim or action and the costs and expenses we incur in defending it. Goods CAB shall not liable for any delays, loss or damage arising out of any circumstances beyond the control of Goods CAB. These include but are not limited to 'Act of God' i.e. earthquakes, floods, cyclone, storm, fog etc. or 'Force Majeure' i.e. Riots, civil war; any act or omission by a person not employed or contracted by Goods CAB to carry out the Services such as government officials, third parties, receiver etc.</li>
										<li>The customer will be responsible to pay Toll charges. All RTA/police challans for non-compliance will be paid by the customer. This excludes challans for vehicle related offenses like insurance, pollution or fitness certificates. Insurance and 100% money back guarantee is intended for individuals and not businesses. Goods CAB reserves the right to finalize this on order basis.</li>
										<li>All materials on this Site, including but not limited to audio, images, software, text, icons and such like (the "Content"), are protected by copyright under international conventions and copyright laws. You cannot use the Content for any purpose, except as specified herein.</li>
										<li>Considering there are multiple promotional offers running on the site, user can avail the benefit of only one offer at a time. No two promotional codes can be combined at the time of making a booking.</li>
										<li>Actual vehicle may not be exactly as shown on the website and may vary depending on the availability of the vehicles and the city.</li>
										<li>If any dispute arises during your use of the Site or thereafter, in connection with and arising from your use or attempt to use this Site, the dispute shall be referred to arbitration. The place of arbitration shall be Hyderabad. The arbitration proceedings shall be in the English language. These terms and conditions are governed by and shall be construed in accordance with the laws of the Republic of India and any dispute shall exclusively be subject to the jurisdiction of the appropriate Courts situated at Hyderabad, India.</li>
										<li>If the receiver refuses to accept delivery we will try to contact you and agree the appropriate next action. You agree to pay us any costs we incur in forwarding, disposing of or returning the consignment and our charges (if any) for the agreed appropriate next action. Your access or use of the website or our service via phone or email shall be deemed proof of your acceptance of these Terms and Conditions.</li>
										<li>The Company reserves the right to modify or supplement these terms of use for regulatory, legal, technical or any other reason with future effect by placing an advance notice on the Website. The notice will include the date of planned change and the consequences for users.</li>
										
									</ul>	
									<p><a style="color:Orange;text-decoration: underline;"  href="contactus.php" > Click here</a> to Contact us for any Queries.</p>			
								</div>
								</div>
							</div>
							<div class="tab-pane" id="Privacy">
								<div class="container" style="color:black">	
									<div class="col-md-12">
											<h2>PRIVACY POLICY</h2>
											<p style="font-size:18px;">THANK YOU FOR USING GOODS CAB!</p>
												<ul>
													<li>By accessing or using our website or service, you agree to be bound by these Terms and by our Privacy Policy.</li>
													<li>This Privacy Policy covers Goods CAB, which shall be referred to as "we", "us", or "our" throughout this Privacy Policy. "You" as a user of Goods CAB, accept the practices described in this Privacy Policy.</li>
													
													<li>Information In the course of registering for and availing various services we provide from time to time through our website www.goodscab.com ("Website", telephone search, SMS and WAP or any other medium in which Goods CAB may provide services ("Media") you may be required to give your Name, address, Email address, phone number. The Personal Information is used for three general purposes: to customize the content you see, to fulfil your requests for certain services, and to contact you about our services. Unless otherwise stated explicitly, this Policy applies to Personal Information as disclosed on any of the Media.</li>
													<li>We are committed to protecting the privacy and confidentiality of all Personal Information that you may share as a user of Media.</li>
													<li>This policy does not apply to the practices of organizations that we do not own or to people that we do not employ or manager.</li>
													<li>Security Personal Information will be kept confidential and we do not disclose the information except that in case you are a customer of our search services through any of the Media. Further, the vendors / advertisers who are listed with us, may call you, based on the query or enquiry that you make with us, enquiring about any Product / Service or Product / Service of any subscriber / advertiser or Product / Service of any particular subscriber / advertiser.
</li>
													<li>We will share Personal Information only under one or more of the following circumstances: - If we have your consent or deemed consent to do so - If we are compelled by law (including court orders) to do so. In furtherance of the confidentiality with which we treat Personal Information we have put in place appropriate physical, electronic, and managerial procedures to safeguard and secure the information we collect online. We give you the ability to edit your account information and preferences at any time, including whether you want us to contact you regarding any services. To protect your privacy and security, we will also take reasonable steps to verify your identity before granting access or making corrections.</li>
													<li>You acknowledge that you are disclosing Personal Information voluntarily. Prior to the completion of any registration process on our website or prior to availing of any services offered on our website if you wish not to disclose any Personal Information you may refrain from doing so; however if you don't provide information that is requested it is possible that the registration process would be incomplete and/or you would not be able to avail of the our services.</li>
													<li>Contact us If you have questions or concerns about these privacy policies; please send us an email at contact@goodscab.com Links to other Websites We have affiliate links to many other online resources. We are not responsible for the practices employed by these affiliates or their websites linked to or from goodscab.com nor the information or content contained on these third party websites. You should carefully review their privacy statements and other conditions of use and you agree you provide information or engage in transactions with these affiliates at your own risk.</li>
													<li>Updates on Privacy Policy We reserve the right to revise these Privacy Policies of goodscab.com from time to time by updating this posting. Such revised policies will take effect as of the date of posting.</li>
													
													</ul>
													<p><a style="color:Orange;text-decoration: underline;"  href="contactus.php" > Click here</a> to Contact us for any Queries.</p>		
										</div>
								</div>
							</div>

		
	
		
					</div>
	</div>
	  <div style="margin-bottom:100px">
  </div>

	<!-- Footer -->
      <div  class="navbar navbar-default navbar-fixed-bottom">
      <p class="footer navbar-text pull-left">
          	<a href="aboutus.php" >About us</a>&nbsp;&nbsp; |&nbsp;
			<a href="contactus.php" >Contact</a>&nbsp;&nbsp;|&nbsp;
			<a href="Terms_Privacy.php" >Terms & Privacy</a>

      </p>
      
 <p  class="footer navbar-text pull-right">All Rights Reserved - 2016. <a href="http://www.yodhaa.com">Yodhaa Business Solutions Pvt Ltd. </a></p>
    </div>

</body>
</html>