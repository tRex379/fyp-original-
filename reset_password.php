<?php include("dbconnection.php");?>

<!DOCTYPE html>
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
	<div style="text-align:center;padding:5px;font-family:arial;font-size:20pt;padding-top:40px;">Reset Password</div>
	<p style="text-align:center;padding:10px;">Please enter your secuity code & new password below</p>
      <form class="form-horizontal templatemo-signin-form" role="form" action="" method="post">
        <div class="form-group">
          <div class="col-md-12">
            <label for="username" class="col-sm-2 control-label">Security Pin</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="secu_pin"  placeholder="Pin" required/>
            </div>
          </div>              
        </div>
		 <div class="form-group">
          <div class="col-md-12">
            <label for="password" class="col-sm-2 control-label">New Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" placeholder="Password" minlength=8 required/>
            </div>
          </div>
        </div>
		<div class="form-group">
          <div class="col-md-12">
            <label for="password" class="col-sm-2 control-label">Retype Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="c_password" placeholder="Confirm Password" minlength=8 required/>
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" name="submitbtn" value="Submit" class="btn btn-primary">
			  <a href="sign-in.php" class="btn btn-default">Back to login</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

<?php 
if(isset($_POST["submitbtn"]))
{
     //two password are euqal to each other
	 if($_POST["password"]==$_POST["c_password"])
	 {
	   $secu=$_POST["secu_pin"];
	   $pword=base64_encode($_POST["password"]);
	   
	   $result_a=mysqli_query($conn,"select * from superadmin where secu_pin = '$secu'");
	   $count_a=mysqli_num_rows($result_a);
	   $row_a=mysqli_fetch_assoc($result_a);
	   $max_date_a=$row_a['secu_date'];
	   $currdate_a = date("Y-m-d H:i:s");  
	   
	   $result_b=mysqli_query($conn,"select * from admin where secu_pin = '$secu'");
	   $count_b=mysqli_num_rows($result_b);
	   $row_b=mysqli_fetch_assoc($result_b);
	   $max_date_b=$row_b['secu_date'];
	   $currdate_b = date("Y-m-d H:i:s");  
	   
	   $result_c=mysqli_query($conn,"select * from teacher where secu_pin = '$secu'");
	   $count_c=mysqli_num_rows($result_c);
	   $row_c=mysqli_fetch_assoc($result_c);
	   $max_date_c=$row_c['secu_date'];
	   $currdate_c = date("Y-m-d H:i:s");  
	   
	   
	   if($count_a!=0&&$currdate_a<=$max_date_a)
	   {
	   $result=mysqli_query($conn,"update superadmin set Password='$pword' where secu_pin = '$secu'");
	   ?>
	       <script type ="text/javascript">
		     alert("Password update successful!! Now redirect you back to Admin Panel.");
			 window.location.replace("sign-in.php");
		   </script>
       <?php
	   mysqli_close($conn);
	   }
	   else  if($count_b!=0&&$currdate_b<$max_date_b)
	{
	   $result1=mysqli_query($conn,"update admin set Password='$pword' where secu_pin = '$secu'");
	   ?>
	       <script type ="text/javascript">
		     alert("Password update successful!! Now redirect you back to Admin Panel.");
			 window.location.replace("sign-in.php");
		   </script>
       <?php
	   mysqli_close($conn);
	 }
	  else  if($count_c!=0&&$currdate_c<$max_date_c)
	{
	   $result2=mysqli_query($conn,"update teacher set Password='$pword' where secu_pin = '$secu'");
	   ?>
	       <script type ="text/javascript">
		     alert("Password update successful!! Now redirect you back to Admin Panel .");
			 window.location.replace("sign-in.php");
		   </script>
       <?php
	   mysqli_close($conn);
	 }
	   else
	   {
		?>
	       <script type ="text/javascript">
		     alert("Wrong or expired Security Code, please check or get a new code");
		   </script>
        <?php   
	   }
	 }
}
?>