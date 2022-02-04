<?php    
 include("dbconnect.php");
 if(!empty($_POST["student_name"])){  
	  $student_name=$_POST["student_name"];
	  $student_name=mysqli_real_escape_string($conn,$student_name);
	  $student_ic=$_POST["student_ic"];
	  $student_gender=$_POST["student_gender"];
	  $student_join_date_month=$_POST["student_join_date_month_val"];
	  $student_join_date_year=$_POST["student_join_date_year_val"];
	  $student_end_date=$_POST["student_end_date"];
	  $student_join_date_val=$_POST['student_join_date_val'];
	  $student_level=$_POST["student_level"];
	  $subject=$_POST["student_subject"];
	  $subject_fee=$_POST["student_subject_fee"];
	  $student_total=$_POST["student_subject_total_fee"];
	  $registration_fee=$_POST['registration_fee'];
	  $payment_date=$_POST['payment_date'];
	  $parent_id=$_SESSION['parent_id'];
	  $subject_venue=$_POST["student_subject_venue"];
	  $numeric_month="";
	  $curr_year=date('Y');
	  unset($_SESSION['check_after_payment']);

	  if($student_join_date_month=="January"){
		$numeric_month=$curr_year."-01-01";
	  }
	  if($student_join_date_month=="February"){
		$numeric_month=$curr_year."-02-01";
	  }
	  if($student_join_date_month=="March"){
		$numeric_month=$curr_year."-03-01";
	  }
	  if($student_join_date_month=="April"){
		$numeric_month=$curr_year."-04-01";
	  }
	  if($student_join_date_month=="May"){
		$numeric_month=$curr_year."-05-01";
	  }
	  if($student_join_date_month=="June"){
		$numeric_month=$curr_year."-06-01";
	  }
	  if($student_join_date_month=="July"){
		$numeric_month=$curr_year."-07-01";
	  }
	  if($student_join_date_month=="August"){
		$numeric_month=$curr_year."-08-01";
	  }
	  if($student_join_date_month=="September"){
		$numeric_month=$curr_year."-09-01";
	  }
	  if($student_join_date_month=="October"){
		$numeric_month=$curr_year."-10-01";
	  }
	  
	  // $file = addslashes(file_get_contents($_FILES["file"]["tmp_name"]));
	  // $test = explode('.', $_FILES["file"]["name"]);
	  // $ext = end($test);
	  // $name = rand(100, 999) . '.' . $ext;
	  // $location = 'register fee/' .$name;  
	  // move_uploaded_file($_FILES["file"]["tmp_name"], $location);
	  
	  $result_parent=mysqli_query($conn,"select * from parent where parent_id='$parent_id'");
	  $row_parent=mysqli_fetch_assoc($result_parent);
	  $barred_status=$row_parent['barred_status'];
	
	  $result="insert into student(student_name,student_ic,student_gender,student_join_date_month,student_end_date,student_level,parent_id_fk,student_subject,student_subject_fee,student_total_subject_fee,student_join_date_year,intake_date,student_registration_date,student_subject_venue,parent_barred_status) values ('$student_name','$student_ic','$student_gender','$student_join_date_month','$student_end_date','$student_level','$parent_id','$subject','$subject_fee','$student_total','$student_join_date_year','$numeric_month','$student_join_date_val','$subject_venue','$barred_status')";
	  mysqli_query($conn,$result);
	
	  $subject_venue=json_decode($subject_venue,true);
	  foreach($subject_venue as $venue => $venue_id){
	  $result_venue=mysqli_query($conn,"select * from schedule where schedule_id='$venue_id'");
	  $row_venue=mysqli_fetch_assoc($result_venue);
	  $result_student=mysqli_query($conn,"select * from student order by student_id desc limit 1");
	  $row_student=mysqli_fetch_assoc($result_student);
	  $student_id=$row_student['student_id'];
	  mysqli_query($conn,"insert into schedule_student (schedule_id,student_id,student_name,parent_id_fk) values ('$venue_id','$student_id','$student_name','$parent_id')");
	  $venue_capacity=$row_venue['curr_capacity'];
	  $venue_capacity+=01;
	  mysqli_query($conn,"update schedule set curr_capacity='$venue_capacity' where schedule_id='$venue_id'");
	  }
	  $result_student1=mysqli_query($conn,"select * from student order by student_id desc limit 1");
	  $row_student1=mysqli_fetch_assoc($result_student1);
	  $student_id=$row_student1['student_id'];
	  mysqli_query($conn,"insert into payment(payment_status,total_payment,parent_id_fk,payment_date,student_id) values ('Yes','$registration_fee','$parent_id','$payment_date','$student_id')");
	  $result_payment=mysqli_query($conn,"select * from payment where student_id='$student_id'");
	  $row_payment=mysqli_fetch_assoc($result_payment);
	  $payment_id=$row_payment['payment_id'];
	  mysqli_query($conn,"insert into payment_receipt(payment_total,payment_student,payment_parent,payment_date,payment_id,student_id) values ('$registration_fee','$student_name','$parent_id','$payment_date','$payment_id','$student_id')");
	  
	  echo 1;
 }
 else{
	echo 0;
 }
?>