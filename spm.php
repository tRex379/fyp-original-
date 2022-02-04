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
</style>
<script type="text/javascript">
	$(document).ready(function(){
		var level=$(".level").val();
		if(level=="SPM"){
			$("#register_form").css("display","none");
		}
		else if(level=="PT3"){
			$("#spm_register_form").css("display","none");
		}
	});
</script>
<body>
    <?php include('profile_menu.php');
		   $result_subject=mysqli_query($conn,"select * from subject where Standard_Name='PT3'"); 
		   $row_subject=mysqli_fetch_assoc($result_subject);
		   $number=mysqli_num_rows($result_subject);
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
							<td colspan="2">1 Subject RM<?php echo $row_subject['Subject_Fee']; ?> Per Month </td>
						</tr>
						<tr>
							<td colspan="2"><?php echo $number; ?> Subjects RM<?php echo $row_subject['Subject_Fee']*$number; ?> Per Month </td>
						</tr>
					</table>
			</div>
				<div class="col-md-offset-1 col-md-10">
				<h3 id="register_children"><?php echo $_GET['level']; ?> Register Children</h3>
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
		<div id="individual" class="col-md-offset-1 col-md-10">
		<div id="pt3"><span id="level"><?php echo $_GET['level'] ?></span> subject:</div>
					<div class="col-md-5">
					<label for="science"><div id="science_checked">Science</div></label><input type="checkbox" id="science" class="subject_science" value="Science"/>
					<label for="science_1"><div id="science_time_1">(Saturday 9:00pm~10:00pm)<input type="radio" id="science_1" name="science" value="Saturday 9:00pm~10:00pm"/></div></label>
					<label for="science_2"><div id="science_time_2">(Wednesday 9:00pm~10:00pm)<input type="radio" id="science_2" name="science" value="Wednesday 9:00pm~10:00pm"/></div></label>
					<br />
					<label for="english"><div id="english_checked">English</div></label><input type="checkbox" id="english" class="subject_english" value="English"/>
					<label for="english_1"><div id="english_time_1">(Monday 4:00pm~5:00pm)<input type="radio" id="english_1" name="english" value="Monday 4:00pm~5:00pm"/></div></label>
					<label for="english_2"><div id="english_time_2">(Tuesday 4:00pm~5:00pm)<input type="radio" id="english_2" name="english" value="Tuesday 4:00pm~5:00pm"/>
					</div></label>
					</div>
					<div class="col-md-5">
					<label for="math"><div id="math_checked">Mathematics</div></label><input type="checkbox" id="math" class="subject_math" value="Mathematics"/>
					<label for="math_1"><div id="math_time_1">(Sunday 8:00am~9:00am)<input type="radio" id="math_1" name="math" value="Sunday 8:00am~9:00am"/></div></label>
					<label for="math_2"><div id="math_time_2">(Saturday 5:00pm~6:00pm)<input type="radio" id="math_2" name="math" value="Saturday 5:00pm~6:00pm"/></div></label>
					<br />
					<label for="bahasa_melayu"><div id="bahasa_melayu_checked">Bahasa Melayu</div></label><input type="checkbox" id="bahasa_melayu" class="subject_bahasa_melayu" value="Bahasa Melayu"/>
					<label for="bahasa_melayu_1"><div id="bahasa_melayu_time_1">(Thursday 3:00pm~4:00pm)<input type="radio" id="bahasa_melayu_1" name="bahasa_melayu" value="Thursday 3:00pm~4:00pm"/></div></label>
					<label for="bahasa_melayu_2"><div id="bahasa_melayu_time_2">(Friday 4:00pm~5:00pm)<input type="radio" id="bahasa_melayu_2" name="bahasa_melayu" value="Friday 4:00pm~5:00pm"/></div></label>
					</div>
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
				var science_fee="";
				var english_fee="";
				var math_fee="";
				var bahasa_melayu_fee="";
				$(window).on("load",function(){
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
				
				$('#science,#english,#math,#bahasa_melayu').on("click",function(){
				if($('.subject_science').is(':checked')){
					$("#science_time_1").css("display","block");
					$("#science_time_2").css("display","block");
				}
				else{
					$("#science_time_1").css("display","none");
					$("#science_time_2").css("display","none");
					$('#science_1,#science_2').removeAttr('checked');
					science_time="";
					science="";
				}
				
				if($('.subject_english').is(':checked')){
					$("#english_time_1").css("display","block");
					$("#english_time_2").css("display","block");	
				}
				else{
					$("#english_time_1").css("display","none");
					$("#english_time_2").css("display","none");
					$('#english_1,#english_2').removeAttr('checked');
					english_time="";
					english="";
				}
				if($('.subject_math').is(':checked')){
					$("#math_time_1").css("display","block");
					$("#math_time_2").css("display","block");
				}
				else{
					$("#math_time_1").css("display","none");
					$("#math_time_2").css("display","none");
					$('#math_1,#math_2').removeAttr('checked');
					math_time="";
					math="";
				}
				if($('.subject_bahasa_melayu').is(':checked')){
					$("#bahasa_melayu_time_1").css("display","block");
					$("#bahasa_melayu_time_2").css("display","block");	
				}
				else{
					$("#bahasa_melayu_time_1").css("display","none");
					$("#bahasa_melayu_time_2").css("display","none");
					$('#bahasa_melayu_1,#bahasa_melayu_2').removeAttr('checked');
					bahasa_melayu_time="";
					bahasa_melayu="";
				}
				});
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
				});
			});
		</script>
	</form>
	</div>
	 </div>
	 </div>
	 </section>
	 <!--SPM -->
		<section id="spm_register_form">
			<?php $result_subject=mysqli_query($conn,"select * from subject where Standard_Name='SPM'"); 
		   $row_subject=mysqli_fetch_assoc($result_subject);
		   $number=mysqli_num_rows($result_subject);
			?>
		  <div class="container">
			<div class="row">
			<div id="spm_subject_details" class="col-md-12">
					<table border>
						<tr>
							<th><?php echo $_GET['level']; ?></th>
							<th> Tuition Fee</th>
						</tr>
						<tr>
							<td colspan="2">1 Subject RM<?php echo $row_subject['Subject_Fee']; ?> Per Month </td>
						</tr>
						<tr>
							<td colspan="2"><?php echo $number; ?> Subjects RM<?php echo $row_subject['Subject_Fee']*$number;?> Per Month </td>
						</tr>
					</table>
			</div>
				<div class="col-md-offset-1 col-md-10">
				<h3 id="spm_register_children"><?php echo $_GET['level']; ?> Register Children</h3>
				</div>
				
	 <div id="spm_register" class="col-md-12">
	 <form action="">
	 <div  class="col-md-6 col-md-offset-1">
		<div id="spm_student_name">Children Name<input type="text" id="spm_confirm_student_name" placeholder="Children Name" /></div>
		<span class="col-md-offset-3" id="spm_error_student_name"></span>
		<div id="spm_student_ic">NRIC No.<input type="text" id="spm_confirm_student_ic" placeholder="98XXXX0X51XX" maxlength="12"/></div>
		<span class="col-md-offset-2" id="spm_error_student_ic"></span>
		<div id="spm_gender">Gender
		<select name="gender" id="spm_confirm_gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>
		</div>
	</div>
	<div class="col-md-4" style="margin-top:-20px;">
		<div id="spm_term" class="col-md-10"><u><b>Open Registration Date</b></u></div>
		<div id="spm_student_join_date" class="col-md-12">Date : <span id="spm_student_join_date_val"><?php echo $_GET['student_join_date']; ?></span></div>
		<div id="spm_student_end_date" class="col-md-12">End Date : <span id="spm_student_end_date_val"> <?php echo $_GET['student_end_date']; ?></span></div>
		<div id="spm_join_date" class="col-md-5"><u><b>Join Date</b></u></div>
		<div id="spm_student_join_date" class="col-md-12">Month : <?php echo $select;?><input type="hidden" id="spm_student_join_year" value='<?php echo date('Y'); ?>' /></div>
	</div>
		<div id="spm_individual" class="col-md-offset-1 col-md-10">
		<div id="spm"><span id="spm_level"><?php echo $_GET['level'] ?></span> subject:</div>
					<div class="col-md-5">
					<label for="add_math"><div id="add_math_checked">Additional Mathematics</div></label><input type="checkbox" id="add_math" class="subject_add_math" value="Additional Mathematics"/>
					<label for="add_math_1"><div id="add_math_time_1">(Monday 9:00pm~10:00pm)<input type="radio" id="add_math_1" name="add_math" value="Monday 9:00pm~10:00pm"/></div></label>
					<label for="add_math_2"><div id="add_math_time_2">(Wednesday 11:00pm~12:00pm)<input type="radio" id="add_math_2" name="add_math" value="Wednesday 11:00pm~12:00pm"/></div></label>
					<br />
					<label for="physics"><div id="physics_checked">Physics</div></label><input type="checkbox" id="physics" class="subject_physics" value="Physics"/>
					<label for="physics_1"><div id="physics_time_1">(Wednesday 4:00pm~5:00pm)<input type="radio" id="physics_1" name="physics" value="Wednesday 4:00pm~5:00pm"/></div></label>
					<label for="physics_2"><div id="physics_time_2">(Firday 3:00pm~4:00pm)<input type="radio" id="physics_2" name="physics" value="Firday 3:00pm~4:00pm"/>
					</div></label>
					</div>
					<div class="col-md-5">
					<label for="biology"><div id="biology_checked">Biology</div></label><input type="checkbox" id="biology" class="subject_biology" value="Biology"/>
					<label for="biology_1"><div id="biology_time_1">(Sunday 8:00am~9:00am)<input type="radio" id="biology_1" name="biology" value="Sunday 8:00am~9:00am"/></div></label>
					<label for="biology_2"><div id="biology_time_2">(Saturday 5:00pm~6:00pm)<input type="radio" id="biology_2" name="biology" value="Saturday 5:00pm~6:00pm"/></div></label>
					<br />
					<label for="chemistry"><div id="chemistry_checked">Chemistry</div></label><input type="checkbox" id="chemistry" class="subject_chemistry" value="Chemistry"/>
					<label for="chemistry_1"><div id="chemistry_time_1">(Thursday 3:00pm~4:00pm)<input type="radio" id="chemistry_1" name="chemistry" value="Thursday 3:00pm~4:00pm"/></div></label>
					<label for="chemistry_2"><div id="chemistry_time_2">(Friday 4:00pm~5:00pm)<input type="radio" id="chemistry_2" name="chemistry" value="Friday 4:00pm~5:00pm"/></div></label>
					</div>
		<div class="col-md-2 col-md-offset-8">
		<input type="button" id="spm_submitbtn" name="submitbtn" value="Confirm" />
		</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				var add_math_time="";
				var physics_time="";
				var biology_time="";
				var chemistry_time="";
				var add_math="";
				var physics="";
				var biology="";
				var chemistry="";
				var add_math_fee="";
				var physics_fee="";
				var biology_fee="";
				var chemistry_fee="";
				$(window).on("load",function(){
				if($('.subject_add_math').is(':checked')){
					$("#add_math_time_1").css("display","block");
					$("#add_math_time_2").css("display","block");
				}
				else{
					$("#add_math_time_1").css("display","none");
					$("#add_math_time_2").css("display","none");
				}
				
				if($('.subject_physics').is(':checked')){
					$("#physics_time_1").css("display","block");
					$("#physics_time_2").css("display","block");	
				}
				else{
					$("#physics_time_1").css("display","none");
					$("#physics_time_2").css("display","none");
				}
				
				if($('.subject_biology').is(':checked')){
					$("#biology_time_1").css("display","block");
					$("#biology_time_2").css("display","block");
				}
				else{
					$("#biology_time_1").css("display","none");
					$("#biology_time_2").css("display","none");
				}
				
				if($('.subject_chemistry').is(':checked')){
					$("#chemistry_time_1").css("display","block");
					$("#chemistry_time_2").css("display","block");
				}
				else{
					$("#chemistry_time_1").css("display","none");
					$("#chemistry_time_2").css("display","none");
				}
				});
				
				$('#add_math,#biology,#chemistry,#physics').on("click",function(){
				if($('.subject_add_math').is(':checked')){
					$("#add_math_time_1").css("display","block");
					$("#add_math_time_2").css("display","block");
				}
				else{
					$("#add_math_time_1").css("display","none");
					$("#add_math_time_2").css("display","none");
					$('#add_math_1,#add_math_2').removeAttr('checked');
					add_math_time="";
					add_math="";
				}
				
				if($('.subject_physics').is(':checked')){
					$("#physics_time_1").css("display","block");
					$("#physics_time_2").css("display","block");		
				}
				else{
					$("#physics_time_1").css("display","none");
					$("#physics_time_2").css("display","none");
					$('#physics_1,#physics_2').removeAttr('checked');
					physics_time="";
					physics="";
				}
				if($('.subject_biology').is(':checked')){
					$("#biology_time_1").css("display","block");
					$("#biology_time_2").css("display","block");
				}
				else{
					$("#biology_time_1").css("display","none");
					$("#biology_time_2").css("display","none");
					$('#biology_1,#biology_2').removeAttr('checked');
					biology_time="";
					biology="";
				}
				if($('.subject_chemistry').is(':checked')){
					$("#chemistry_time_1").css("display","block");
					$("#chemistry_time_2").css("display","block");	
				}
				else{
					$("#chemistry_time_1").css("display","none");
					$("#chemistry_time_2").css("display","none");
					$('#chemistry_1,#chemistry_2').removeAttr('checked');
					chemistry_time="";
					chemistry="";
				}
				});
				$('#spm_submitbtn').on('click', function(){
				var name=$('#spm_confirm_student_name').val();
				var ic=$('#spm_confirm_student_ic').val();
				var gender=$('#spm_confirm_gender').val();
				var year=$('#spm_student_join_year').val();
				var student_join_date=$('#spm_month').val();
				var student_end_date=$('#spm_student_end_date_val').text();
				var level=$('#spm_level').text();
				var student_name,student_ic="";
				if(name==""){
					document.getElementById('spm_error_student_name').innerHTML="*Please Fill Up The Name";
				}
				else{
					document.getElementById('spm_error_student_name').innerHTML="";
					student_name=1;
				}
				if(ic==""){
					document.getElementById('spm_error_student_ic').innerHTML="*Please Fill Up The IC";
				}
				else if(ic.length<12){
					document.getElementById('spm_error_student_ic').innerHTML="*The IC number was less then 12 number.";
				}
				else if(isNaN(ic)){
					document.getElementById('spm_error_student_ic').innerHTML="*The IC must be a number.";
				}
				else{
					document.getElementById('spm_error_student_ic').innerHTML="";
					student_ic=1;
				}

				if($('#add_math_1').prop('checked')){
					add_math_time=$('#add_math_1').val();
					add_math=$('#add_math').val();
					add_math_fee="60";
				}
				
				if($('#add_math_2').prop('checked')){
					add_math_time=$('#add_math_2').val();
					add_math=$('#add_math').val();
					add_math_fee="60";
				}
				
				if($('#physics_1').prop('checked')){
					physics_time=$('#physics_1').val();
					physics=$('#physics').val();
					physics_fee="60";
				}
				if($('#physics_2').prop('checked')){
					physics_time=$('#physics_2').val();
					physics=$('#physics').val();
					physics_fee="60";
				}
				if($('#biology_1').prop('checked')){
					biology_time=$('#biology_1').val();
					biology=$('#biology').val();
					biology_fee="60";
				}
				if($('#biology_2').prop('checked')){
					biology_time=$('#biology_2').val();
					biology=$('#biology').val();
					biology_fee="60";
				}
				if($('#chemistry_1').prop('checked')){
					chemistry_time=$('#chemistry_1').val();
					chemistry=$('#chemistry').val();
					chemistry_fee="60";
				}
				if($('#chemistry_2').prop('checked')){
					chemistry_time=$('#chemistry_2').val();
					chemistry=$('#chemistry').val();
					chemistry_fee="60";
				}
				if(student_name==1 && student_ic==1){
				if($('#add_math_1').prop('checked')==false && $('#add_math_2').prop('checked')==false && $('#physics_1').prop('checked')==false && $('#physics_2').prop('checked') == false && $('#biology_1').prop('checked')==false && $('#biology_2').prop('checked')==false && $('#chemistry_1').prop('checked')==false && $('#chemistry_2').prop('checked')== false){
					alert("Please Choose At Least One Subject Time");
				}
				else{
				$.ajax({
					method:'GET',
					success:function(data){
						window.location="confirm_register.php?student_name="+name+"&student_ic="+ic+"&gender="+gender+"&add_math_time="+add_math_time+"&physics_time="+physics_time+"&biology_time="+biology_time+"&chemistry_time="+chemistry_time+"&student_join_date="+student_join_date+"&student_end_date="+student_end_date+"&level="+level+"&biology="+biology+"&physics="+physics+"&add_math="+add_math+"&chemistry="+chemistry+"&chemistry_fee="+chemistry_fee+"&add_math_fee="+add_math_fee+"&physics_fee="+physics_fee+"&biology_fee="+biology_fee+"&year="+year;
					}			
				});
				}
				}
				});
			});
		</script>
	</form>
	</div>
	 </div>
	 </div>
	 </section>
	<!-- TimeTable -->
	<section id="timetable">
	 <div class="container">
	 <div class="row">
			<table class="table table-striped table-hover table-bordered col-md-12">
                  <thead>
                    <tr>
					  <th>Day</th>
                      <th>8.00am - 9.30am</th>
					  <th>9.30am - 11.00am</th>
                      <th>11.00am - 12.30pm</th>
					  <th>12.30pm - 2.00pm</th>
                      <th>2.00pm - 3.30pm</th>
					  <th>3.30pm - 5.00pm</th>
					  <th>5.00pm - 6.30pm</th>
					  <th>6.30pm - 8.00pm</th>
					  <th>8.00pm - 9.30pm</th>
                    </tr>
                  </thead>
                  <tbody>
				  <tr>
					  <th rowspan="3">Monday</th>
					  <td></td>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td><h4>SPM-Biology</h4>Classroom01</td>
					  <td></td>
					  <td></td>
					  <td></td>
                    </tr>
					<tr>
					  <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td><h4>PT3-English</h4>Classroom04</td>
					  <td></td>
					  <td></td>
					  <td></td>
                    </tr>
					<tr>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                    </tr>
                    <tr>
					  <th rowspan="3">Tuesday</th>
                      <td></td>
					  <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td><h4>SPM-Chemistry</h4>Classroom01</td>
					  <td></td>
					  <td></td>
                    </tr>
					<tr>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                    </tr>
					<tr>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                    </tr>
                    
                    <tr>
                      <th rowspan="3">Wednesday</th>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td><h4>SPM-Physics</h4>Classroom02</td>
                    </tr>
					<tr>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                    </tr>
					<tr>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                    </tr>
                    <tr>
                     <th rowspan="3">Thursday</th>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td><h4>SPM-Additional Mathematics</h4>Classroom02</td>
					  <td></td>
					  <td></td>
					  <td></td>
                    </tr>
                    <tr>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                    </tr>
					<tr>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                    </tr>
                    <tr>
                      <th rowspan="3">Friday</th>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td><h4>PT3-Bahasa Melayu</h4>Classroom03</td>
					  <td></td>
                    </tr>
                    <tr>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                    </tr>
					<tr>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                    </tr>
                    <tr>
                      <th rowspan="3">Saturday</th>
                      <td></td>
					  <td><h4>PT3-Science</h4>Classroom06</td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
                    </tr>
                    <tr>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                    </tr>
                     <tr>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                    </tr>					
                   <tr>
                      <th rowspan="3">Sunday</th>
					  <td><h4>PT3-Mathematics</h4>Classroom05</td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
                    </tr>
                    <tr>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                    </tr>
					<tr>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
                      <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                    </tr>
                  </tbody>
                </table>
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