<?php include("dbconnect.php"); ?>
<!DOCTYPE html>
<html>
<head>
     <title>Smart Tuition Centre</title>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
     <meta name="description" content="" />
     <meta name="keywords" content="" />
     <meta name="author" content="" />
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
     <link rel="stylesheet" href="css/bootstrap.min.css" />
     <link rel="stylesheet" href="css/magnific-popup.css" />
     <link rel="stylesheet" href="css/font-awesome.min.css" />
	 <meta name="viewport" content="width=device-width, initial-scale=1" />
	 <link rel="stylesheet" href="css/w3school.css" />
	 <script src="js/jquery 3.3.1 min.js"></script>
	 <script src="js/jquery-1.12.4 ui.js"></script>
	 <script src="js/jquery-1.12.4.js"></script>
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css" />
	 <link rel="stylesheet" href="css/newtemplate.css" />
</head>
<style type="text/css">
#home{
	padding-top:0;
	padding-bottom:0;
}
#find_more
{
	color:white;
	background-color:black;
	border-radius:5px;
	border:0;
	padding:10px 25px 10px 25px;
	font-size:20px;
}

#sign_up{
	padding:0;
}

#user{
	display:none;
}

#find_more:hover
{
	background-color:white;
	border-width:60px;
	color:black;
}

#announcement
{
	color:white;
	font-size:80px;
}

#announcement_details
{
	color:white;
	font-size:18px;
	margin-bottom:10px;
}

#view_more
{
	color:white;
	background-color:black;
	border-radius:5px;
	border:0;
	padding:10px 25px 10px 25px;
	font-size:20px;	
	margin-top:10px;
}

#view_more:hover
{
	background-color:white;
	border-width:60px;
	color:black;
}

.w3-button{
	outline:0;
}

#schedule .container-fluid{
	padding-left:0;
}

#schedule_details
{
	text-align:left;
	width:500px;
	float:left;
	font-size:20px;
	margin-top:100px;
	margin-left:50px;
}

#schedule_details p
{
	font-size:16px;
	line-height:30px;
}

#schedule_details button[type="button"]
{
	padding:15px;
	border-radius:10px;
	border:0;
	background-color:black;
	color:white;
}

#schedule_details a button[type="button"]
{
	border:0;
}

#schedule_details button[type="button"]:hover
{
	color:black;
	background-color:white;
	border-width:2px;
	border-color:black;
	border:2px solid;
}
</style>
<body>
    <?php include('menu.php'); ?>

     <!-- HOME -->
	 <section id="home" data-stellar-background-ratio="0.5">
		<div class="container-fluid">
			<div class="row">
			<div class="w3-content w3-display-container" style="max-width:2000px; margin:0;">
			<div class="w3-display-container mySlides">
				<img src="images\header.png" width=2000px height=500px />
				<div class="w3-display-middle w3-large w3-container w3-padding-16">
				<b><span id="announcement">Tuition Center</span></b>
				<center><div id="announcement_details">Your all time teachers for PT3 and SPM are here.</div></center>
				<div class="col-md-12">
				<a href="about.php"><button type="button" id="view_more" >View More</button></a>
				</div>
				</div>
			</div>

			<div class="w3-display-container mySlides" >
				<img src="images\libarary.jpg" width=100% height=500px />
				<div class="w3-display-middle w3-large w3-container w3-padding-16" style="margin-left:0px;">
				<center><b><span style="color:white; font-size:50px; margin-top:50px;">Intake 2018</span></b></center>
				   <div style="color:white; font-size:20px;  margin-bottom:10px;">PT3 and SPM tuition class are now open for register now.</div>
				   <a href="register_page.php"><center><button type="button" id="find_more" >Find Out More</button></center></a>
				</div>
			</div>
			<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
			<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
			</div>
		 </div>
		</div>
	</section>

     <!-- Levels -->
	 <?php 
		$result_PT3=mysqli_query($conn,"select * from subject where Standard_Name='PT3'");
		$result_SPM=mysqli_query($conn,"select * from subject where Standard_Name='SPM'");
	 ?>
     <section id="level" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
					<div id="PT3_image" class="col-md-6">
						<img src="images\PT3.png" height=100px width=100px class="col-md-3 col-md-offset-6"/>
							<div id="subjects" class="col-md-offset-5 col-md-5"><h3>PT3</h3>
							<?php while($row_PT3=mysqli_fetch_assoc($result_PT3)){
							echo $row_PT3['Subject_Name']."  ";
							}?>
							</div>
						</div>
						
					<div id="SPM_image" class="col-md-6 col-md-pull-2">
						<img src="images/SPM.png" height=100px width=100px class="col-md-3 col-md-offset-6" />
							<div id="subjects" class="col-md-offset-5 col-md-5"><h3>SPM</h3>
							<?php while($row_SPM=mysqli_fetch_assoc($result_SPM)){
							echo $row_SPM['Subject_Name']."  ";
							}?>
							</div>
					</div>
			  </div>
		 </div>
     </section>


     <!-- Schedule -->
     <section id="schedule" data-stellar-background-ratio="0.5" style="background-color:#E2E2E2;">
        <div class="container-fluid">
		  <div class="row"> 
			<div class="col-md-6 col-sm-6" id="schedule_img">
				<img width=730px height=700px src="images/classroom.jpg" class="img-responsive"/>	
			</div>
				<div id="schedule_details" class="col-md-6 col-sm-6">
					     <div class="section-title">
                             <h2>We Are Offering</h2>
                          <span class="line-bar">...</span>
                         </div>
					<p style="color:black;">
					We provide the full range of PT3 and SPM subjects with varied time slots to suit student's
					convenience. We also provide home tutoring, private tuition, individual tuition, one-to-one 
					tuition (1-to-1 tuition) ,personal tuition as well as small group tuition.
					</p>
					<a href="register_page.php"><button type="button">Complete schedule</button></a>
				</div> 
		   </div>
		 </div>  
     </section>


     <!-- Contact -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container-fluid">
               <div class="row">
                    <div id="contact_content" class="col-md-offset-1 col-md-4">
                         <div id="contact_header" class="col-md-10">
						 <h3>Reach Us</h3>
						 <p>We love hearing from student,parents and people from the community.We really appreciate you taking the time
						   to get in touch. Please fill in the form below.</p>
						</div>
					<div id="contact_location" class="col-md-12">
						<div class="col-md-1">
						<img width=40px height=40px src="images\location.png" />
						</div>
						<div class="col-md-5" id="contact_location_details">
						<p>NO.17,JALAN D2 TAMAN DAHLIA
						BUKIT BERUANG, MELAKA 75450
						MY
						</p>
						</div>
					</div>
					<div id="contact_phone" class="col-md-12">
						<div class="col-md-1">
						<img width=40px height=40px  src="images\phone.png" />
						</div>
						<div class="col-md-5" id="contact_phone_details">
						<p>+0617-3202673</p>
						</div>
					</div>
					<div id="contact_email" class="col-md-12">
						<div class="col-md-1">
						<img width=40px height=40px  src="images\email_icon.png" />
						</div>
						<div class="col-md-5" id="contact_email_details">
						<p>support@tuitioncenter.com</p>
						</div>
					</div>
					</div>
					<div id="message" class="col-md-6">
						<h3>Leave Message</h3>
					<form name="message">
						<div id="user_name"><input type="text" maxlength="50" name="name" size="70" placeholder="Name" /></div>
						<div id="user_email_address"><input type="email" maxlength="50" name="email" size="70" placeholder="Email Address" /></div>
						<div id="user_message"><textarea rows="5" cols="74" size="110" maxlength="70" placeholder="Message"></textarea></div>  
						<div id="user_send_message" class="col-md-offset-7"><input type="submit" name="submit_btn" value="Send Message" /></div>
					</form>	
					</div>
			</div>
			</div>
     </section>

	<?php include('footer.php'); ?>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
	 <script src="js/animation_slider.js"></script>
</body>
</html>