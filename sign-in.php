<?php 
include("dbconnection.php");
?>
<!DOCTYPE html>
<html>
<?php
    if(isset($_POST["loginbtn"]))
	{
		$aemail=$_POST["ad_email"];
		$apword=base64_encode($_POST["ad_pword"]);
		$identity=$_POST["identity"];
		
		$result=mysqli_query($conn,"select * from admin where Email = '$aemail' and Password='$apword' and Status='active'");
		$row=mysqli_fetch_assoc($result);
		$result1=mysqli_query($conn,"select * from teacher where Email = '$aemail' and Password='$apword' and Status='active'");
		$row1=mysqli_fetch_assoc($result1);
		$result2=mysqli_query($conn,"select * from superadmin where Email = '$aemail' and Password='$apword'");
		$row2=mysqli_fetch_assoc($result2);
		
		if(mysqli_num_rows($result)!=1&&mysqli_num_rows($result1)!=1&&mysqli_num_rows($result2)!=1)
		{
?>
		    <script type="text/javascript">
			alert("Wrong email address or Password");
			</script>
<?php
		}
		else if(mysqli_num_rows($result)==1&&$identity==2)
		{
			$_SESSION["sess_stfid"]=$row["id"];
			$_SESSION["staffloggedin"]=1;
			header("Location:ad_index.php");
		}
		
		else if(mysqli_num_rows($result1)==1&&$identity==3)
		{
			$_SESSION["sess_tchid"]=$row1["Id"];
			$_SESSION["tchloggedin"]=1;
			header("Location:tch_index.php");
		}
		
		else if(mysqli_num_rows($result2)==1&&$identity==1)
		{
			$_SESSION["sess_adid"]=$row2["ID"];
			$_SESSION["loggedin"]=1;
			header("Location:index.php");
		}
		
		else if($identity=="")
		{
?>
		    <script type="text/javascript">
			    alert("Please select an identity in 'Identity'");
			</script>
<?php
		}	
		
		else
		{
?>
		    <script type="text/javascript">
			    alert("There is no such account exist according to the email,password & identity that you have entered");
			</script>
<?php
		}	
		mysqli_close($conn);
	}
?>
<script src="https://www.gstatic.com/firebasejs/4.12.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDocfpSQzB5zQExuNGnhny_tt_kkJbsEow",
    authDomain: "new1-b039a.firebaseapp.com",
    databaseURL: "https://new1-b039a.firebaseio.com",
    projectId: "new1-b039a",
    storageBucket: "",
    messagingSenderId: "109719300817"
  };
  firebase.initializeApp(config);
</script>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Admin Panel</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
<!-- 
Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
</head>
<body>
  <div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Smart Tuition Centre Portal</h1></div>
      </div>   
    </div>
    <div class="template-page-wrapper">
	 <div class="col-md-12">
	 <div style="text-align:center;padding:5px;font-family:arial;font-size:20pt;padding-top:40px;">LOGIN</div>
	   <p style="text-align:center;padding:10px;">Already Registered? You may now logged into the system</p>
	   </div>
      <form class="form-horizontal templatemo-signin-form" role="form" id="login_form" name="login_form" action="" method="post">
        <div class="form-group">
          <div class="col-md-12">
            <label for="username" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="ad_email" id="ad_email" placeholder="Email">
			  
            </div>
          </div>              
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="ad_pword" placeholder="Password">
            </div>
          </div>
        </div>
		 <div class="form-group">
          <div class="col-md-12">
            <label for="password" class="col-sm-2 control-label">You are :</label>
            <div class="col-sm-10">
            <select class="form-control margin-bottom-15" name="identity" id="identity">
			<option value="">Please select an identity</option>
			<option value="1">Superadmin</option>
			<option value="2">Admin</option>
			<option value="3">Teacher</option>
			</select>	  
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
                <label>
                  <a href="#myModal" data-toggle="modal" style="text-decoration:none;">Forgot Password?</a>
                </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
			  <input type="submit" name="loginbtn" value="Login" class="btn btn-default" onsubmit="return validate()">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
 
 <!--Modal-->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
          </div>
		   <div class="modal-body">

 <form role="form" name="forgotfrm" method="post" action="" >
 <div class="form-group">
 <p>
 Type your email below and we will send you password recovery instruction to your email.
</p>
            <label for="password" class="form-label">Identity</label>
            <select class="form-control margin-bottom-15" name="fg_identity" id="fg_identity">
			<option value="">Please select an identity</option>
			<option value="1">Superadmin</option>
			<option value="2">Admin</option>
			<option value="3">Teacher</option>
			</select>	  
 <label>Enter Your Email:</label><input type="email" class="form-control" name="email" />
 </div>
<p><button name="request" type="submit" class="btn btn-primary">Request</button></p>
 </form>
 </div>
        </div>
      </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/templatemo_script.js"></script>
</body>
</html>
<?php
function random_string()
{
    $character_set_array = array();
    $character_set_array[] = array('count' => 5, 'characters' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $character_set_array[] = array('count' => 3, 'characters' => '0123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set) 
	{
        for ($i = 0; $i < $character_set['count']; $i++) 
		{
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
}
    shuffle($temp_array);
    return implode('', $temp_array);
}
	
	if(isset($_POST["request"]))
{
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$currdate = date("Y-m-d H:i:s");  	
	$after_date = date("Y-m-d H:i:s",strtotime("+1 hours", strtotime($currdate)));
	$email_check = mysqli_query($conn,"select * from superadmin where Email= '$email'");
	$email_check1 = mysqli_query($conn,"select * from admin where Email= '$email'");
	$email_check2 = mysqli_query($conn,"select * from teacher where Email= '$email'");
	$count = mysqli_num_rows($email_check);
	$count1 = mysqli_num_rows($email_check1);
	$count2 = mysqli_num_rows($email_check2);
	$fg_identity=$_POST["fg_identity"];
	
	if($count != 0&&$fg_identity==1)
	{
		$pin = random_string();

		$result = mysqli_query($conn,"update superadmin set secu_pin = '$pin',secu_date = '$after_date' where Email = '$email'");
		
		$subject = "Forgot Password Information";
		$message = "You can change your password by using this security pin and click the link at below:\n\n http://localhost/fyp/reset_password.php \n\nSecurity Pin:".$pin." \n\n Thank you.\n\nThe pin code only within 1 hours.";
		$from = "From: Patrick Lee <linksky34.smart@gmail.com>";
		mail($email,$subject,$message,$from);	
	
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>		
<script type="text/javascript">
       swal({
		   title: "Successful!",
		   text:"You can check your email to reset password.",
		   icon:"success"
		   });
</script>
<?php
	}
	
		else if($count1 != 0&&$fg_identity==2)
	{
		$pin = random_string();

		$result = mysqli_query($conn,"update admin set secu_pin = '$pin',secu_date = '$after_date' where Email = '$email'");
		
		$subject = "Forgot Password Information";
		$message = "You can change your password by using this security pin and click the link at below:\n\n http://localhost/fyp/reset_password.php \n\nSecurity Pin:".$pin." \n\n Thank you.\n\nThe pin code only within 1 hours.";
		$from = "From: Patrick Lee <linksky34.smart@gmail.com>";
		
		mail($email,$subject,$message,$from);	
	
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>		
<script type="text/javascript">
       swal({
		   title: "Successful!",
		   text:"You can check your email to reset password.",
		   icon:"success"
		   });
</script>
<?php
	}
	
	else if($count2 != 0&&$fg_identity==3)
	{
		$pin = random_string();

		$result = mysqli_query($conn,"update teacher set secu_pin = '$pin',secu_date = '$after_date' where Email = '$email'");
		
		$subject = "Forgot Password Information";
		$message = "You can change your password by using this security pin and click the link at below:\n\n http://localhost/fyp/reset_password.php \n\nSecurity Pin:".$pin." \n\n Thank you.\n\nThe pin code only within 1 hours.";
		$from = "From: Patrick Lee <linksky34.smart@gmail.com>";
		
		mail($email,$subject,$message,$from);	
	
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>		
<script type="text/javascript">
       swal({
		   title: "Successful!",
		   text:"You can check your email to reset password.",
		   icon:"success"
		   });
</script>
<?php
	}
	
	
      else
      {
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>		
<script type="text/javascript">
       swal({
		   title: "OPPS Email Incorrect!",
		   text:"Please key in correct E-mail!",
		   icon:"error"
		   });
</script>
<?php
      }
}
?>