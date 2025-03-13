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
	 <link rel="stylesheet" src="css/w3school.css" />
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

#schedule{
	background-image:linear-gradient(90deg,rgba(30,30,32,0.93) 0%,rgba(30,30,32,0.7) 100%),url("images/calendar.jpg");
	margin-top:70px;
	height:500px;
	background-color:#575252;
}

#timetable{
	padding-bottom:0;
}

#register_form{
	padding-top:0px;
}

#the_schedule h3
{
	color:white;
	font-size:60px;
	padding-top:120px;
	padding-bottom:15px;
}

#schedule_details{
	color:white;
	font-size:20px;
	line-height:45px;
	text-align:left;
}	

#form_pt3 button[type="button"],#form_spm button[type="button"]
{
	background-color:#BF2828;
	color:white;
	border:0;
	border-radius:7px;
	padding:10px;
	font-size:15px;
}

#form_pt3,#form_spm
{
	text-align:left;
}

#form_pt3 h3, #form_spm h3
{
	color:#BF2828;
}

, #form_spm p
{
	line-height:20px;
	font-size:15px;
}

#sign_up{
	padding:0;
}

#user{
	display:none;
}

#email_error,#password_error,#error_name,#error_ic,#error_phone,#error_email,#error_password,#error_confirm_password{
	color:#F2220D;
}
#scheduleTable{
	padding-right:120px;
	padding-left:120px;
}

</style>
<body>
	<?php include('menu.php'); ?>
	<!--Schedule Header-->
	 <section id="schedule">
	  <div class="container-fluid">
		<div class="row">
		<div id="timetable_header" class="col-md-6">
		<div id="the_schedule" class="col-md-10">
		<h3>The Schedule</h3>
		</div>
		<div id="schedule_details" class="col-md-offset-2 col-md-8">
		Schedule updated 04 January <?php echo date('Y')."."; ?><br />
		PT3 Schedule End at 30 September <?php echo date('Y')."."; ?><br />
		SPM Schedule End at 31 October <?php echo date('Y')."."; ?>
		</div>
		</div>
		</div>
		</div>
	</section>
	<!-- TimeTable -->
	<section id="timetable">
	 <div class="container-fluid">
	 <div class="row">
		<h1>PT3 and SPM Timetable</h1>
			<div id="scheduleTable" class="col-md-12">
				<?php include('test.php');?>
			</div>
			</div>
			</div>
		</section>
		<!--Register Form-->
		<section id="register_form">
			<div class="container">
			  <div class="row">
			  <form>
				<div class="col-md-offset-2 col-md-4" id="form_pt3">
				 <h3>Enrollment PT3 Form</h3>
					<h4>FORM 3</h4>
							<p>Classes start 02 January 2018. Subjects offered as Bahasa
							Melayu, English, Mathematics, Science.</p>
					  <div id="register_subject_pt3"><button type="button" id="register_btn_pt3">Register Online</button></div>
				</div>
				<div class="col-md-offset-1 col-md-4" id="form_spm">
				 <h3>Enrollment SPM Form</h3>
					<h4>FORM 5</h4>
							<p>Classes start 02 January 2018. Subjects offered as Physicals, Biology, Chemistry, Add Math</p>
					  <div id="register_subject_spm"><button type="button" id="register_btn_spm">Register Online</button></div>
				</div>
				</form>
			  </div>
			</div>
		</section>
		

			<script type="text/javascript">
										$(document).ready(function(){
											var month=new Date();
											month=month.getMonth()+1; 
											$('#register_btn_spm').on("click",function(){
											if(month>=10){
												alert("Sorry the registration for SPM is close until next January");
											}
											else{
												$.ajax({  
													url:"check_login.php",  
													type:"GET", 
													success:function(data){ 
														if(data==1){  
															$('#join').trigger('click');
														}
														else{
															var level="SPM";
															var year=new Date();
															year=year.getFullYear();
															var student_join_date=year+"-4-1";
															var student_end_date=year+"-10-31";
															window.location="registration_form.php?&level="+level+"&student_join_date="+student_join_date+"&student_end_date="+student_end_date;
														}	
													}
												});  	  
											}
											});
											$('#register_btn_pt3').on("click",function(){
											if(month>=9){
												alert("Sorry the registration for PT3 is close until next January");
											}
											else{
												$.ajax({  
													url:"check_login.php",  
													type:"GET", 
													success:function(data){ 
														if(data == 1){  
															$('#join').trigger('click');
														}															
														else if(data==0){
															var level="PT3";
															var year=new Date();
															year=year.getFullYear();
															var student_join_date=year+"-4-1";
															var student_end_date=year+"-9-30";
															window.location="registration_form.php?level="+level+"&student_join_date="+student_join_date+"&student_end_date="+student_end_date;
														}
														}
													});  	  
											}
											});	
											 });
			</script>
		
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