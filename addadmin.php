<?php
 include("dbconnection.php");

 if($_SESSION["loggedin"]!=1)
 {
	 header("location:sign-in.php");
 }
?>
<!DOCTYPE html>
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
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li>
            <form class="navbar-form" style="background-color:grey;margin-top:-20px;padding:10px;border-bottom:1px solid black;">
              <h3 style="margin-bottom:10px;margin-top:0;padding:4px 0px 0px 4px;color:white;">Menu</h3>
            </form>
          </li>
          <li><a href="index.php"><i class="fa fa-home"></i>Dashboard</a></li>
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i> New Record <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
			  <li><a href="addadmin.php"><i class="fa fa-cog"></i> ADD ADMIN</a></li>
              <li><a href="addteacher.php"><i class="fa fa-cog"></i> ADD TEACHER</a></li>
		      <li><a href="addsubject.php"><i class="fa fa-cog"></i> ADD SUBJECT</a></li>		  
		      <li><a href="addschedule.php"><i class="fa fa-cog"></i> ADD SCHEDULE</a></li>
            </ul>
          </li>
		  <li><a href="edit(profile).php?page=1"><i class="fa fa-address-book-o"></i> Edit Profile </a></li>
          <li><a href="tables(admin).php?page=1"><i class="fa fa-users"></i> Management </a></li>
		  <li><a href="tables(paymentRF).php?page=1"><i class="fa fa-money"></i> Payment</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
		    <li><a href="index.php">Dashboard</a></li>
            <li class="active">ADD ADMIN</li>
          </ol>
          <h1>ADD ADMIN</h1>
		  </br>
          <div class="row">
            <div class="col-md-12">
              <form role="form" method="post"  action="" name="admin_form">   
			    <div class="row">
				  <div class="col-md-6 margin-bottom-15">
                    <label for="TeacherIC" class="control-label">Contact number</label>
                    <input type="text" class="form-control" name="Ad_Contact" id="Ad_Contact" maxlength="15"> 
                    <span style="color:red" name="contact_error" id="contact_error">&nbsp;</span>					
                  </div>
				 </div>
				 <div class="row">
				   <div class="col-md-6 margin-bottom-15">
                    <label for="TeacherEmail" class="control-label">Email</label>
                    <input type="text" class="form-control" name="Ad_Email" id="Ad_Email">
                    <span style="color:red" name="email_error" id="email_error">&nbsp;</span>						
                  </div>
                </div>
				<div class="row">
				 </div>
              <div class="row templatemo-form-buttons">
                <div class="col-md-12" style="margin-top:1%">
                  <button type="submit" class="btn btn-primary" name="savebtn" onclick="return validateForm()">Add</button>
                  <button type="button" class="btn btn-default" onclick="location.href = 'index.php'">Cancel</button> 
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
          </div>
          <div class="modal-footer">
            <a href="logout.php" class="btn btn-primary">Yes</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>

    <footer class="templatemo-footer">
      <div class="templatemo-copyright">
        <p>Copyright &copy; 2018 Smart Tuition Center <!-- Credit: www.templatemo.com --></p>
      </div>
    </footer>
  </div>
</div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/templatemo_script.js"></script>
</body>
</html>

<script type="text/javascript">
function number() 
{
    if (document.admin_form.Ad_Contact.value == "")
	{
	  document.getElementById('contact_error').innerHTML = "Please enter your contact number.";
	  return false;
	}
	 else if (isNaN(document.admin_form.Ad_Contact.value))
	{
	  document.getElementById('contact_error').innerHTML = "Please enter number format only.";
	  return false;
	}
	else
	{
	  document.getElementById('contact_error').innerHTML = "&nbsp";
	  return true;
    }
}

function email() 
{   var email = document.getElementById('Ad_Email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	if (!filter.test(email.value)) {
     document.getElementById('email_error').innerHTML = "Please enter an valid email format (example@xmail.com)";
    email.focus;
    return false;
	}
	else
	{
	document.getElementById('email_error').innerHTML = "&nbsp";
	return true;
	}
}

function validateForm()
{ 
  var num=number();
  var mail=email();
  
  if(num&&mail)
  {
	  return true;
  }
  else
  return false;
}
</script>

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

     if(isset($_POST["savebtn"]))
	 { 
	   $adcontact=$_POST["Ad_Contact"];
	   $ademail=$_POST["Ad_Email"];
	   $adpassword=base64_encode($pin = random_string());
	   $currdate = date("Y-m-d H:i:s");  	
	   $after_date = date("Y-m-d H:i:s",strtotime("+168 hours", strtotime($currdate)));
	   
	     $result1=mysqli_query($conn,"select * from admin where Email = '$ademail'");
		  if(mysqli_num_rows($result1)!=0)
	   {
	   ?>
	       <script type ="text/javascript">
		     alert("Error,Email already existed, please enter a different Email");
		   </script>
	   <?php
	   }
	     else
	   {
		 
	     $result=mysqli_query($conn,"insert into admin (Contact_Number,Email,Password,secu_pin,secu_date)values('$adcontact','$ademail','$adpassword','$pin','$after_date')");
		 
	    $subject = "Change Admin Account Password <Smart Tuition Centre>";
		$message = "You account in Smart Tution Centre has been created.You can change your password by using this security pin and click the link at below:\n\n http://localhost/fyp/reset_password.php \n\nSecurity Pin:".$pin."\n\nYou can also login with the default password for your account in Admin Panel which is also the security pin : ".$pin."\n\nThe link to admin panel is http://localhost/fyp/sign-in.php \n\nThank you.\n\nThe pin code only within 1 week.";
		$from = "From: Smart Tuition Centre <linksky34@gmail.com>";
		
		mail($ademail,$subject,$message,$from);	
		 
	   if($result)
	  {
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>		
<script type="text/javascript">
       swal({
		   title: "Successful!",
		   text:"A admin account have beeen created, an change password email will be send to the teacher.",
		   icon:"success"
		   });
		   setTimeout(function(){ window.location = "addadmin.php"; }, 5000)
</script>
<?php
	  }
	 }
	}
?>
