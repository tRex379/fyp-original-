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
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
	 <script src="js/jquery 3.3.1 min.js"></script>
	 <script src="js/jquery-1.12.4 ui.js"></script>
	 <script src="js/jquery-1.12.4.js"></script>
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css" />
	 <link rel="stylesheet" href="css/newtemplate.css" />
</head>
<style type="text/css">
#sign_up{
	padding:0;
}

#user{
	display:none;
}

#email_error,#password_error,#error_name,#error_ic,#error_phone,#error_email,#error_password,#error_confirm_password{
	color:#F2220D;
}

#about_header{
	background:url(images/about_us.jpg);
	background-repeat:no-repeat;
	background-size: cover;
    vertical-align: middle;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    min-height: 55vh;
	text-align:left;
	font-size:20px;
	color:white;
}

#about_header h1{
	color:white;
	margin-top:100px;
}

#profile_picture{
	margin-bottom:100px;
}

#company_name{
	font-weight:bold;
	font-size:20px;
}

#our_mission{
	background-color:#f7f7f7;
}

#our_mission #right{
	margin-top:100px;
}

#our_mission,#our_service{
	padding-top:50px;
	padding-bottom:50px;
}

#best_team{
	margin-top:50px;
}

#best_team #image{
	padding-bottom:50px;
}

#best_team #name{
	font-size:22px;
	color:#666666;
	font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif;
    line-height: 2em;	
}

#best_team #subject{
	font-size: 16px;
    color: #666666!important;
    text-align: center;
}
</style>
<body>
     <?php include('menu.php'); ?>
	 <!--About Header -->
	 <section id="about_header">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1 id="about_us">
					About us
					</h1>
				</div>
			</div>
		</div>
	 </section>
	 <!-- About -->
		 <section id="about" data-stellar-background-ratio="0.5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-1 col-md-5 col-sm-offset-1 col-sm-6 col-xs-12" id="profile_picture">
					<img src="images/aboutus.jpeg" class="img-responsive" id="left" />
					</div>
				<div class="col-md-5 col-sm-5 col-xs-12" id="right">
					<div id="about_us_info">
						<h2><b>Our Profile:</b><br /></h2>
						<p><span id="company_name">Smart Tuition Centre</span> started up in 2018 ,our beginnings with only four PT3 subejcts and four SPM subjects. We owe a huge thanks to our students and parents for joining us on this awesome journey, and we hope that you’ll continue to be a part of our story.  </p>
					</div>
				</div>
				
				<div id="our_mission" class="col-md-12 col-sm-12 col-xs-12">
					<span class="col-xs-12" id="mission">
					</span>
					<span class="col-md-offset-1 col-md-5 col-sm-offset-1 col-sm-6 col-xs-12" id="left">
					<h2>Our Mission</h2>
					<p>At Smart Tuition Centre, we aim to provide quality education and excellent service to all our students, assisting them in achieving their aims and realizing their dreams through quality education, the expertise of experienced teachers, a well-trained team of staff and a transparent administrative system. We strongly believe that we are capable of guiding our students and providing them with a holistic education.
					<br /><br />
					We believe that every child is a winner. There is no such thing as failure. Hence, we strive to maximize each student’s chance of success by finding out what motivates them and hope can provide students with opportunities to attain personal goals through a supportive learning environment.</p>
					</span>
					<span class="col-md-offset-2 col-md-4 col-sm-offset-1 col-sm-2 col-xs-12" id="right">
					<img src="images/mission.png" width="200px"/>
					</span>
				</div>
				
				<div id="our_service" class="col-md-12 col-sm-12 col-xs-12">
					<span class="col-md-offset-2 col-md-2 col-sm-offset-2 col-sm-2 col-xs-12" id="left">
					<img src="images/our_services.jpg" width="300px" height="200px"/>
					</span>
					<span class="col-md-offset-3 col-md-4 col-sm-offset-4 col-sm-4 col-xs-12" id="right">
					<h2>Our Service</h2>
					<p>We provide the full range of PT3 and SPM subjects with varied time slots to suit students’ convenience.</p>
					</span>
				</div>
				</div>
			</div>
			</section>
			<?php 
			$result_teacher=mysqli_query($conn,"select * from teacher");			
			?>
			<section id="teacher">
			<div class="container">
			<div class="row">
				<div id="best_team" class="col-md-12">
					<h2>Teacher</h2>
				<div class="col-md-12">
				<?php 
				while($row_teacher=mysqli_fetch_assoc($result_teacher)){
					$profile=$row_teacher['Gender'];
					if($profile=="Male"){
						$profile="images/profile.jpg";
					}
					else if($profile=="Female"){
						$profile="images/female.jpg";
					}
				?>
				<div class="col-md-4" id="image">
					<img src=<?php echo $profile;?> width="150px" height="150px"/>
					<div id="name"><?php echo $row_teacher['Name']; ?></div>
				</div>	
				<?php 
				}
				?>
				</div>
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