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
.payment_tab{
	margin-left:14%;
}
.nav-tabs{ 
	border-bottom: 2px solid #DDD; 
}

.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover{ 
	border-width: 0; 
}

.nav-tabs > li > a { 
	border: none; 
	color: #666; 
}

.nav-tabs > li.active > a, .nav-tabs > li > a:hover {
	border: none; 
	color: #4285F4 !important;
	background: transparent;	
}

.nav-tabs > li > a::after { 
	content: ""; 
	background: #4285F4;
	height: 2px;
	position: absolute; 
	width: 100%; 
	left: 0px; 
	bottom: -1px; 
	transition: all 250ms ease 0s;
	transform: scale(0);
}

.nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { 
	transform: scale(1); 
}

.tab-nav > li > a::after{
	background: #21527d none repeat scroll 0% 0%;
	color: #fff; 
}
	
.card{
	background: #FFF none repeat scroll 0% 0%;
	margin-bottom: 30px;
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

.card{
	margin-top:100px;
}

#payment{
	padding-top:0;
}

.subject_register
{
	text-align:left;
	margin-top:25px;
	height:300px;
}

.subject_register p
{
	margin-top:10px;
}

td,tr,th
{
	padding:5px;
}

.bank_name,.total_subject_fee
{
	color:black;
	font-family:Arial;
	font-size:15px;
}

.bank_account
{
	color:black;
	font-family:Arial;
	font-size:15px;
}

.what_i_owe
{
	border:0px solid blue;
	border-left-style:hidden;
	border-right-style:hidden;
	border-top-style:hidden;
	background-color:#6076DC;
	color:white;
	margin:0;
	font-size:19px;
}

.owe_description{
	padding: .857em .587em;
}

#subtotal{
	padding: .857em .587em;
	border-bottom:1px solid rgba(0,0,0,.1);
	border-radius:10px;
}

.owe_info
{
	margin-left:50px;
	margin-top:20px;
	margin-bottom:20px;
}

.owe
{
	margin-top:15px;
	margin-bottom:10px;
	padding:0;
	margin-left:15px;
	border:1px solid rgba(0,0,0,.1);
	border-radius:10px;
}

.upload{
	margin-top:10px;
}

#printbtn{
	border:0;
	background-color:#6076DC;
	color:white;
	border-radius:0;
}

.pull-right{
	float:right !important
}

.pagination{
	display:inline-block;
	padding-left:0;
	margin:20px 0px;
	border-radius:4px;
}

#pagination_data{
	margin-top:35px;
}

#no_history{
	margin-top:70px;
	margin-bottom:30px;
}

th{
	text-align:center;
}

.account{
	margin-top:20px;
	text-align:left;
	padding-bottom:15px;
	height:100%;
}

#student_payment{
	margin-top:20px;
	border:1px solid rgba(0,0,0,.1);
}

.student{
	text-align:left;
}

.payment_student_name{
	padding-right:0;
	text-align:left;
}

.payment_student_name,input[type="checkbox"]{
	cursor:pointer;
	margin-top:20px;
}

#submitbtn{
	border-radius:5px;
	color:white;
	background-color:#962715;
	padding:5px 20px 5px 20px;
	border: 2px solid #962715;
}

#submitbtn:hover,#submitbtn:focus{
	background:#962715;
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

.card_total_amount{
	float:left;
	padding-left:20px;
	color: #757575;
    font-size: 17px;
	font-weight: 700;
    line-height: 25px;
    font-family: 'Poppins', sans-serif;
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

#account_payment{
	margin-top:30px;
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

#student_info{
	margin-top:100px;
	margin-bottom:40px;
}

.warning ul{
	text-align:left;
	color:#F2220D;
	margin-top:20px;
}
</style>
<body>
	<?php 
	include('profile_menu.php'); 
	?>
<section id="payment">
<div class="container-fluid">
<div class="row">
	<div class="col-md-8 payment_tab">
      <!-- Nav tabs -->
	  <div class="card">
       <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Summary</a></li>
		 <li role="presentation"><a href="#make_payment" aria-controls="make_payment" role="tab" data-toggle="tab">Payment</a></li>
        <li role="presentation"><a href="#payment_history" aria-controls="payment_history" role="tab" data-toggle="tab">Payment History</a></li>
       </ul>
		
      <!-- Tab panes -->
	  <div class="tab-content">
	    <div role="tabpanel" class="tab-pane active" id="summary">
  <?php 
	$result_student=mysqli_query($conn,"select * from student where parent_id_fk='$parent_id' and activate='1' and isdeleted='0' and parent_barred_status='unbarred' or parent_id_fk='$parent_id' and activate='0' and isdeleted='1' and parent_barred_status='barred' or parent_id_fk='$parent_id' and activate='0' and isdeleted='1' and parent_barred_status='blocked' or parent_id_fk='$parent_id' and activate='1' and isdeleted='0' and parent_barred_status='barred' or parent_id_fk='$parent_id' and activate='1' and isdeleted='0' and parent_barred_status='blocked'");
	$total_amount=0; 
	$barred_status=$row_parent['barred_status'];

	if(mysqli_num_rows($result_student)!=0){
	while($row_student=mysqli_fetch_assoc($result_student)){
	$total_subject=0; 
	$i=1;
	?>
	<div class="subject_register col-md-6">
	<div class="student_name col-md-7">Student Name: <?php echo $row_student['student_name'];?></div>
		<span class="student_standard col-md-6">Standard : <?php echo $row_student['student_level'];?> </span>
		<span class="student_standard col-md-12">Join Date : <?php echo $row_student['student_join_date_month'];?> </span>
		<div class="student_table col-md-12">
		<table border>
		  <tr>
			<th>No.</th>
			<th>Subject Name</th>
			<th>Subject Fee Per Month </th>
		  </tr>
		  <?php 
		  $student_subject_fee=$row_student['student_subject_fee']; 
		  $subject_fee=json_decode($student_subject_fee);
		  $student_total_subject_fee=$row_student['student_total_subject_fee']; 
		  foreach($subject_fee as $subject_name => $subject_fee){
		  $subject_name=str_replace("_"," ",$subject_name);
		  ?>
			<tr>
				<td> <?php echo $i ?>. </td>
				<td> <?php echo $subject_name ?></td>
				<td> RM<?php echo $subject_fee ?> </td>
			</tr>
		 <?php 
		 $i+=1;
		 $total_subject+=1;
		 }
		 ?>
		</table>
		</div>
		<div class="total_fee col-md-12">
		<p><b>Total Subject : <?php echo $total_subject; ?> </b></p>
		<p><b>Total Subject Fee</b> : <span class="total_subject_fee"> RM<?php echo $student_total_subject_fee; ?> </span></p>
		</div>
	</div>
	<?php
	$i+=1;
	if(!empty($student_total_subject_fee)){
		$total_amount+=$student_total_subject_fee;
	}
	}
	}
	
	
	else{
	?>
		<div id='student_info' class='col-md-12'> ----------------- There was no student need to pay ------------------------- </div>
	<?php
	}
	?>
	</div>
		<div role="tabpanel" class="tab-pane" id="payment_history">
		<div class="col-md-12" id="pagination_data">

		</div>
	</div>
	
	<div role="tabpanel" class="tab-pane" id="make_payment">
	
	<?php 
		$payment_status=$row_parent['parent_payment'];
		if($payment_status=='unpaid' && $total_amount > 1){
	?>
	<form>
		<div class="col-md-12">
		<div class="account col-md-4">
		<h3 class="col-md-12 outstanding_payment">Payment Summary</h3>
		<div class="owe col-md-12">
		<span class="col-md-12" id="subtotal">Subtotal (<?php echo mysqli_num_rows($result_student); ?> Student)</span>
			<div class="owe_description col-md-12">Total Amount: RM<span id="total_amount"><?php echo $total_amount;?></span></div>
		</div>
		<div class="divsubmitbtn col-md-12">
		<a href="#" id="payment" data-toggle="modal" data-target="#checkout-form"><input type="button" class="section-btn col-md-10" id="submitbtn" value="Make Payment" /></a>
		</div>
		</div>
		</div>
		<div class="col-md-12 warning">
			<ul>
			  <ul class="list-unstyled">
				<li style="margin-left:-5%;">*Warrning : </li>
			  </ul>
				<li> If parent didn't pay before every 22th of current month, parent will be barred and will be blocked soon.</li>
				<li> If parent didn't pay the payment until the 7th of the next month, parent will be blocked and student cannot enter their classes.</li>
			</ul>
		</div>
	</form>
	<?php
	}
	else if($payment_status=='paid' || $total_amount==0){
	?>
	<div class="col-md-12">
		<div class="account col-md-6">
		<h3 class="col-md-12 outstanding_payment">Payment Summary</h3>
		<div class="owe col-md-12">
		<span class="col-md-12" id="subtotal">Currently you have no outstanding charge at this time</span>
		</div>
		</div>
	</div>
	<?php 
	}
	?>
	</div>
	</div>
         </div>
	</div>
</div>
</div>
</section>

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
										<span class="input-group-addon"><i class="fa fa-user"></i></span><input type="name" class="form-control input-lg " placeholder="Name" id="name_cardholder" />
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
						<span class="card_total_amount">Total Amount: RM<span id="total_amount_fee"><?php echo $total_amount;?></span></span> 
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" name="cardbtn" class="btn btn-warning" id="validate">
							COMPLETE PAYMENT
						</button>
						<input type="hidden" value="<?php echo date("d/m/Y")  ?>"  class="payment_date"/>
					  </div>
				</div>
		</div>
	</section>
	 <script type="text/javascript">
		$(document).ready(function(){
		   load_data();  
		   $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
		   });  
		   function load_data(page){  
           $.ajax({  
                url:"payment_page.php",  
                method:"POST",  
                data:{page:page},  
                success:function(data){
                     $('#pagination_data').html(data);  
                }
           })  
		   }
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
			else{
				$(".cvc_error ").text("");
				cvc=1;
			}
		if(name==1 && card==1 && cvc==1 && MM==1 && YY==1){
		var total_amount=$('#total_amount').text();
		var payment_date=$('.payment_date').val();
		var form_data = new FormData();
		form_data.append('total_amount',total_amount);
		form_data.append('payment_date',payment_date);
			$.ajax({
				url:"pay_subject.php",
				method:'POST',
				data:form_data,
				contentType:false,
				processData:false,
				success:function(data){
					if(data==1){
					alert("Payment Successful");
					location.reload();
					}
					else{
					alert(data);
					}
				}		
			});
		}
		});
		});
		
		// for($i=0;i<$count;$i++){
		// $a=$checking_crashing[$i]['time'];
		// $b=$checking_crashing[$i+1]['time'];
		// if()
	// }

		// for($i=0;$i<$count;$i++){
		// $a=array_values($subject_name)[$i+1];
		// $b=$subject_name[$i+1];
		// if(!array_key_exists($i,$checking_crashing)){
			// $subject_name[$i]="";
		// }
		// echo $a;
	 </script>
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