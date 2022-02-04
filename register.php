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
	<div style="text-align:center;padding:5px;font-family:arial;font-size:20pt;padding-top:40px;">REGISTER</div>
	<p style="text-align:center;padding:10px;">Haven't register? Please register by entering the required information and code</p>
      <form class="form-horizontal templatemo-signin-form" role="form" action="" method="post">
        <div class="form-group">
          <div class="col-md-12">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" placeholder="Email" required/>
            </div>
          </div>
        </div>
		 <div class="form-group">
          <div class="col-md-12">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" placeholder="Password" minlength=8 required/>
            </div>
          </div>
        </div>
		<div class="form-group">
          <div class="col-md-12">
            <label for="password" class="col-sm-2 control-label">Confirm Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="c_password" placeholder="Confirm Password" required/>
            </div>
          </div>
        </div>
		<div class="form-group">
          <div class="col-md-12">
            <label for="password" class="col-sm-2 control-label">Code</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="c_code" placeholder="Validation Code" required/>
			  <span style="color:blue" name="code_info" id="code_info">The code is for superadmin validation, and should only knew & use by superadmin for registration</span>		
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" name="registerbtn" value="Register" class="btn btn-default">
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
if(isset($_POST["registerbtn"]))
{
     //two password are euqal to each other
	 if($_POST["password"]==$_POST["c_password"])
	 {
	   $email=$_POST["email"];
	   $pword=base64_encode($_POST["password"]);
	   $code=$_POST["c_code"];
	   
	   $sql="select * from superadmin where Email = '$email'";
	   $result=mysqli_query($conn,$sql);
	   
	   //no 2 member uses the same email address
	   if(mysqli_num_rows($result)!=0)
	   {
	   ?>
	       <script type ="text/javascript">
		     alert("Email already existed");
		   </script>
	   <?php
	   }
	   else if($code!="smart6635")
	   {
	   ?>
	       <script type ="text/javascript">
		     alert("Wrong registration code, please contact the adminstration for more information");
		   </script>
	   <?php
	   }
	   else
	   {
	       $result1=mysqli_query($conn,"insert into superadmin(Email,Password) values ('$email','$pword')");
		   if($result1)
		   { 
			   ?>
			   <script type ="text/javascript">
			   alert("Registration success, now redrecting to the login page");
			   </script>
			 <?php
			  header("location:sign-in.php");
		   }
		   
	   }
	   mysqli_close($conn);
	  }
	  else
	  {
  	   ?>
	       <script type ="text/javascript">
		     alert("Password and corfirm password are not the same");
		   </script>
	   <?php
	  }
}
	   ?>