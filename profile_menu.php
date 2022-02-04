<?php
if(isset($_SESSION['login'])){
	$parent_id=$_SESSION['parent_id'];
	$result_parent=mysqli_query($conn,"select * from parent where parent_id='$parent_id'");
	$row_parent=mysqli_fetch_assoc($result_parent);
?>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#login").css("display","none");
		$("#user").css("display","block");
});
	</script>
<?php
	if($row_parent['parent_first_time']==0){
	$parent_first_time=1;
	$parent_id=$_SESSION['parent_id'];
	mysqli_query($conn,"UPDATE parent SET parent_first_time='$parent_first_time' where parent_id='$parent_id'");
	}
	$result_payment=mysqli_query($conn,"select * from payment where parent_id_fk ='$parent_id' ORDER BY payment_id DESC");
	$row_payment=mysqli_fetch_assoc($result_payment); 
	$payment_month=$row_payment['payment_date'];
	$curr_month=date("m")-1;
	$payment_month=str_replace("/","",$payment_month);
	$payment_month=substr($payment_month,2,2);
	if($curr_month>=$payment_month){
		mysqli_query($conn,"update parent set parent_payment='unpaid' where parent_id='$parent_id'");
	}
	$result_student1=mysqli_query($conn,"select * from student");
	while($row_student1=mysqli_fetch_assoc($result_student1)){
	$student_registration_date=$row_student1['student_registration_date'];
	$student_standard=$row_student1['student_level'];
	$intake_date=$row_student1['intake_date'];
	$curr_date=date('Y-m-d');
	$start=$row_student1['student_registration_date'];
	$student_end_date=$row_student1['student_end_date'];
	$student_id=$row_student1['student_id'];
	if($student_registration_date >= $student_registration_date && $intake_date <= $curr_date){
		mysqli_query($conn,"update student set activate='1' where student_id='$student_id'");
	}
	if($curr_date >= $student_end_date){
		mysqli_query($conn,"update student set activate='0', isdeleted='1' where student_id='$student_id'");
		mysqli_query($conn,"update schedule set curr_capacity='0' where standard='$student_standard'");
	}
	}
}
else{
	header("Location:homepage.php");
}
?>
  <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>
	 <!-- MENU -->
     <section id="menu" class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">
               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                   <a href="homepage.php" class="navbar-brand">Smart Tuition Center</a>
               </div>
		
               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                     <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="homepage.php" class="smoothScroll">Home</a></li>
                         <li><a href="register_page.php" class="smoothScroll">Enrollment</a></li>
                         <li><a href="contact.php" class="smoothScroll">Contacts</a></li>
						 <li><a href="about.php" class="smoothScroll">About</li></a>
                    </ul>
					<ul class="nav navbar-nav navbar-right">
					<div class="dropdown" id="user">
							<button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown"><?php echo $row_parent['parent_name']; ?>
							<span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="profile.php">Profile</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="payment.php">Payment</a></li> 	
							<li role="presentation" class="divider"></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" id="logout" href="homepage.php">Sign out</a></li>    
						</ul>
					</div>
					<script type="text/javascript">
											$(document).ready(function(){
											 $('#logout').on("click",function(){	 
												   var logout="logout";
													$.ajax({  
														url:"login.php",  
														type:"POST",  
														data: {logout:logout},  
														success:function(data){ 
															if(data == 1){  
															location.reload();
															}
															else{
																alert(data);
															}
														}
													});  	  
												});	
											 });
					</script>
					</ul>
               </div>
          </div>
     </section>