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
#sign_up{
	padding:0;
}

#user{
	display:none;
}

.error{
	color:#F2220D;
}


#table
{
	margin-left:auto;
	margin-right:auto;
}

#header_table
{
	border:1px solid black;
	margin-top:100px;
	height:50px;
	width:1000px;
}

#parent_profile
{
	margin-top:50px;
	text-align:left;
}

#parent_name,#parent_email,#parent_hp,#parent_ic,#parent_2_name,#parent_2_email,#parent_2_hp,#parent_2_ic
{
	margin-top:20px;
}

#top_header_profile
{
	padding-left:35px;
	padding-top:10px;
	padding-bottom:10px;
	background-color:#DED9D9;
}

#parent_name input[type="text"]
{
	padding:5px;
	margin-left:25px;
}

#parent_hp input[type="text"]{
	padding:5px;
	margin-left:20px;
}

#parent_email input[type="email"]
{
	padding:5px;
	margin-left:30px;
}

#parent_ic input[type="text"]{
	padding:5px;
	margin-left:25px;
}

#left{
	margin-bottom:30px;
}

input[type="button"]{
	width:100px;
	height:30px;
	background-color:#4C83E7;
	color:white;
	border:0;
}

#footer_bottom{
	margin-top:310px;
}

#form{
	margin-top:50px;
    border: 1px solid rgba(0,0,0,.1);
    border-radius: 10px;
	padding-bottom:20px;
}

#error_phone{
	margin-bottom:20px;
}
</style>

<body>
  <?php include('profile_menu.php'); ?>
	<section id="parent_profile">
	<div class="container_fluid">
	<div class="row">
	<div id="top_header_profile" class="col-md-12">Parent</div>
	   <form id="form" class="col-md-4 col-md-offset-4">
			<div id="parent_name" class="col-md-12">Name<input type="text" maxlength="30" size="30" id="parent_name_val" value="<?php echo htmlentities($row_parent['parent_name']);?>" placeholder="Name" /></div>
			<div id="error_name" class="col-md-7 col-md-offset-2 error"></div>
			<div id="parent_hp" class="col-md-12">H/P No.<input type="text" maxlength="10" size="20" id="parent_hp_val" value='<?php echo $row_parent['parent_contact_num']; ?>' placeholder="H/P No." /></div>
			<div id="error_phone" class="col-md-7 col-md-offset-2 error"></div>
		   <div id="savebtn" class="col-md-8"><input type="button" id="savebtn" value="Save" /></div>
		   <a href="profile.php"  class="col-md-2 col-md-pull-5"><div id="cancel" class="col-md-1"><input type="button" id="cencelbtn" value="Cancel"/></div></a>
		</form>
	</div>
	</div>
	</section>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#savebtn').on('click',function(){
				var parent_name=$('#parent_name_val').val();
				var parent_phone=$('#parent_hp_val').val();
				var name=0,phone=0;
				if(parent_name==''){
				document.getElementById('error_name').innerHTML="*Please Fill The Blank";
				}
				else{
					document.getElementById('error_name').innerHTML="";
				name=1;
				}
				if(parent_phone==''){
					document.getElementById('error_phone').innerHTML="*Please Fill The Blank";
				}
				else if(isNaN(parent_phone)){
					document.getElementById('error_phone').innerHTML="*Must Be A Number";
				}
				else if(parent_phone.length<10){
					document.getElementById('error_phone').innerHTML="*Please Enter Valid Phone Number";
				}					
				else{
				document.getElementById('error_phone').innerHTML="";
				phone=1;
				}
				if(name==1 && phone==1){
				$.ajax({
					url:'update.php',
					method:'POST',
					data:{
						parent_name:parent_name,
						parent_phone:parent_phone,
					},
					success:function(data){
						if(data==1){
							window.location="profile.php";
						}
						else if(data=="phone"){
							document.getElementById('error_phone').innerHTML="*The phone has been registered";
						}
					}
				});
				}
			});
		});
	</script>
		<div id="footer_bottom">
		<hr />
		<center>
			<small>Copyright &copy; 2018 Smart Tuition Center</small>
		</center>
		</div>

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