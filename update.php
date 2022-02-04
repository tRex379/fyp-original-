<?php
include('dbconnect.php');
if(isset($_POST['parent_name'])){
	$parent_name=mysqli_real_escape_string($conn,$_POST['parent_name']);
	$parent_phone=$_POST['parent_phone'];
	$parent_id=$_SESSION['parent_id'];
	
	$result_parent=mysqli_query($conn,"select * from parent where parent_contact_num='$parent_phone'");
	$row_parent=mysqli_fetch_assoc($result_parent);
	$checking_parent=$row_parent['parent_id'];
	if(mysqli_num_rows($result_parent)!=0){
		if($checking_parent==$parent_id){
			mysqli_query($conn,"update parent set parent_name='$parent_name', parent_contact_num='$parent_phone' where parent_id='$parent_id'");
			echo 1;
		}
		else{
			echo "phone";
		}
	}
	else{
		mysqli_query($conn,"update parent set parent_name='$parent_name', parent_contact_num='$parent_phone' where parent_id='$parent_id'");
		echo 1;
	}
}

if(isset($_POST['student_name'])){
	$student_name=mysqli_real_escape_string($conn,$_POST['student_name']);
	$student_gender=$_POST['student_gender'];
	$student_id=$_POST['student_id'];
	$parent_id=$_SESSION['parent_id'];
	
	mysqli_query($conn,"update student set student_name='$student_name',student_gender='$student_gender' where parent_id_fk='$parent_id' and student_id='$student_id'");
}
?>
