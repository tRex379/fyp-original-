<?php include("dbconnect.php"); ?>
<?php 
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
	 <link rel="stylesheet" href="css/w3school.css" />
	 <script src="js/jquery 3.3.1 min.js"></script>
	 <script src="js/jquery-1.12.4 ui.js"></script>
	 <script src="js/jquery-1.12.4.js"></script>
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

#register_form{
	padding-top:100px;
	padding-bottom:30px;
}

#subject_details table{
	margin-left:35%;
}

#subject_details th
{
	background-color:black;
	color:white;
	padding:2px 50px 2px 50px;
}

#subject_details td
{
	padding-left:40px;
	padding-top:10px;
	padding-bottom:10px;
	font-style:italic;
	font-size:20px;
	padding-right:20px;
}

#register_children{
	margin-top:50px;
	margin-bottom:50px;
}

#register
{
	font-size:20px;
	margin-top:-20px;
	padding-top:10px;
}

#student_name input[type="text"]
{
	margin-left:36px;
}

#student_ic input[type="text"]
{
	margin-left:99px;
}

#student_join_date,#student_end_date
{
	margin-top:20px;
	text-align:left;
}

#gender{
	text-align:left;
	margin-left:50px;	
}

#error_student_name,#error_student_ic{
	color:#F2220D;
}

#confirm_gender{
	margin-top:10px;
}

#gender select{
	margin-left:95px;	
}

#pt3,#spm
{
	margin-bottom:10px;
}

#individual
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

#submitbtn
{
	margin-top:15px;
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

#term{
	padding-left:0;
}

#join_date{
	margin-top:20px;
	padding-left:0;
}

#table{
	padding-left:100px;
	padding-right:100px;
}

label{
	margin:0;
}

.subject,input[type="checkbox"]{
	cursor:pointer;
}

.subject_name{
	height:110px;
}
</style>
<body>
  <?php 
		  include('profile_menu.php');
		   if($_GET['level']=='PT3'){
		   $result=mysqli_query($conn,"select * from subject where Standard_Name='PT3' and Subject_status='active'"); 
		   $row=mysqli_fetch_assoc($result);
		   $subject_number=mysqli_num_rows($result);
		   $curr_month = date("m");
			$month = array ("January","February", "March", "April", "May", "June", "July", "August", "September");
			$month = array_slice($month, $curr_month);
			$select = "<select id=\"month\">\n";
			foreach ($month as $key => $val){
			$select .= "\t<option value=\"".$val."\"";
			if ($key == 0){
			$select .= ">".$val."</option>\n";
			} else {
			$select .= ">".$val."</option>\n";
			}
			}
			$select.= "</select>";
		   }
		   else if($_GET['level']=='SPM'){
		   $result=mysqli_query($conn,"select * from subject where Standard_Name='SPM' and Subject_status='active'"); 
		   $row=mysqli_fetch_assoc($result);
		   $subject_number=mysqli_num_rows($result);
		   $curr_month = date("m");
			$month = array ("January","February", "March", "April", "May", "June", "July", "August", "September", "October");
			$month = array_slice($month, $curr_month);
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
		   }
	 ?>
	<!-- Register Form -->
	<input type="hidden" class="level" value="<?php echo $_GET['level']; ?>"/>
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
							<td colspan="2">1 Subject RM<span id="subject_fee"><?php echo $row['Subject_Fee']; ?></span> Per Month </td>
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
		<span class="col-md-offset-3" id="error_student_name"></span>
		<div id="student_ic">NRIC No.<input type="text" id="confirm_student_ic" placeholder="98XXXX0X51XX" maxlength="12"/></div>
		<span class="col-md-offset-2" id="error_student_ic"></span>
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
					$result1=mysqli_query($conn,"select * from subject where Standard_Name='$level' and Subject_status='active'");
					while($row1=mysqli_fetch_assoc($result1)){
					?>
					<div class="col-md-5 subject_name">
					<label for='subject<?php echo $i?>'><div class="subject" id='subject<?php echo $i?>_checked'><?php echo $row1['Subject_Name']?></div></label><input type='checkbox' id='subject<?php echo $i?>' value='<?php echo $row1['Subject_Name']?>' />
					<?php
					$subject=$row1['Subject_Name'];
					$result_subject_time=mysqli_query($conn,"select * from schedule where subject='$subject' and standard='".$_GET['level']."'");
					$j=1;
					while($row_subject_time=mysqli_fetch_assoc($result_subject_time)){
					?>
					<div class="subject<?php echo $i ?>_time" style="display:none;">
					<label for='<?php echo $row_subject_time['schedule_id'] ?>'><div><?php echo $row_subject_time['day'] ?>(<?php echo $row_subject_time['time']?>)<input type='radio' id='<?php echo $row_subject_time['schedule_id'] ?>'  name="<?php echo $subject;?>" min="<?php echo $row_subject_time['curr_capacity']; ?>" max=<?php echo $row_subject_time['capacity'];?>  value='<?php echo $row_subject_time['day']." ".$row_subject_time['time']?>'/></div></label>	
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
		<input type="hidden" id="subject_time_number" value="<?php echo $j; ?>" />
		<input type="button" id="submitbtn" value="Confirm" />
		</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				var subject_number=$("#subject_number").text();
				var subject_time_number=$('#subject_time_number').val();
				var crashing=[];
				var fee=$('#subject_fee').text();
				$('input[type="radio"]').on('change',function(){
				$('input[type="radio"]:checked').each(function() {
					var venue_capacity=$(this).attr('min');
					venue_capacity=parseInt(venue_capacity);
					var max_venue_capacity=$(this).attr('max');
					max_venue_capacity=parseInt(max_venue_capacity);
					var time=$(this).val();
					var subject=$(this).attr("name");
					if(venue_capacity>= max_venue_capacity){
						alert("The "+subject+" class is full for "+time);
						$(this).removeAttr('checked');
					}
				});
				});
				$(document).ready(function(){
				$('input[type="checkbox"]').prop('checked',function() {
					var subject = $(this).attr("id");
					var subject_name = $(this).val();
				if($("#"+subject).is(':checked')){
					$("."+subject+"_time").show();
				}else{
					$("."+subject+"_time").hide();
					$('input[name="'+subject_name+'"]').removeAttr('checked');
				}
				});
				});
				
				$('input[type="checkbox"]').on('click', function(){
					var subject = $(this).attr("id");
					var subject_name = $(this).val();
				if($("#"+subject).is(':checked')){
					$("."+subject+"_time").show();
				}else{
					$("."+subject+"_time").hide();
					$('input[name="'+subject_name+'"]').removeAttr('checked');
				}
				});
				
				$('#submitbtn').on('click', function(){
				var subject_name=[];
				var subject_fee=[];
				var subject_venue=[];
				var checking_crashing=[];
				var name=$('#confirm_student_name').val();
				var ic=$('#confirm_student_ic').val();
				var gender=$('#confirm_gender').val();
				var year=$('#year').val();
				var student_join_date=$('#month').val();
				var student_end_date=$('#student_end_date_val').text();
				var level=$('#level').text();
				var student_join_date_val=$('#student_join_date_val').text();
				var student_name,student_ic="";
				if(name==""){
					document.getElementById('error_student_name').innerHTML="*Please Fill Up The Name";
				}
				else{
					document.getElementById('error_student_name').innerHTML="";
					student_name=1;
				}
				if(ic==""){
					document.getElementById('error_student_ic').innerHTML="*Please Fill Up The IC";
				}
				else if(ic.length<12){
					document.getElementById('error_student_ic').innerHTML="*The IC number was less then 12 number.";
				}
				else if(isNaN(ic)){
					document.getElementById('error_student_ic').innerHTML="*The IC must be a number.";
				}
				else{
					document.getElementById('error_student_ic').innerHTML="";
					student_ic=1;
				}
				
				var pass=0;
				if(student_name==1 && student_ic==1){
					if($("input[type='radio']:checked").length==0){
						alert("Please Choice Atleast One Subject and Time");
					}
					else{
						$('input[type="checkbox"]:checked').each(function(){
						var check_subject=$(this).val();
						var isChecked = $("input[name='"+check_subject+"']:checked").length;
						if(isChecked==0){
							$(this).prop('checked',false);
						}
						});
							pass=1;
							$('input[type="radio"]:checked').each(function(){
							var time=$(this).val();
							var venue=$(this).attr('id');
							var subject=$(this).attr('name');
							// var found = Object.keys(subject_name).filter(function(key) {
							// return subject_name[key] === time;
							// });
							// if (found.length){
								// alert('exists');
							// }
							subject_name.push('"'+subject+'":"'+time+'"');
							subject_fee.push('"'+subject+'":"'+fee+'"');
							subject_venue.push('"'+subject+'":"'+venue+'"');
							checking_crashing.push('{"subject":"'+subject+'","time":"'+time+'"}');
							});
							subject_name="{"+subject_name+"}";
							subject_fee="{"+subject_fee+"}";
							subject_venue="{"+subject_venue+"}";
							checking_crashing="["+checking_crashing+"]";
						}
					if(pass==1){
						$.ajax({
						method:'POST',
						url:"validate_crashing.php",
						data:{
							subject_name:subject_name,
							checking_crashing:checking_crashing,
							ic:ic,
							},
						success:function(data){
						if(data=="student_ic"){
							$("#error_student_ic").text("*IC is existing");
						}
						else if(data=="parent_ic"){
							$("#error_student_ic").text("*IC is existing");
						}
						else if(data==1){
							window.location="confirm_register.php?student_name="+name+"&student_ic="+ic+"&gender="+gender+"&student_join_date="+student_join_date+"&student_end_date="+student_end_date+"&level="+level+"&year="+year+"&subject_name="+subject_name+"&subject_fee="+subject_fee+"&fee="+fee+"&subject_venue="+subject_venue+"&student_join_date_val="+student_join_date_val;
						}
						else{
							alert(data);
						}
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
<?php 
}
else{
	header("Location:register_page.php");
}
?>