<?php    
include("dbconnect.php");
if(isset($_POST["email"])){ 
	  $email=$_POST['email'];
	  $password=md5($_POST['password']);
      $result = mysqli_query($conn,"select * from parent where parent_email = '$email' and parent_password = '$password'");
	  $check_email=mysqli_query($conn,"select parent_email from parent where parent_email ='$email'");
	  $check_password=mysqli_query($conn,"select parent_password from parent where parent_password ='$password'");
	  $row=mysqli_fetch_assoc($result);
      if(mysqli_num_rows($result)!=0){  
		  $_SESSION['parent_id']=$row['parent_id'];
		  $_SESSION['login']=1;
		  $_SESSION['parent_first_time']=$row['parent_first_time'];
		  echo 1;
      }  
	  else if(mysqli_num_rows($check_email)!=1 || mysqli_num_rows($check_password)!=0){  
		echo 2;
      }
	  else if(mysqli_num_rows($check_email)!=0 && mysqli_num_rows($check_password)!=1){
		echo 3;
	  }
	  else{
		echo "Fail";
	  }
}

if(isset($_POST['logout'])){ 
	echo session_destroy();
}
 ?>  
 
 	<?php
									/*if(isset($_POST["loginbtn"]))
									{
									$parent_email=$_POST["parent_email"];
									$parent_password=$_POST["parent_password"];
										
									$result1=mysqli_query($conn,"select * from parent where parent_email='$parent_email'");
									$row=mysqli_fetch_assoc($result1);
									if(mysqli_num_rows($result1)!=1)
									{
									?>
											<script type="text/javascript">document.getElementById('email_error').innerHTML="Email Not Exited";
											</script>
									<?php
									}
									else{
									?>
											<script type="text/javascript">document.getElementById('email_error').innerHTML="";
											</script>
									<?php
									}
									if($parent_email=="")
									{
									?>
											<script type="text/javascript">document.getElementById('email_error').innerHTML="Email Invalid";
											</script>
									<?php
									}
									else{
									?>
											<script type="text/javascript">document.getElementById('email_error').innerHTML="";
											</script>
									<?php
									}
									$result2=mysqli_query($conn,"select * from parent where parent_password='$parent_password'");
									$row=mysqli_fetch_assoc($result2);
									if($parent_password=="")
									{
									?>
											<script type="text/javascript">document.getElementById('passowrd_error').innerHTML="Password Invalid";
											</script>
									<?php
									}
									else{
									?>
											<script type="text/javascript">document.getElementById('passowrd_error').innerHTML="";
											</script>
									<?php
									}
									if(mysqli_num_rows($result2)==1 && mysqli_num_rows($result1)==1)
									{
										$_SESSION["parent_id"]=$row["parent_id"];
										$_SESSION["login"]=1;
										
									}
									}*/
									?>