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
#student_profile
{
	margin-top:50px;
	text-align:left;
}

#student_name,#student_email,#student_hp,#student_ic,#student_race,#student_gender,#date_birth
{
	padding-left:20px;
	margin-top:20px;
}

#top_header_profile
{
	padding:5px;
	padding-left:30px;
	background-color:#DED9D9;
}

#student_name input[type="text"]
{
	margin-left:40px;
}

#student_email input[type="email"]
{
	margin-left:105px;
}

#student_ic input[type="text"]
{
	margin-left:100px;
	margin-bottom:50px;
}

#student_gender select
{
	margin-left:87px;
	margin-bottom:40px;
}

input[type="text"]
{
	padding:5px;
}

#savebtn_div,#cancelbtn_div{
	padding:0;
}

input[type="button"]
{
	padding:5px 25px 5px 25px;
	background-color:#4C83E7;
	color:white;
	border:0;
	margin-left:20px;
}

#footer_bottom{
	margin-top:180px;
}

#form{
	margin-top:50px;
    border: 1px solid rgba(0,0,0,.1);
    border-radius: 10px;
	padding-bottom:20px;
}

#small_note1{
	color:#F2220D;
	margin-top:20px;
}
</style>

<body>
	 <?php include('profile_menu.php'); ?>
	 <?php $result_student=mysqli_query($conn,"select * from student where parent_id_fk='$parent_id' and student_id=".$_GET['student_id']);
	 $row_student=mysqli_fetch_assoc($result_student);
	 ?>
	 <section id="student_profile">
	 <div class="container-fluid">
	 <div class="row">
	<div id="top_header_profile" class="col-md-12">Student</div>
	   <form id="form" class="col-md-4 col-md-offset-4">	
			<div id="student_name">Student Name :<input type="text" maxlength="30" size="30" id="student_name_val" placeholder="Name" value="<?php echo htmlentities($row_student['student_name']); ?>"  /></div>
			<div id="student_gender">Gender :
			<select id="student_gender_val">
				<?php if($row_student['student_gender']=="Male"){?>
				<option value="Male">Male</option>
				<?php 
				}
				else{
				?>
				<option value="Female">Female</option>
				<?php
				}
			    if($row_student['student_gender']!="Male"){?>
				<option value="Male">Male</option>
				<?php 
				}
				else{
				?>
				<option value="Female">Female</option>
				<?php
				}
				?>
			</select>
			</div>
			<input type="hidden" id="student_id_val" value='<?php echo $_GET['student_id'];?>' />
			<div id="savebtn_div" class="col-md-3"><input type="button" id="savebtn" value="Save" /></div></a>
		    <div id="cancelbtn_div" class="col-md-3"><input type="button" id="cencelbtn" value="Cancel"/></div></a>
		</form>
		<div class="col-md-4 col-md-offset-4">
			<div class="col-md-12" id="small_note1">
			   <ul>
				<ul class="list-unstyled" style="margin-left:-10%;">
					<li>*Note : </li>
				</ul>
						<li>If student wanna to change subject or IC please go to tuition center to request.</li>
			   </ul>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
			$('#savebtn').on('click',function(){
				$.ajax({
					url:'update.php',
					method:'POST',
					data:{
						 student_name:$('#student_name_val').val(),
						 student_gender:$('#student_gender_val').val(),
						 student_id:$('#student_id_val').val()
					},
					success:function(data){
						if(data="phone"){
							
						}
						window.location="profile.php";
					}
				});
			});
			
			$('#cencelbtn').on('click',function(){
				window.location="profile.php";
			});
		});
		</script>
	</div>
	</div>
	</div>
	</section>
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