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
	 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css" />
	 <link rel="stylesheet" href="css/newtemplate.css" />
</head>
<style type="text/css">
#schedule{
	margin-top:120px;
	text-align:left;
	padding-bottom:0;
}

input[type="text"],input[type="email"]
{
	padding:5px;
}

#register_form,#spm_register_form{
	padding-top:100px;
	padding-bottom:30px;
}

#subject_details table,#spm_subject_details table{
	margin-left:35%;
}

#subject_details th,#spm_subject_details th
{
	background-color:black;
	color:white;
	padding:2px 50px 2px 50px;
}

#subject_details td,#spm_subject_details td
{
	padding-left:40px;
	padding-top:10px;
	padding-bottom:10px;
	font-style:italic;
	font-size:20px;
	padding-right:20px;
}

#register_children,#spm_register_children{
	margin-top:50px;
	margin-bottom:50px;
}

#register,#spm_register
{
	font-size:20px;
	margin-top:-20px;
	padding-top:10px;
}

#student_name input[type="text"],#spm_student_name input[type="text"]
{
	margin-left:36px;
}

#student_ic input[type="text"],#spm_student_ic input[type="text"]
{
	margin-left:99px;
}

#student_join_date,#student_end_date,#spm_student_join_date,#spm_student_end_date
{
	margin-top:20px;
	text-align:left;
}

#gender,#spm_gender{
	text-align:left;
	margin-left:50px;	
}

#spm_error_student_ic,#spm_error_student_name,#pt3_error_student_name,#pt3_error_student_ic{
	color:#F2220D;
}

#spm_confirm_gender,#confirm_gender{
	margin-top:10px;
}

#gender select,#spm_gender select{
	margin-left:95px;	
}

#pt3,#spm
{
	margin-bottom:10px;
}

#science_time_1,#science_time_2,#english_time_1,#english_time_2,#math_time_1,#math_time_2,#bahasa_melayu_time_1,#bahasa_melayu_time_2,#add_math_time_1,#add_math_time_2,#physics_time_1,#physics_time_2,#biology_time_1,#biology_time_2,#chemistry_time_1,#chemistry_time_2{ 
	display:none;	
}

#individual,#spm_individual
{
	margin-top:20px;
	margin-bottom:20px;
	text-align:left;
	margin-left:12%;
}

input[type="radio"]
{
	margin:5px;
	width:20px;
	height:20px;
}

input[type="checkbox"]
{
	margin:5px;
	width:20px;
	height:20px;
}

label{
	margin-top:10px;
}

#submitbtn,#spm_submitbtn
{
	margin-top:30px;
}

input[type="button"]
{
	background-color:#6076DC;
	color:white;
	border:0;
	margin-bottom:10px;
}

#timetable{
	padding:0;
}

#spm_term,#term{
	padding-left:0;
}

#join_date,#spm_join_date{
	margin-top:20px;
	padding-left:0;
}

#table{
	padding-left:100px;
	padding-right:100px;
}

.subject_time{
	display:none;
}
</style>
<body>
  <?php 
		   include('profile_menu.php');
		   if($_GET['level']=='PT3'){
		   $result=mysqli_query($conn,"select * from subject where Standard_Name='PT3'"); 
		   $row=mysqli_fetch_assoc($result);
		   $subject_number=mysqli_num_rows($result);
		   }
		   else if($_GET['level']=='SPM'){
		   $result=mysqli_query($conn,"select * from subject where Standard_Name='SPM'"); 
		   $row=mysqli_fetch_assoc($result);
		   $subject_number=mysqli_num_rows($result);
		   }
	 ?>
	<!-- Register Form -->
	<input type="hidden" class="level" value="<?php echo $_GET['level']; ?>"/>
	<?php 
			$curr_month = date("m");
			$month = array ("January", "February", "March", "April", "May", "June", "July",   "August", "September", "October", "November", "December");
			$month = array_slice($month, $curr_month-1);
			$select = "<select id=\"month\">\n";
			foreach ($month as $key => $val){
			$select .= "\t<option value=\"".$val."\"";
			if ($key == 0){
			$select .= ">".$val."</option>\n";
			} else {
			$select .= ">".$val."</option>\n";
			}
			}
		$select .= "</select>";
	?>
	<!-- PT3 -->
		<section id="register_form">
		  <div class="container">
			<div class="row">
			<div id="subject_details" class="col-md-12">
					<table border>
						<tr>
							<th><?php echo $_GET['level']; ?></th>
							<th> Tuition Fee</th>
						</tr>
						<tr>
							<td colspan="2">1 Subject RM<?php echo $row['Subject_Fee']; ?> Per Month </td>
						</tr>
						<tr>
							<td colspan="2"><span id="subject_number"><?php echo $subject_number;?></span> Subjects RM<?php echo $row['Subject_Fee']*$subject_number; ?> Per Month </td>
						</tr>
					</table>
			</div>
				<div class="col-md-offset-1 col-md-10">
				<h3 id="register_children"><?php echo $_GET['level'];?> Register Children</h3>
				</div>

	 <div id="register" class="col-md-12">
	 <form action="">
	 <div  class="col-md-6 col-md-offset-1">
		<div id="student_name">Children Name<input type="text" id="confirm_student_name" placeholder="Children Name" /></div>
		<span class="col-md-offset-3" id="pt3_error_student_name"></span>
		<div id="student_ic">NRIC No.<input type="text" id="confirm_student_ic" placeholder="98XXXX0X51XX" maxlength="12"/></div>
		<span class="col-md-offset-2" id="pt3_error_student_ic"></span>
		<div id="gender">Gender
		<select name="gender" id="confirm_gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>
		</div>
	</div>
	<div class="col-md-4" style="margin-top:-20px;">
		<div id="term" class="col-md-10"><b><u>Open Registration Date</u></b></div>
		<div id="student_join_date" class="col-md-12">Date : <span id="student_join_date_val"><?php echo $_GET['student_join_date']; ?></span></div>
		<div id="student_end_date" class="col-md-12">End Date : <span id="student_end_date_val"> <?php echo $_GET['student_end_date']; ?></span></div>
		<div id="join_date" class="col-md-5"><b><u>Join Date</u></b></div>
		<div id="student_join_date" class="col-md-12">Month : <?php echo $select;?><input type="hidden" value='<?php echo date("Y"); ?>'  id="year" /> </div>
	</div>
		<div id="individual" class="col-md-offset-1 col-md-11">
		<div id='<?php echo $_GET['level'] ?>'><span id="level"><?php echo $_GET['level'] ?></span> subject:</div>
					<?php
					$level=$_GET['level']; 
					$i=1;	
					$result1=mysqli_query($conn,"select * from subject where Standard_Name='$level'");
					while($row1=mysqli_fetch_assoc($result1)){
					?>
					<div class="col-md-6">
					<label for='subject<?php echo $i?>'><div id='subject<?php echo $i?>_checked'><?php echo $row1['Subject_Name']?></div></label><input type='checkbox' id='subject<?php echo $i?>' class="subject" value='<?php echo $row1['Subject_Name']?>' />
					<?php
					$subject=$row1['Subject_Name'];
					$result_subject_time=mysqli_query($conn,"select * from schedule,class,subject where schedule.class_id=class.Class_ID and subject.Subject_Name='$subject' and class.Subject_ID=subject.Subject_ID");
					$j=1;
					while($row_subject_time=mysqli_fetch_assoc($result_subject_time)){
					?>
					<div class="subject<?php echo $i ?>_time" style="display:none;">
					<label for='subject<?php echo $i?>_<?php echo $j?>'><div><?php echo $row_subject_time['day'] ?>(<?php echo $row_subject_time['time']?>)<input type='radio' id='subject<?php echo $i?>_<?php echo $j?>' name='<?php echo $subject?>' value='<?php echo $row_subject_time['day']." ".$row_subject_time['time']?>'/></div></label>	
					</div>
					<?php	
					$j++;
					}
					?>
					</div>
					<?php
					$i++;
					}
					?>
		<div class="col-md-2 col-md-offset-8">
		<input type="button" id="submitbtn" name="submitbtn" value="Confirm" />
		</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				var science_time="";
				var english_time="";
				var math_time="";
				var bahasa_melayu_time="";
				var science="";
				var english="";
				var math="";
				var bahasa_melayu="";
				var subject_name=new Array();
				var science_fee="";
				var english_fee="";
				var math_fee="";
				var bahasa_melayu_fee="";
				var subject_number=$("#subject_number").text();
				var subject_time_number=$("#subject_time_number").val();
				$(document).on("load",function(){
				if($('.subject_science').is(':checked')){
					$("#science_time_1").css("display","block");
					$("#science_time_2").css("display","block");
				}
				else{
					$("#science_time_1").css("display","none");
					$("#science_time_2").css("display","none");
				}
				
				if($('.subject_english').is(':checked')){
					$("#english_time_1").css("display","block");
					$("#english_time_2").css("display","block");	
				}
				else{
					$("#english_time_1").css("display","none");
					$("#english_time_2").css("display","none");
				}
				
				if($('.subject_math').is(':checked')){
					$("#math_time_1").css("display","block");
					$("#math_time_2").css("display","block");
				}
				else{
					$("#math_time_1").css("display","none");
					$("#math_time_2").css("display","none");
				}
				
				if($('.subject_bahasa_melayu').is(':checked')){
					$("#bahasa_melayu_time_1").css("display","block");
					$("#bahasa_melayu_time_2").css("display","block");
				}
				else{
					$("#bahasa_melayu_time_1").css("display","none");
					$("#bahasa_melayu_time_2").css("display","none");
				}
				});
				
				load_data();  
				$(document).on('click', '.subject', function(){  
				var subject = $(this).attr("id");  
				//load_data(page); 
				$("."+subject+"_time").toggle();
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
				$('#submitbtn').on('click', function(){
				var name=$('#confirm_student_name').val();
				var ic=$('#confirm_student_ic').val();
				var gender=$('#confirm_gender').val();
				var year=$('#year').val();
				var student_join_date=$('#month').val();
				var student_end_date=$('#student_end_date_val').text();
				var level=$('#level').text();
				var student_name,student_ic="";
				if(name==""){
					document.getElementById('pt3_error_student_name').innerHTML="*Please Fill Up The Name";
				}
				else{
					document.getElementById('pt3_error_student_name').innerHTML="";
					student_name=1;
				}
				if(ic==""){
					document.getElementById('pt3_error_student_ic').innerHTML="*Please Fill Up The IC";
				}
				else if(ic.length<12){
					document.getElementById('pt3_error_student_ic').innerHTML="*The IC number was less then 12 number.";
				}
				else if(isNaN(ic)){
					document.getElementById('pt3_error_student_ic').innerHTML="*The IC must be a number.";
				}
				else{
					document.getElementById('pt3_error_student_ic').innerHTML="";
					student_ic=1;
				}
				if($('#science_1').prop('checked')){
					science_time=$('#science_1').val();
					science=$('#science').val();
					science_fee="45";
				}
				if($('#science_2').prop('checked')){
					science_time=$('#science_2').val();
					science=$('#science').val();
					science_fee="45";
				}
				if($('#math_1').prop('checked')){
					math_time=$('#math_1').val();
					math=$('#math').val();	
					math_fee="45";
				}
				if($('#math_2').prop('checked')){
					math_time=$('#math_2').val();
					math=$('#math').val();
					math_fee="45";
				}
				if($('#english_1').prop('checked')){
					english_time=$('#english_1').val();
					english=$('#english').val();
					english_fee="45";
				}
				if($('#english_2').prop('checked')){
					english_time=$('#english_2').val();
					english=$('#english').val();
					english_fee="45";
				}
				if($('#bahasa_melayu_1').prop('checked')){
					bahasa_melayu_time=$('#bahasa_melayu_1').val();
					bahasa_melayu=$('#bahasa_melayu').val();
					bahasa_melayu_fee="45";
				}
				if($('#bahasa_melayu_2').prop('checked')){
					bahasa_melayu_time=$('#bahasa_melayu_2').val();
					bahasa_melayu=$('#bahasa_melayu').val();
					bahasa_melayu_fee="45";
				}
				if(student_name==1 && student_ic==1){
					if($('#science_1').prop('checked')==false && $('#science_2').prop('checked')==false && $('#math_1').prop('checked')==false && $('#math_2').prop('checked') == false && $('#english_1').prop('checked')==false && $('#english_2').prop('checked')==false && $('#bahasa_melayu_1').prop('checked')==false && $('#bahasa_melayu_2').prop('checked')== false){
						alert("Please Choose One Subject Time");
					}
					else{
					$.ajax({
						method:'GET',
						success:function(data){
						window.location="confirm_register.php?student_name="+name+"&student_ic="+ic+"&gender="+gender+"&science_time="+science_time+"&english_time="+english_time+"&math_time="+math_time+"&bahasa_melayu_time="+bahasa_melayu_time+"&student_join_date="+student_join_date+"&student_end_date="+student_end_date+"&level="+level+"&science="+science+"&english="+english+"&math="+math+"&bahasa_melayu="+bahasa_melayu+"&science_fee="+science_fee+"&math_fee="+math_fee+"&english_fee="+english_fee+"&bahasa_melayu_fee="+bahasa_melayu_fee+"&year="+year;
						}			
					});
				}}
				})
			});
		</script>
	</form>
	</div>
	 </div>
	 </div>
	 </section>
	<!-- TimeTable -->
	<section id="timetable">
	 <div class="container-fluid">
	 <div class="row">
		<div class="col-md-12" id="table">
			<?php include("schedule.php"); ?>
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