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
	mysqli_query($conn,"update parent set parent_first_time='$parent_first_time' where parent_id='$parent_id'");
	header("Location:profile.php");
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
}
else{
	?>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#login").css("display","block");
		$("#user").css("display","none");
	});
	</script>
<?php
}
?>

<style>
#modal-form{
	padding-top:10px;
	overflow:auto;
}

#myModal{
	padding-top:100px;
}

#myModal input{
	color:white;
}

#myModal p{
	color:white;
}

.error{
	color:#F2220D;
}

</style>
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
                         <li><a href="homepage.php">Home</a></li>
                         <li><a href="register_page.php">Enrollment</a></li>
                         <li><a href="contact.php">Contacts</a></li>
						 <li><a href="about.php">About</a></li>
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
					
                    <ul class="nav navbar-nav navbar-right" id="login">
                         <a href="#" data-toggle="modal" id="join"  data-target="#modal-form"><li class="section-btn">Sign in / Join</li></a>
                    </ul>
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
	 
	 <!-- MODAL -->
     <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content modal-popup">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
					
					<script type="text/javascript">
					//Close and refresh the modal
						$(document).ready(function(){
							$(".close").on("click",function(){
								document.getElementById('email_error').innerHTML="";
								document.getElementById('password_error').innerHTML="";
								document.getElementById('ic_rule').innerHTML="For Example : 98xxxx0x5xxx";
								document.getElementById('phone_rule').innerHTML="For Example : 017xxxxxxx";
								document.getElementById('email_rule').innerHTML="For Example : hngjaankae@outlook.com";
								document.getElementById('password_rule').innerHTML="At least 8 letter or number";
								document.getElementById('confirm_password_rule').innerHTML="Confirm password must same with password";
								document.getElementById('error_name').innerHTML="";
								document.getElementById('error_ic').innerHTML="";
								document.getElementById('error_phone').innerHTML="";
								document.getElementById('error_email').innerHTML="";
								document.getElementById('error_password').innerHTML="";
								document.getElementById('error_confirm_password').innerHTML="";
							});
						});
					</script>

                    <div class="modal-body">
                         <div class="container-fluid">
                              <div class="row">
                                   <div class="col-md-12 col-sm-12">
                                        <div class="modal-title">
                                             <h2>Parent Registration</h2>
                                        </div>

                                        <!-- NAV TABS -->
                                        <ul class="nav nav-tabs" role="tablist">
                                             <li class="active"><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">User</a></li>
											 <li><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Create an account</a></li>
                                        </ul>

                                        <!-- TAB PANES -->
                                        <div class="tab-content">
                                             <div role="tabpanel" class="tab-pane fade in active" id="sign_in">
                                                  <form action="" name="login" method="post">
                                                       <input type="email" class="form-control" name="parent_email" id="parent_email" placeholder="Email">
													   <p id="email_error"></p>
                                                       <input type="password" class="form-control" name="parent_password" id="parent_password" placeholder="Password"  />
													   <p id="password_error"></p>
                                                       <input type="button" class="form-control" id="loginbtn" value="Sign in" />
                                                       <a href="#myModal" data-toggle="modal" style="text-decoration:none;">Forgot Password?</a>
                                                  </form>
                                             </div> 
								<script type="text/javascript">
									//Login validation
											$(document).ready(function(){
											 $('#loginbtn').on("click",function(){	 
												   var pemail=0,ppassword=0;
												   var login_email = $("#parent_email").val();  
												   var login_password = $("#parent_password").val();    
												   if(login_email == ''){  
													 document.getElementById('email_error').innerHTML="Email Invalid";
												   }
												   else{
													document.getElementById('email_error').innerHTML="";
													pemail=1;
												   }
												   if(login_password==''){
													document.getElementById('password_error').innerHTML="Password Invalid";
												   }
												   else{
													document.getElementById('password_error').innerHTML="";
													ppassword=1;
												   }
												   if(pemail==1 && ppassword==1){
													$.ajax({  
														url:"login.php",  
														type:"POST",  
														data: {email:login_email, password:login_password},  
														success:function(data){ 
															if(data == 1){  
																location.reload();
															}															
															else if(data == 2){
																document.getElementById('email_error').innerHTML="The Email Doesn't Exist";
															}
															else if(data == 3){
																document.getElementById('password_error').innerHTML="The Password Was Wrong";
															}
															else{
																alert(data);
															}
														}
													});  	  
												}	
											 });
											});
								</script>											 
								
                                             <div role="tabpanel" class="tab-pane fade in" id="sign_up">
                                                  <form action="" method="post">
                                                       <input type="text" class="form-control" id="register_name" placeholder="Name" />
													   <span id="error_name"></span>
													   <input type="text" class="form-control" id="register_ic" placeholder="NRIC No." maxlength="12"/>
													   <span id="error_ic"></span><span id="ic_rule" class="rule">For Example : 98xxxx0x5xxx</span>
                                                       <input type="telephone" class="form-control" id="register_phone" placeholder="Telephone" maxlength="10" />
													   <span id="error_phone"></span><span id="phone_rule" class="rule">For Example : 017xxxxxxx</span>
                                                       <input type="email" class="form-control" id="register_email" placeholder="Email"  />
													   <span id="error_email"></span><span id="email_rule" class="rule">For Example : hngjaankae@outlook.com</span>
                                                       <input type="password" class="form-control" id="register_password" placeholder="Password"  />
													   <span id="error_password"></span><span id="password_rule" class="rule">At least 8 letter or number</span>
													   <input type="password" class="form-control" id="register_confirm_password" placeholder="Confirm Password"  />
													   <span id="error_confirm_password"></span><span id="confirm_password_rule" class="rule">Confirm password must same with password</span>
													   <input type="button" class="form-control" id="registerbtn" value="Sign up" />
                                                  </form>	
                                             </div>
											 <script type="text/javascript">
											 //Register 
												 $('#registerbtn').on("click",function(){
												   var n=0,i=0,p=0,e=0,pp=0,cp=0;
												   var register_name = $("#register_name").val();  
												   var register_ic = $("#register_ic").val();
												   var register_phone = $("#register_phone").val();
												   var register_email = $("#register_email").val();
												   var register_password = $("#register_password").val();  
												   var register_confirm_password = $("#register_confirm_password").val();
												   var register_check_email =/^[a-z0-9][a-z0-9-_\.]+@[a-z0-9][a-z0-9-]+[a-z0-9]\.[a-z0-9]{2,10}(?:\.[a-z]{2,10})?$/;
												   if(register_name == ''){  
													 document.getElementById('error_name').innerHTML="Fill in the name";
												   }
												   else{
													document.getElementById('error_name').innerHTML="";
													n=1;
												   }
												   if(register_ic==''){
													document.getElementById('error_ic').innerHTML="Fill in the IC";
													document.getElementById('ic_rule').innerHTML="";
												   }
												   else if(register_ic.length< 12){
													document.getElementById('error_ic').innerHTML="The IC number was less then 12 number.<br /> Please include a proper IC number";
													document.getElementById('ic_rule').innerHTML="";
												   }
												   else{
													document.getElementById('error_ic').innerHTML="";
													i=1;
												   }
												   if(register_phone==''){
													document.getElementById('error_phone').innerHTML="Fill in the Phone";
													document.getElementById('phone_rule').innerHTML="";
												   }
												   else if(register_phone < 10){
													document.getElementById('error_phone').innerHTML="The phone number was less then 10 number.<br />Please include a proper phone number";
													document.getElementById('phone_rule').innerHTML="";
												   }
												   else{
													document.getElementById('error_phone').innerHTML="";
													p=1;
												   }
												   if(register_email==''){
													document.getElementById('error_email').innerHTML="Fill in the Email";
													document.getElementById('email_rule').innerHTML="";
												   }
												   else if(register_check_email.test(register_email)==0){
													document.getElementById('error_email').innerHTML="For Example : hngjaankae@outlook.com";
													document.getElementById('email_rule').innerHTML="";
												   }
												   else{
													document.getElementById('error_email').innerHTML="";
													e=1;
												   }
												   if(register_password==''){
													document.getElementById('error_password').innerHTML="Fill in the Password";
													document.getElementById('password_rule').innerHTML="";
												   }
												   else if(register_password.length < 8){
													document.getElementById('error_password').innerHTML="Password must be least 8 letter or number";
													document.getElementById('password_rule').innerHTML="";
												   }
												   else{
													document.getElementById('error_password').innerHTML="";
													pp=1;
												   }
												   if(register_confirm_password==''){
													document.getElementById('error_confirm_password').innerHTML="Fill in the Confirm Password";
													document.getElementById('confirm_password_rule').innerHTML="";
												   }
												   else if(register_password != register_confirm_password){
													document.getElementById('error_confirm_password').innerHTML="The Confirm Password and the Password must be the same";
													document.getElementById('confirm_password_rule').innerHTML="";
												   }
												   else{
													document.getElementById('error_confirm_password').innerHTML="";
													cp=1;
												   }
												   if(n==1 && i==1 && p==1 && e==1 && pp==1 && cp==1){
													$.ajax({  
														url:"register_parent.php",  
														type:"POST",  
														data:{
														register:1,
														name:register_name,
														ic:register_ic,
														phone:register_phone,
														confirm_password:register_confirm_password,
														email:register_email, 
														password:register_password,
														},  
														success:function(data){   
															if(data == "pass"){
															alert("Register Successful");
															location.reload();
															}
															else if(data=="student_ic"){
															document.getElementById('error_ic').innerHTML="The IC Already Existed";
															document.getElementById('ic_rule').innerHTML="";
															}
															else if(data=="name"){
															document.getElementById('error_name').innerHTML="The Name Already Be Used";
															document.getElementById('name_rule').innerHTML="";
															}
															else if(data=="phone"){  
															document.getElementById('error_phone').innerHTML="The Phone Has Been Used";
															document.getElementById('phone_rule').innerHTML="";
															}
															else if(data=="email"){
															document.getElementById('error_email').innerHTML="The Email Already Existed";
															document.getElementById('email_rule').innerHTML="";
															}
															else if(data=="ic"){
															document.getElementById('error_ic').innerHTML="The IC Already Existed";
															document.getElementById('ic_rule').innerHTML="";
															}
															else{
																alert(data);
															}
														}
													});  	  
												  }
											 });
											 </script>
											 
                                        </div>

                              </div>
                         </div>
                    </div>

               </div>
          </div>
		  </div>
     </section>

<!--Forgot password Modal-->	 
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<div class="modal-title">
            <h2 id="myModalLabel">Forgot Password</h2>
			</div>
          </div>
		   <div class="modal-body">

 <form>
 <div class="form-group">
 <p>
 Type your email below and we will send you password recovery instruction to your email.
</p>	  
 <p>Enter Your Email:</p><input type="email" class="form-control" id="reset_email" placeholder="hngjaankae@outlook.com" />
 <div class="error" id="reset_email_error"></div>
 </div>
<p><button id="request" type="button" class="btn btn-primary">Request</button></p>
 </form>
 </div>
        </div>
      </div>
    </div>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>	
<script>
	$(document).ready(function(){
	$("#request").on("click",function(){
		var request_email=0;
		var request_val=$("#reset_email").val();
	if(request_val==""){
		$("#reset_email_error").text("Please fill up your email");
		request_email=0;
	}
	else{
		$("#reset_email_error").text("");
		request_email=1;
	}
	if(request_email==1){
		$.ajax({  
			url:"forget_password.php",
			type:"POST",
			data:{
				reset_email:request_val,
				},
			success:function(data){   
				if(data==1){
					swal({
						title: "Successful!",
						text:"You can check your email to reset password.",
						icon:"success"
						});

				}
				else{
				swal({
					title: "OPPS Email Incorrect!",
					text:"Please key in correct E-mail!",
					icon:"error"
					});
				}
			}	
		})
	}
	});
	});
</script>