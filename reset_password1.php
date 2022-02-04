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
  <title>Smart Tuition Center</title>
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
        <div class="logo"><h1></h1></div>
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
              <input type="text" class="form-control" name="secu_pin"  placeholder="Pin" required />
            </div>
          </div>              
        </div>
		 <div class="form-group">
          <div class="col-md-12">
            <label for="password" class="col-sm-2 control-label">New Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" placeholder="Password" minlength="8" required />
            </div>
          </div>
        </div>
		<div class="form-group">
          <div class="col-md-12">
            <label for="password" class="col-sm-2 control-label">Retype Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="c_password" placeholder="Confirm Password" required minlength=8 />
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" name="submitbtn" value="Submit" class="btn btn-primary">
			  <a href="homepage.php" class="btn btn-default">Back</a>
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
	   $pword=md5($_POST["password"]);
	   
	   $result1=mysqli_query($conn,"select * from parent where secu_pin = '$secu'");
	   $count=mysqli_num_rows($result1);
	   $row=mysqli_fetch_assoc($result1);
	   $max_date=$row['secu_date'];
	   $currdate = date("Y-m-d H:i:s");  	
	  
	  
	   if($count!=0 && $currdate<=$max_date){
	   $result=mysqli_query($conn,"update parent set parent_password='$pword' where secu_pin = '$secu'");
	   ?>
	       <script type ="text/javascript">
		     alert("Password update successful!! Now redirect you back to home page.");
			 window.location.replace("homepage.php");
		   </script>
       <?php
	   mysqli_close($conn);
	   }
	   else{
		?>
	       <script type ="text/javascript">
		     alert("Wrong or expired Security Code, please check or get a new code");
		   </script>
        <?php   
	   }
	 }
	 else{
	?>
		<script type="text/javascript">
			alert("The confirm password and the new password is not the same, please check again.");
		</script>
	<?php
	 }
}
?>