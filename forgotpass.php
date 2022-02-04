<?php 
include("dbconnection.php");
?>

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
  <title>Dashboard Sign In, Free Admin Template</title>
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
        <div class="logo"><h1>Smart Tuition Centre Management Portal</h1></div>
      </div>   
    </div>
    <div class="template-page-wrapper">
	 <div class="col-md-12">
	 <div style="text-align:center;padding:5px;font-family:arial;font-size:20pt;padding-top:40px;">Forgot Password</div>
	   <p style="text-align:center;padding:10px;">Please enter your username for password reset</p>
	   </div>
      <form class="form-horizontal templatemo-signin-form" role="form" action="" method="post">
        <div class="form-group">
          <div class="col-md-12">
            <label for="username" class="col-sm-2 control-label">User Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="fgt_username" placeholder="Username">
            </div>
          </div>              
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" name="forgotbtn" value="Forgot" class="btn btn-default">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

<?php
 
    if(isset($_POST["loginbtn"]))
	{
		$aemail=$_POST["ad_email"];
		$apword=md5($_POST["ad_pword"]);
		
		$result=mysqli_query($conn,"select * from admin where email = '$aemail' and password='$apword'");
		$row=mysqli_fetch_assoc($result);
		
		if(mysqli_num_rows($result)!=1)
		{
		?>
		    <script type="text/javascript">
			    alert("Wrong email address or Password");
			</script>
		<?php
		}
		else
		{
			$_SESSION["sess_adid"]=$row["id"];
			$_SESSION["loggedin"]=1;
			header("Location:addteacher.php");
		}
		
		mysqli_close($conn);
	}
	    ?>
<?php
if(isset($_POST) & !empty($_POST)){
	
	$username = $_POST['fgt_username'];
	$sql = "SELECT * FROM `admin` WHERE username = '$username'";
	$res = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1){
		$r = mysqli_fetch_assoc($res);
		$password = $r['password'];
		$to = $r['email'];
		$subject = "Your Recovered Password";
 
		$message = "Please use this password to login " . $password;
		$headers = "From : vivek@codingcyber.com";
		if(mail($to, $subject, $message, $headers)){
			echo "Your Password has been sent to your email id";
		}else{
			echo "Failed to Recover your password, try again";
		}
 
	}else{
		echo "User name does not exist in database";
	}
}
?>