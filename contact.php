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

#menu a:hover,.footer-link a:hover{
	color:#ce3232;
}

#menu{
	background-color:white;
}

#contact-header{
	background:linear-gradient(rgba(26,26,26,0.7),rgba(26,26,26,0.7)),url('images/contact-header.jpg');
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
    min-height: 70vh;
	text-align:left;
	font-size:20px;
	color:white;
}

#contact-header h1{
	color:white;
	font-size:70px;
}

#reach_us{
	background-color:#fff;
	padding-top:80px;
	color:black;
}

#reach_us h2{
	margin-bottom:30px;
}

#line-bar{
	border:1.5px solid #4a4a4a;
	width:55px;
	margin-left:47.5%;
}

#reach_us h3{
	color:black;
}

#reach_us-title{
	font-size:20px;
}

#reach_us #location,#reach_us #email,#reach_us #smartphone{
	margin-bottom:15px;
	margin-top:35px;
}

#get_in_touch{
	background-color:#f4f4f4;
}

#get_in_touch h1{
	margin-bottom:0;
}

#get_in_touch_info{
	font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif;
	font-size:15px;
	color:black;
}

#get_in_touch h1{
	color:black;
}

#get_in_touch_form label{
	display:block;
	width:100px;
	text-align:left;
	margin-top:15px;
}

#get_in_touch_form input[type=text],#get_in_touch_form input[type=email]{
	padding:20px;
	background-color:#F6F6F6;
}

#get_in_touch_form textarea{
	padding:10px 10px 100px 10px;
	background-color:#F6F6F6;
}

#get_in_touch_btn{
	float:right;
	margin-top:15px;
	padding:10px 20px 10px 20px;
	border-radius:5px;
	outline:0;
	border:2px solid black;
	color:white;
	font-size:20px;
	letter-spacing:1px;
	background-color:black;
	font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif;
}

#get_in_touch_btn:hover{
	background-color:white;
	color:black;
	border:2px solid black;
}

#map iframe{
	width:100%;
}

#map{
	padding:0;
}

</style>
<body>
<?php include('menu.php'); ?>

	 <!-- Contact Header -->
	  <section id="contact-header">
          <div class="container">
               <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h1>Contact Us</h1>
                        <span>What can we help you with?</span>
                    </div>
               </div>
          </div>
     </section>
	 
	 <!-- Reach Us -->
	 <section id="reach_us" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				 <div class="section-title">
					<h2>Reach Us</h2>
					<div id="line-bar"></div>
				 </div>
				</div>
					<div id="reach_us-title">Questions? Contact Us.</div>
				<div class="col-md-4" id="location">
					<img src="images/location.png" width="100px" height="100px"/>
					<div id="find_us">
					<h3>Find Us</h3>
					<div id="find_us_info">No.1-1,Jalan SP 1,<br />Taman Semabok Perdana 75050 Melaka
					</div>
					</div>
				</div>
				<div class="col-md-4" id="smartphone">
					<img src="images/smartphone.png" width="100px" height="100px" />
					<div id="phone">
						<h3>Phone</h3>
						<div id="phone_info">
							(+60) 17-3202673
						</div>
					</div>
				</div>
				<div class="col-md-4" id="email">
					<img src="images/email.png" width="100px" height="100px"/>
					<div id="email">
						<h3>Email</h3>
						<div id="email_info">
							support@tuitioncenter.us
						</div>
					</div>
				</div>
			</div>
		</div>
	 </section>
	 
	 <!--Get In Touch-->
	 <section id="get_in_touch" >
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
					<h1>Get In Touch</h1>
					<span class="line-bar">...</span>
					</div>
						<div id="get_in_touch_info" class="col-md-7 col-md-offset-3">
							We love to hearing question from user any problem that you face. We really appeciate you taking the time to get in touch. Please fill in the form below.
						</div>
				</div>
						<form class="col-md-12" id="get_in_touch_form">
							<div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
								<label for="input-text">Name:</label>
								<input type="text" class="form-control" id="contact_name" placeholder="Enter Name" required />
								<div class="error" id="contact_error_name"></div>
							</div>
							<div class="col-md-5 col-sm-6 col-xs-12">
							<label for="input-email">Email:</label>
								<input type="email" class="form-control" id="contact_email" required placeholder="Email Address" />
								<div class="error" id="contact_error_email"></div>
							</div>
							<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
								<label for="input-textarea">Message:</label>
								<textarea class="form-control" id="contact_message" required placeholder="Leave Message..."></textarea>
								<input type="button" id="get_in_touch_btn" value="Send Message"/>
								<div class="error" id="contact_error_message"></div>
							</div>	
						</form>
			</div>
		</div>
	 </section>
	 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>	
	 <script type="text/javascript">
		$("#get_in_touch_btn").on("click",function(){
			var name=$("#contact_name").val();
			var email=$("#contact_email").val();
			var message=$("#contact_message").val();
			var n=0,e=0,m=0;
			var register_check_email =/^[a-z0-9][a-z0-9-_\.]+@[a-z0-9][a-z0-9-]+[a-z0-9]\.[a-z0-9]{2,10}(?:\.[a-z]{2,10})?$/;
			if(name==""){
				$("#contact_error_name").text("Please fill up the name");
			}
			else{
				$("#contact_error_name").text("");
				n=1;
			}
			if(register_check_email.test(email)==0){
				$("#contact_error_email").text("Please fill up a proper email format");
			}
			else if(email==""){
				$("#contact_error_email").text("Please enter a email");
			}
			else{
				$("#contact_error_email").text("");
				e=1;
			}
			if(message==""){
				$("#contact_error_message").text("Please enter a message");
			}
			else{
				$("#contact_error_message").text("");
				m=1;
			}
			if(n==1&&e==1&&m==1){
			$.ajax({
				url:"send_email.php",
				type:"POST",
				data:{
					name:name,
					email:email,
					message:message,
				},
				success:function(data){ 
					if(data==1){
						swal({
						title: "Successful!",
						text:"Thank for the comment!",
						icon:"success"
						});
						location.reload();
					}
					else{
						swal({
						title: "Fail!",
						text:"You are fail to send the email",
						icon:"error"
						});
					}
				}
			});
			}
		})
	 </script>
	 
	  <!--Maps-->
	<section id="map" data-stellar-background-ratio="0.5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12" style="padding:0;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.1791970129933!2d102.27210556757989!3d2.2038641483537944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1ee372b019025%3A0x44f8fd712edb5761!2sMee+Fah+Fishing!5e0!3m2!1sen!2smy!4v1527581654190" width="600" height="460" frameborder="0" style="border:0;" allowfullscreen></iframe>
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
	 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	 
	 

</body>
</html>