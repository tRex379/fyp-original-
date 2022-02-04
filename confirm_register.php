<?php include("dbconnect.php"); 
if(isset($_SESSION['check_after_payment'])){
?>
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
#register_fee
{
	background-color:#636662;
	margin-bottom:20px;
	margin-top:20px;
}

#register_fee p
{
	color:white;
	padding-top:10px;
	font-size:15px;
	margin-left:10px;
	margin-right:10px;
}

#register_info{
	padding-bottom:0;
}

#register,#spm_register
{
	margin-top:25px;
	font-size:20px;
	text-align:left;
}


#student_name,#spm_student_name
{
	margin-bottom:20px;
}

#student_ic,#spm_student_ic
{
	margin-left:4px;
	margin-top:10px;
}

#student_join_date,#spm_student_join_date
{
	margin-bottom:20px;
}

#gender,#spm_gender
{
	margin-top:20px;
}

#pt3,#spm
{
	margin-top:15px;
	font-size:20px;
}

#total_fee{
	padding:0;
}

#individual,#spm_individual
{
	margin-top:10px;
	margin-bottom:20px;
	padding:0;
}

#confirm
{
	margin-bottom:30px;
}

input[type="button"]
{
	background-color:#6076DC;
	color:white;
	border:0;
}

#transcript,#spm_transcript
{
	border:1px ridge silver;
	margin-bottom:20px;
	padding-bottom:10px;
}

legend{
	border:0;
}

#upload_details{
	width:25.5%;
	margin-bottom:0;
}

#submitbtn,#spm_submitbtn,#backbtn,#spm_backbtn
{
	border:0;
	background-color:#6076DC;
	color:white;
	float:right;
}

.card_total_amount{
	float:left;
	padding-left:20px;
	color: #757575;
    font-size: 17px;
	font-weight: 700;
    line-height: 25px;
    font-family: 'Poppins', sans-serif;
}

.modal-dialog .modal-content{
	background:white;
	padding:0;
	text-align:left;
}

.modal-dialog{
	width:600px;
}

.modal-title{
	text-align:left;
	padding-top:10px;
	padding-left:10px;
	color:white;
	font-family: "Segoe UI",Arial,sans-serif;
    font-weight: 400;
}

.modal-header{
	background:#4285F4;
	padding:10px;
}

.close span{
	color:white;
}

.divsubmitbtn{
	margin-top:10px;
}

.modal-footer{
	padding:15px;
}

#MM,#YY{
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

#MM:focus,#YY:focus{
	border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102,175,233,.6);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102,175,233,.6);
}

.error{
	color:#F2220D;
}
</style>
<body>	
    <?php include('profile_menu.php'); ?>
	<!-- PT3 -->
	<input type="hidden" class="level" value="<?php echo $_GET['level']; ?>" />
	<section id="register_form">
		  <div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
				<h3>Registration Children <?php echo $_GET['level']; ?></h3>
				</div>
				
	 <div id="register" class="col-md-8 col-md-offset-1">
	 <form action="" id="register_form" data-ajax="false">
	 <div id="left" class="col-md-offset-4 col-md-5" style="padding:0;">
		<div id="student_name">Children Name : <span id="student_name_val" name="student_name"><?php echo $_GET['student_name']; ?></span></div>
		<div id="student_ic">NRIC No. : <span id="student_ic_val" name="student_ic"><?php echo $_GET['student_ic'];?></span></div>
		<div id="gender">Gender : <span id="student_gender_val" name="student_gender"><?php echo $_GET['gender']; ?></span></div>
	</div>
	<div id="right" class="col-md-3" style="padding:0; margin-left:-5%;">
		<div id="student_join_date">Join Date : <span id="student_join_date_month_val"><?php echo $_GET['student_join_date']?></span><span id="student_join_date_year_val"> <?php echo $_GET['year'];?> </span></div>
		<div id="student_end_date">End Date : <span id="student_end_date_val"><?php echo $_GET['student_end_date'];?></span></div>
	</div>
		<div id="individual" class="col-md-10 col-md-offset-4">
					<div id="pt3" class="col-md-6" style="padding:0;">
					<span id="level" name="student_level"><?php echo $_GET['level'];?></span> Subject : <br />
					<?php
					$total_fee=0;
					$subject=$_GET['subject_name'];
					$subject=json_decode($subject,true);
					$subject_fee=$_GET['fee'];
					if(!empty($_GET['subject_name'])){
					$i=1;
					foreach($subject as $subject_name => $subject_time){
						echo "<div id='student_subject".$i."' name='student_subject".$i."'>".$subject_name."</div> (<span id='subject".$i."_time'>".$subject_time."</span>)";
						$i++;
					}
					}
					?>
					</div>
					<div id="pt3" class="col-md-6 col-md-pull-1">
					Subject Fee : <br />	
					<div class="col-md-12" style="padding:0px;">
					<?php
					if(!empty($_GET['subject_name']) && !empty($_GET['subject_fee'])){
						foreach($subject as $subject_name => $subject_time){
						echo "<span>".$subject_name."</span> : RM<span id='subject".$i."_fee' class='subject_fee'> ".$subject_fee." </span><br />";
						$total_fee+=$subject_fee;
						}
					}
					echo "<span class='total_fee'>Total Subject Fee : "." RM <span id='total_subject_fee'>$total_fee</span></span>";
					?>
					</div>
					</div>
			</div>
			<input type="hidden" id="subject_name" value='<?php echo $_GET['subject_name'];?>'/>
			<input type="hidden" id="subject_fee" value='<?php echo $_GET['subject_fee'];?>' />
			<input type="hidden" id="subject_venue" value='<?php echo $_GET['subject_venue'];?>' />
				<div id="register_fee" class="col-md-8 col-md-offset-4" style="text-align:center">
				<p> Kindly make booking fee of RM50 to secure your child's spot . The RM50 will be credited towards the registration fees . After the registration is complete parent have to pay the subject fee every month started from the student join date.</p>
				<br />
				<p> CIMB : Smart Tuition Center</p>
				<p> Account No :  512754529659 </p>
				<p> Note : Kindly info the registration fees will be confirm within 24 hours. </p>
			</div>
		<fieldset id="transcript" class="col-md-offset-4 col-md-8">
				<legend id="upload_details"><h4><b><u> Submission Details </u></b></h4></legend>
				<span id="amount">Register Fees : RM <?php echo 50 ?></span>
				<!--<img src="" height="200" /> -->
		</fieldset>
		<div class="col-md-2 col-md-offset-3">
		<input type="button" id="backbtn" onclick="history.go(-1);" value="Back" /></a>
		</div>
		<div class="col-md-2 col-md-offset-5">
		<input type="button" id="submitbtn" value="Submit" data-toggle="modal" data-target="#checkout-form"/>
		</div>
	 </form>
	</div>
	
		 <!-- MODAL -->
     <section class="modal fade" id="checkout-form" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-header">
					<h4 class="modal-title">Enter Your Card Details</h4>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
					   <div class="modal-body">
                         <div class="container-fluid">
                              <div class="row">
                                   <div class="col-md-12 col-sm-12">
								   <div class="col-md-12">
								   <div class="form-group">
										<label for="name_cardholder"><div class="col-md-12" style="padding:0; margin-top:10px;">Name of Cardholder</div></label>
										<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span><input type="name" class="form-control input-lg" placeholder="Name" id="name_cardholder" />
										</div>
										<div class="name_error error"></div>
								  </div>
								  </div>
								  <div class="col-md-12">
									<div class="form-group">
										<label for="card_number"><div style="padding:0;" class="col-md-12">Card Number <span id="card_type">[]</span></div></label>
										<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-credit-card"></i></span><input type="name" maxlength="19" placeholder="•••• •••• •••• ••••" class="form-control input-lg" id="card_number" />
										</div>
										<div class="card_error error"></div>
								  </div>
								  </div>
								  <div class="col-md-7">
									<div class="form-group">
										<label for="cc-exp"><div style="padding:0;" class="col-md-12">Expiration (MM/YY)</div></label>
										<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="MM" type="tel" class="input-md col-md-2 cc-exp" placeholder="••" name="cardexpiry" maxlength="2"/><span class="col-md-1" style="padding-top:3px; padding-left:10px; font-size:20px;">/</span><input id="YY" type="tel" class="col-md-2 cc-exp input-md " placeholder="••" name="cardexpiry" maxlength="2"/>
										</div>
										<div class="cc_exp_error error"></div>
									</div>
								  </div>
								<div class="col-md-5">
									<div class="form-group">
										<label for="cc-cvc"><div style="padding:0;" class="col-md-12">CVC Code</div></label>
										<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span><input id="cc-cvc" type="tel" class="input-md form-control cc-cvc" maxlength="3" autocomplete="off" placeholder="•••" data-payment="cc-cvc" name="cardcvc" >
										</div>
										<div class="cvc_error error"></div>
								  </div>
									</div>
								   </div>
								</div>
						 </div>
					  </div>
					  <div class="modal-footer">
						<span class="card_total_amount">Total Amount : RM<span id="registration_fee"><?php echo 50; ?></span> </span>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" name="cardbtn" class="btn btn-warning" id="validate">
							COMPLETE PAYMENT
						</button>
						<input type="hidden" value="<?php echo date("d/m/Y")  ?>"  class="payment_date"/>
						<input type="hidden" value="<?php echo $_GET['student_join_date_val'];?>" class="student_join_date_val"/>
					  </div>
				</div>
		</div>
	</section>
	<script type="text/javascript">
	//Submit student details to database
		$(document).ready(function(){
			var name=0;
			$("#name_cardholder").on('keyup change', function () {
				if($(this).val()==""){
					$(".name_error").text("*Please fill the name");
					name=0;
				}
				else{
					$(".name_error").text("");
					name=1;
				}
			});
			
		   var card=0;
		   $('#card_number').on('keypress change', function(){
			$(this).val(function (index, value) {
			return value.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
			});			 
		   });
		   
		   $('#card_number').on('keyup', function(){
			var card_type=$(this).val();
			if(isNaN(card_type)){
				$(".card_error").text("*Please enter a valid card number");
				card=0;
			}
			else if(card_type==""){
				$(".card_error").text("*Please enter a valid card number");
				card=0;
			}

			var card_type=$(this).val();
			card_visa=card_type.substring(0,1);
			card_master=card_type.substring(0,2);
			if(card_visa==4){
				$('#card_type').text("[VISA]");
				$(".card_error").text("");
				card=1;
			}
		   else if(card_master==51||card_master==52||card_master==53||card_master==54||card_master==55){
				$('#card_type').text("[Master Card]");
				$(".card_error").text("");
				card=1;
			}
			else{
				$('#card_type').text("[]");
				$(".card_error").text("*Please enter a valid card number");
				card=0;
			}
		   });
		   
		   var cvc=0;
		   $('#cc-cvc').on('keyup change', function () {
				if($(this).val()==""){
					$(".cvc_error").text("*Please fill the CVC code");
					cvc=0;
				}
				else if(isNaN($(this).val())){
					$(".cvc_error").text("*Please enter a valid CVC");
					cvc=0;
				}
				else{
					$(".cvc_error").text("");	
					cvc=1;
				}
		   });
		   
		      var MM=0;
			  var YY=0;	
		    $("#MM").on("keyup change",function(){
				var today = new Date(); 
				var expDate = $(this).val();
				today=today.getMonth()+1;
				if(YY==0){
					$(".cc_exp_error").text("*Please enter a valid expiration date.");
					if(today < expDate){
						MM=1;
					}
				}
				else if($("#YY").val()==""){
					$(".cc_exp_error").text("*Please enter a valid expiration date.");
					MM=0;
				}
				else if(isNaN(expDate)){
					$(".cc_exp_error").text("*Please enter a valid expiration date");
					MM=0;
				}
				else if(today >= expDate) {
					$(".cc_exp_error").text("*Please enter a valid expiration date");
					MM=0;
				}
				else{
					$(".cc_exp_error").text("");
					MM=1;
				}
            });
			
			function formatDate(d){
				var year = d.getFullYear();
				year = year.toString().substr(0,2);
				return year;
			}
			 $("#YY").on("keyup change",function(){
				var expDate = $(this).val();
				var today=new Date();
				today=formatDate(today);
				if(MM==0){
					if(today < expDate){
						YY=1;
					}
				}
				else if(isNaN(expDate)){
					$(".cc_exp_error").text("*Please enter a valid expiration date.");
					YY=0;
				}
				else if($("#MM").val()==""){
					$(".cc_exp_error").text("*Please enter a valid expiration date.");
					YY=0;
				}
				else if(today > expDate){
					$(".cc_exp_error").text("*Please enter a valid expiration date.");
					YY=0;
				}
				else{
					$(".cc_exp_error").text("");
					YY=1;
				}
            });
			
			
			
			$('#validate').on('click',function(){
				var name_cardholder=$('#name_cardholder').val();
			var card_number=$('#card_number').val();
			var MM=$('#MM').val();
			var YY=$('#YY').val();
			var CVC=$('#cc-cvc').val();
			if(name_cardholder==""){
				$(".name_error").text("*Please fill up the name");
				name=0;
			}
			else{
				name=1;
				$(".name_error").text("");
			}
			if(card_number==""){
				card=0;
				$(".card_error").text("*Please fill up the card number");
			}
			else if(card_number.length<19){
				card=0;
				$(".card_error").text("*Please enter a valid card number");
			}
			else{
				card=1;
				$(".card_error").text("");
			}
			if(MM==""||YY==""){
				$(".cc_exp_error ").text("*Please fill up the expiration date");
				YY=0;
				MM=0;
			}
			else if(MM.length<=1||YY.length<=1){
				$(".cc_exp_error").text("*Please enter a valid expiration date");
				YY=0;
				MM=0;
			}
			else if(isNaN(MM)||isNaN(YY)){
					$(".cc_exp_error").text("*Please enter a valid expiration date");
					MM=0;
					YY=0;
			}
			else{
				$(".cc_exp_error ").text("");
				YY=1;
				MM=1;
			}
			if(CVC==""){
				$(".cvc_error").text("*Please fill up the expiration date"); 
				cvc=0;
			}
			else if(CVC.length<=2){
				$(".cvc_error").text("*Please enter a valid CVC");
				cvc=0;
			}
			else if(isNaN(CVC)){
					$(".cvc_error").text("*Please enter a valid CVC");
					cvc=0;
			}
			else{
				$(".cvc_error ").text("");
				cvc=1;
			}
				if(name==1 && card==1 && cvc==1 && MM==1 && YY==1){
				var science_val=$('#science_val').text();
				var science_time=$('#science_time').text();
				var science=science_time;
				var subject_fee=$('#subject_fee').val();
				var subject_name=$('#subject_name').val();
				var total_fee=$('#total_subject_fee').text();
				var subject_venue=$('#subject_venue').val();
				var registration_fee=$('#registration_fee').text();
				var form_data = new FormData();
				form_data.append('student_name',$('#student_name_val').text());
				form_data.append('student_ic',$('#student_ic_val').text());
				form_data.append('student_gender',$('#student_gender_val').text());
				form_data.append('student_join_date_month_val',$('#student_join_date_month_val').text());
				form_data.append('student_join_date_year_val',$('#student_join_date_year_val').text());
				form_data.append('student_join_date_val',$('.student_join_date_val').val());
				form_data.append('student_end_date',$('#student_end_date_val').text());
				form_data.append('payment_date',$('.payment_date').val());
				form_data.append('student_level',$('#level').text());
				form_data.append('student_subject',subject_name);
				form_data.append('student_subject_fee',subject_fee);
				form_data.append('student_subject_venue',subject_venue);
				form_data.append('student_subject_total_fee',total_fee);
				form_data.append('registration_fee',registration_fee);
						$.ajax({
						url:"register_student.php",
						method:'POST',
						data:form_data,
						datatype:"json",
						contentType:false,
						processData:false,
						success:function(data){
							if(data==1){
							alert("Payment Successful");
							window.location="profile.php";
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
<?php 
}
else{
	header("Location:register_page.php");
}
?>