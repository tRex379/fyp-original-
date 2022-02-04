<?php    
 include("dbconnect.php");
 if(isset($_POST["register"])){  
	  $name=mysqli_real_escape_string($conn,$_POST['name']);
	  $email=$_POST['email'];
	  $ic=$_POST['ic'];
	  $phone=$_POST['phone'];
	  $password=md5($_POST['password']);
	  $confirm_password=md5($_POST['confirm_password']);
	  $pass_email=0;
	  $pass_ic=0;
	  $pass_phone=0;
	  
	  $result_email=mysqli_query($conn,"select * from parent where parent_email ='$email'");
	  $result_ic=mysqli_query($conn,"select * from parent where parent_ic ='$ic'");
	  $result_student_ic=mysqli_query($conn,"select * from student where student_ic ='$ic'");
	  $result_phone=mysqli_query($conn,"select * from parent where parent_contact_num ='$phone'");

	  if(mysqli_num_rows($result_ic)!=0){
		echo "ic";
	  }
	  else if(mysqli_num_rows($result_student_ic)!=0){
		echo "student_ic";
	  }
	  else if(mysqli_num_rows($result_phone)!=0){
		echo "phone";
	  }
	  else if(mysqli_num_rows($result_email)!=0){
		echo "email";
	  }
	  else{
		$pass_ic=1;
		$pass_email=1;
		$pass_phone=1;
	  }
	  if($pass_email==1 && $pass_ic==1 && $pass_phone==1){
		mysqli_query($conn,"insert into parent(parent_name,parent_email,parent_ic,parent_contact_num,parent_password) values ('$name','$email','$ic','$phone','$password')");
		echo "pass";
	  }
 }
?>