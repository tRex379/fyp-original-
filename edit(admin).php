<?php
 include("dbconnection.php");
 if($_SESSION["loggedin"]!=1)
 {
	header("location:sign-in.php");
 }
 
 $adid=$_REQUEST['adid'];
 $result=mysqli_query($conn,"select * from admin where id = $adid");
 $row=mysqli_fetch_assoc($result);
 $page=$_REQUEST['page'];
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
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src=" http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
            <li><a href="tables(admin).php?page=1">List of Admins</a></li>
            <li class="active">Update</li>
          </ol>
          <h1>Employee (Admin)</h1>
		  </br>
          <div class="row">
            <div class="col-md-12">
			 <form role="form" method="post"  action="" name="admin_form">  
             <div class="row">
				  <div class="col-md-6 margin-bottom-15">
                    <label for="TeacherIC" class="control-label">Contact number</label>
                    <input type="text" class="form-control" name="Ad_Contact" id="Ad_Contact" value="<?php echo $row['Contact_Number'];?>" maxlength="15"> 
                    <span style="color:red" name="contact_error" id="contact_error">&nbsp;</span>					
                  </div>
				 </div>
				 <div class="row">
				   <div class="col-md-6 margin-bottom-15">
                    <label for="TeacherEmail" class="control-label">Email</label>
                    <input type="text" class="form-control" name="Ad_Email" id="Ad_Email" value="<?php echo $row['Email'];?>" readonly>
                    <span style="color:red" name="email_error" id="email_error">&nbsp;</span>						
                  </div>
                </div>
              <div class="row templatemo-form-buttons">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="savebtn" onclick="return validateForm()">Update</button>
                  <button type="button" class="btn btn-default" onclick="location.href = 'tables(admin).php?page=<?php echo $page?>'">Cancel</button> 
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
{  
	var email = document.getElementById('Ad_Email');
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
     if(isset($_POST["savebtn"]))
	 { 
	   $adcontact=$_POST["Ad_Contact"];
	   $ademail=$_POST["Ad_Email"];
	   
	     $result=mysqli_query($conn,"update admin set Contact_Number='$adcontact',Email='$ademail' where id=$adid");
		 
        $subject = "Change To Personal Information <Smart Tuition Center>";
		$message = "A change have been made to your admin account in Smart Tuition Center Admin Panel, the changed information are as below : 
		\n\n Email: ".$ademail. "\n\n Contact: ".$adcontact." \n\n \n\nNo change is applied to information that is blank (Eaxample: IC :'Blank')\n\n.";
		$from = "From: Smart Tuition Centre <linksky34@gmail.com>";
		
		mail($ademail,$subject,$message,$from);	
	   
	   if($result)
	   {
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>		
<script type="text/javascript">
       swal({
		   title: "Successful!",
		   text:"A admin account have beeen created, an change information email will be send to the teacher.",
		   icon:"success"
		   });
		 setTimeout(function(){ window.location = "tables(admin).php?page=1"; }, 5000)
		 
</script>
<?php
	  }
	 }
?>