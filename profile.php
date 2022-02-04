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
#border_parent
{
	margin-top:100px;
	margin-left:auto;
	margin-right:auto;
	width:1300px;
	height:500px;
}

#parent{
	padding-top:120px;
	padding-bottom:50px;
}

#parent_info
{
	padding-bottom:5px;
	margin:0;
	font-weight:normal;
	background-color:#E5E5E5;
}

#parent_details{
	padding:0;
}

#parent_details form{
	text-align:left;
}

input[type=button]
{
	width:100px;
	height:30px;
	background-color:#4C83E7;
	color:white;
	border:0;
	margin-top:40px;
}

#image{
	padding:0;
}

#image img
{
	border:15px solid #D8D3B5;
	padding:0;
}

.parent{
	margin-top:20px;
}

.subject_number{
	padding:0;
}

.student_subject{
	padding:0;
	padding-bottom:15px;
}

#student{
	padding:0;
	padding-bottom:50px;
}

#student_info{
	padding-bottom:5px;
	margin:0;
	font-weight:normal;
	background-color:#E5E5E5;
}

#student_details form{
	text-align:left;
}

#student_ic,#student_standard{
	padding-bottom:10px;
	padding-top:15px;
}

#student_name,#student_gender,#student_join_date,#student_end_date{
	padding-top:15px;
}

#payment_1 input[type=button]
{
	float:left;
	margin-left:20px;
	margin-top:40px;
}

#payment_2 input[type=button]
{
	float:left;
	margin-left:20px;
	margin-top:60px;
}

.warning ul{
	text-align:left;
	color:#F2220D;
	margin-top:20px;
}

</style>
<body>
	<?php include('profile_menu.php'); ?>
	<?php $result_student=mysqli_query($conn,"select * from student where parent_id_fk='$parent_id' and isdeleted='0'");?>
	 <section id="parent">
	 <div class="container">
	 <div class="row">
	<div id="parent_details" class="col-md-8 col-md-offset-2">
	<div class="col-md-12">
		<p>Unbarred Status : <img src="images/success.png"  width="20px" height="20px"/> &nbsp;&nbsp;&nbsp; Barred Status : <img src="images/pending.png" width="20px" height="20px"/> &nbsp;&nbsp;&nbsp; Blocked Status : <img src="images/fail.jpg" width="20px" height="20px"/> </p>
	</div>
	<h3 id="parent_info" class="col-md-12">Parent Info</h3>
			<form>
				<div id="parent_name" class="col-md-6 parent">Name : <span id="parent_name"><?php echo $row_parent['parent_name']; ?></span></div>
				<div id="parent_ic" class="col-md-6 parent">IC : <span id="parent_ic"><?php echo $row_parent['parent_ic'] ?></span></div>
				<div id="parent_email" class="col-md-6 parent">Email : <span id="parent_email"><?php echo $row_parent['parent_email'] ?></span></div>
				<div id="parent_hp" class="col-md-6 parent">H/P : <span id="parent_hp"><?php echo $row_parent['parent_contact_num'] ?></span></div>
				<div id="parent_barred_status" class="col-md-12 parent">Barred Status : <span id="parent_barred_status">   
				<?php 
				if($row_parent['barred_status']=="unbarred"){
					echo '<img src="images/success.png"  width="20px" height="20px"/>';
				}
				else if($row_parent['barred_status']=="barred"){
					echo '<img src="images/pending.png" width="20px" height="20px"/>';
				}
				else if($row_parent['barred_status']=="blocked"){
					echo '<img src="images/fail.jpg" width="20px" height="20px"/>';
				}
				?>
				</span></div>
				<span class="col-md-2"><a href="profile_edit.php"><input type="button" id="edit_parent_profile" value="Edit Info" /></a></span>
				<span class="col-md-2"><a href="payment.php"><input type="button" class="paymentbtn" value="Payment" /></a></span>
			</form>
		<div class="col-md-12 warning">
			<ul>
			  <ul class="list-unstyled">
				<li style="margin-left:-5%;">*Warrning : </li>
			  </ul>
				<li> If parent barred status is yellow , you should pay the payment or else you will be blocked soon.</li>
				<li> If parent barred status is red , you have been blocked, please make the payment to unbarred.</li>
			</ul>
	</div>
	</div>
	</div>
	</section>
	<?php
	while($row_student=mysqli_fetch_assoc($result_student)){
	?> 
	<section id="student">
	 <div class="container">
	 <div class="row">
	<div id="student_details" class="col-md-8 col-md-offset-2">
	<h3 id="student_info">Children Info</h3>
			<form>
			<div class="col-md-12">
				<div id="student_name" class="col-md-6">Name : <span id="student_name"><?php echo $row_student['student_name']; ?></span></div>
				<div id="student_join_date" class="col-md-6">Join Date : <span id="student_join_date"><?php echo $row_student['student_join_date_month']." ".$row_student['student_join_date_year'] ?></span></div>
				<div id="student_end_date" class="col-md-6">End Date : <span id="student_end_date"><?php echo $row_student['student_end_date'] ?></span></div>
				<div id="student_gender" class="col-md-6">Gender : <span id="student_gender"><?php echo $row_student['student_gender']; ?></span></div>
				<div id="student_ic" class="col-md-6">IC : <span id="student_ic"><?php echo $row_student['student_ic']; ?></span></div>
				<div id="student_standard" class="col-md-6">Standard : <span id="student_standard"><?php echo $row_student['student_level']; ?></span></div>
				<?php 
				$student_subject=$row_student['student_subject'];
				$subject=json_decode($student_subject,true);
				$i=1;
				foreach($subject as $student_subject => $subject_time){
				$student_subject=str_replace("_"," ",$student_subject);
				echo "<div class='subject col-md-6'><span class='col-md-3 subject_number'>Subject ".$i." : </span><span class='student_subject col-md-9'> $student_subject<br />($subject_time)</span></div>";
				$i+=1;
				}
				?>
			</div>
			<div class="col-md-12">
			<span class="col-md-3"><a href="student_profile_edit_page.php?student_id=<?php echo $row_student['student_id']; ?>"><input type="button" class="editbtn" value="Edit Info" /></a></span>
			</div>
			</form>
	</div>
	</div>
	</div>
	</section>
	<?php
	}
	?>
		
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