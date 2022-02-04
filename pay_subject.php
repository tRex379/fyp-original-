<?php 
 include("dbconnect.php");
 if(!empty($_POST['total_amount'])){
	$parent_id=$_SESSION['parent_id'];
	// $file = addslashes(file_get_contents($_FILES["file"]["tmp_name"]));
	// $test = explode('.', $_FILES["file"]["name"]);
	// $ext = end($test);
	// $name = rand(100, 999) . '.' . $ext;
	// $location = 'subject fee/' .$name;  
	// move_uploaded_file($_FILES["file"]["tmp_name"], $location);
	$payment_status="Yes";
	$parent_id=$_SESSION['parent_id'];
	$total_amount=$_POST['total_amount'];
	$date=$_POST['payment_date'];
	$payment_total="";
	$result_student=mysqli_query($conn,"select * from student where parent_id_fk ='$parent_id' and activate='1' and isdeleted='0'");
	mysqli_query($conn,"insert into payment(payment_status,total_payment,parent_id_fk,payment_date) values ('$payment_status','$total_amount','$parent_id','$date')");
	mysqli_query($conn,"update student set parent_barred_status='unbarred' where parent_id_fk='$parent_id'");
	mysqli_query($conn,"update parent set parent_payment='paid',barred_status='unbarred' where parent_id='$parent_id'");
	$result_payment=mysqli_query($conn,"select * from payment order by payment_id desc limit 1");
	$row_payment=mysqli_fetch_assoc($result_payment);
	$payment_id=$row_payment['payment_id'];
	while($row_student=mysqli_fetch_assoc($result_student)){
	   $student_name=$row_student['student_name'];
	   $payment_total=$row_student['student_total_subject_fee'];
	   $student_id=$row_student['student_id'];
	   mysqli_query($conn,"insert into payment_receipt (payment_student,payment_total,payment_parent,payment_date,payment_id,student_id) values ('$student_name','$payment_total','$parent_id','$date','$payment_id','$student_id')");  
	}
	echo 1;
}
else{
	echo 0;
}
?>