<!DOCTYPE html>
<?php
 include("dbconnection.php");
 if($_SESSION["staffloggedin"]!=1)
 {
	header("location:sign-in.php");
 }
 
 $tchid=$_REQUEST['tchid'];
 $result=mysqli_query($conn,"select * from teacher where Id = $tchid");
 $row=mysqli_fetch_assoc($result);
 $page=$_REQUEST['page'];
 $result2=mysqli_query($conn,"select * from subject where Subject_Status = 'active' order by Subject_Name asc");
 $result3=mysqli_query($conn,"select * from subject where Subject_Status = 'active' order by Subject_Name asc");
 $result4=mysqli_query($conn,"select * from subject where Subject_Status = 'active' order by Subject_Name asc");
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
          <li><a href="ad_index.php"><i class="fa fa-home"></i>Dashboard</a></li>
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-database"></i> New Record <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="ad_addteacher.php"><i class="fa fa-cog"></i> ADD TEACHER</a></li>
		      <li><a href="ad_addsubject.php"><i class="fa fa-cog"></i> ADD SUBJECT</a></li>		  
		      <li><a href="ad_addschedule.php"><i class="fa fa-cog"></i> ADD SCHEDULE</a></li>
            </ul>
          </li>
		  <li><a href="ad_edit(profile).php?page=1"><i class="fa fa-address-book-o"></i> Edit Profile </a></li>
          <li><a href="ad_tables(teacher).php?page=1"><i class="fa fa-users"></i> Management </a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
		    <li><a href="ad_index.php">Dashboard</a></li>
            <li><a href="ad_tables(teacher).php?page=1">List of Teacher</a></li>
            <li class="active">Update</li>
          </ol>
          <h1>UPDATE (TEACHER)</h1>
		  </br>
          <div class="row">
            <div class="col-md-12">
               <form role="form" method="post" action="" id="teacherform" name="teacherform">
				<div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="TeacherName" class="control-label">Name</label>
                    <input type="text" class="form-control" name="T_Name" id="T_Name" value="<?php echo $row["Name"];?>">
                    <span style="color:red" name="name_error" id="name_error">&nbsp;</span>					
                  </div>
				  <div class="col-md-6 margin-bottom-15">
				  <label for="TeacherIC" class="control-label">IC.No</label>
                  <input type="text" class="form-control" name="T_IC" id="T_IC" value="<?php echo $row["IC_No"];?>" maxlength="12">
                  <span style="color:red" name="ic_error" id="ic_error">&nbsp;</span>				  
                  </div>					
                </div>
                <div class="row">
				 <div class="col-md-6 margin-bottom-15">
                    <label for="TeacherIC" class="control-label">Contact number</label>
                    <input type="text" class="form-control" name="T_Contact" id="T_Contact" value="<?php echo $row["Contact_Number"];?>" maxlength="15">
                    <span style="color:red" name="contact_error" id="contact_error">&nbsp;</span>					
                  </div>
				  <div class="col-md-6 margin-bottom-15">
                  <label for="singleSelect">Gender</label>
                  <select class="form-control margin-bottom-15" name="Gender" id="Gender">
				    <option value="<?php echo $row["Gender"];?>">*<?php echo $row["Gender"];?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
				  <span style="color:red" name="gender_error" id="gender_error">&nbsp;</span>
                  </div>
				   </div>
			    <div class="row">
				   <div class="col-md-6 margin-bottom-15">
                    <label for="TeacherEmail" class="control-label">Email</label>
                    <input type="text" class="form-control" name="T_Email" id="T_Email" value="<?php echo $row["Email"];?>" readonly>
                    <span style="color:red" name="email_error" id="email_error">&nbsp;</span>					
                  </div>
                </div>
				<div class="panel panel-info">
                  <div class="panel-heading">Assign Teach Subjects (Teachers can assigned to maximum 3 subjects, this information is needed when creating schedule)</div>
                </div>
                 <div class="row">
				<div class="col-md-6 margin-bottom-15">
                    <label for="Venue_Name" class="control-label">Choose Standard for Subject 1</label>
                    <select class="form-control margin-bottom-15" name="standard" id="standard" onChange="getSubject(this.value);">
				  <option value=''><span style="color:blue">Select an standard</span></option>
                  <option value="PT3">PT3</option>
				  <option value="SPM">SPM</option>
                  </select>					
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="subject1">Subject 1 </label>
                     <select class="form-control" name="T_Sub1" id="T_Sub1">
				     <option value='<?php echo $row["Teach_Subject1"];?>'>*<?php echo $row["Teach_Subject1"];?></option>
                    </select>			
                    <span style="color:red" name="subject_error" id="subject_error">&nbsp;</span>					
                  </div>
				 </div>
				  <div class="row" style="margin-bottom:2%">
				  <div class="col-md-6 margin-bottom-15">
                   <label for="Venue_Name" class="control-label">Choose Standard for Subject 2</label>
                   <select class="form-control margin-bottom-15" name="standard" id="standard" onChange="getSubject1(this.value);">
				  <option value=''><span style="color:blue">Select an standard</span></option>
                  <option value="PT3">PT3</option>
				  <option value="SPM">SPM</option>
                  </select>					
                  </div>
				   <div class="col-md-6 margin-bottom-15">
                    <label for="subject1">Subject 2 </label>
                    <select class="form-control" name="T_Sub2" id="T_Sub2">
					<option value='<?php echo $row["Teach_Subject2"];?>'>*<?php echo $row["Teach_Subject2"];?></option>
                    </select>						
                  </div>
				 </div>
				  <div class="row" style="margin-bottom:2%">
				  <div class="col-md-6 margin-bottom-15">
                   <label for="Venue_Name" class="control-label">Choose Standard for Subject 3</label>
                   <select class="form-control margin-bottom-15" name="standard" id="standard" onChange="getSubject2(this.value);">
				  <option value=''><span style="color:blue">Select an standard</span></option>
                  <option value="PT3">PT3</option>
				  <option value="SPM">SPM</option>
                  </select>					
                  </div>
				   <div class="col-md-6 margin-bottom-15">
                    <label for="subject1">Subject 3 </label>
                    <select class="form-control" name="T_Sub3" id="T_Sub3">
					<option value='<?php echo $row["Teach_Subject3"];?>'>*<?php echo $row["Teach_Subject3"];?></option>
                    </select>					
                    <span style="color:red" name="subject_error" id="subject_error">&nbsp;</span>					
                  </div>
				</div>
               <div class="row templatemo-form-buttons">
                <div class="col-md-12" style="margin-bottom:3%;margin-top:2%">
                  <button type="submit" class="btn btn-primary" name="savebtn" onclick="return validateForm()">Update</button>
                  <button type="button" class="btn btn-default" onclick="location.href = 'ad_tables(teacher).php?page=<?php echo $page?>'">Cancel</button> 
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
function name() 
{
    if (document.teacherform.T_Name.value == "")
	{
	  document.getElementById('name_error').innerHTML = "Please enter teacher's name";
	  return false;
	}
	else
	{
	  document.getElementById('name_error').innerHTML = "&nbsp";
	  return true;
    }
}

function ic() 
{
    if (document.teacherform.T_IC.value == "")
	{
	  document.getElementById('ic_error').innerHTML = "Please enter teacher's IC";
	  return false;
	}
	else if (isNaN(document.teacherform.T_IC.value))
	{
	  document.getElementById('ic_error').innerHTML = "Please enter number format only.";
	  return false;
	}
	else if (document.teacherform.T_IC.value.length < 12||document.teacherform.T_IC.value.length >= 13)
	{
	  document.getElementById('ic_error').innerHTML = "Please enter 12 number IC ";
	  return false;
    }
	else
	{
	  document.getElementById('ic_error').innerHTML = "&nbsp";
	  return true;
    }
}

function gender() 
{
    if (document.teacherform.Gender.value == "")
	{
	  document.getElementById('gender_error').innerHTML = "Please select teacher's gender";
	  return false;
	}
	else
	{
	  document.getElementById('gender_error').innerHTML = "&nbsp";
	  return true;
    }
}


function number() 
{
    if (document.teacherform.T_Contact.value == "")
	{
	  document.getElementById('contact_error').innerHTML = "Please enter teacher's contact number.";
	  return false;
	}
	else if (isNaN(document.teacherform.T_Contact.value))
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
	var email = document.getElementById('T_Email');
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

function password() 
{
	 if (document.teacherform.T_Password.value == "")
	{
	  document.getElementById('password_error').innerHTML = "Please enter teacher's password.";
	  return false;
	}
	else if (document.teacherform.T_Password.value.length <8)
	{
	  document.getElementById('password_error').innerHTML = "Password length must be more than 8 character";
	  return false;
	}
	else
	{
	document.getElementById('password_error').innerHTML = "&nbsp";
	return true;
	}
}

function confirmpassword()
{ 
	 if (document.teacherform.T_C_Password.value != document.teacherform.T_Password.value)
	{
	  document.getElementById('c_password_error').innerHTML = "Password and confirm password not match.";
	  return false;
	}
	
	else if (document.teacherform.T_C_Password.value == "")
	{
	  document.getElementById('c_password_error').innerHTML = "Please reenter password";
	  return false;
	}
	
	else
	{
	document.getElementById('c_password_error').innerHTML = "&nbsp";
	return true
	}
}


function validateForm()
{ 
  var tname=name();
  var tic=ic();
  var tgender=gender();
  var num=number();
  var mail=email();
  var pass=password();
  var cpass=confirmpassword();
  
  if(tname&&tic&&tgender&&num&&mail&&pass&&cpass)
  {
	  return true;
  }
  else
  return false;
}

function getSubject(val) {
	$.ajax({
	type: "POST",
	url: "getSubject.php",
	data:'Standard_Name='+val,
	success: function(data){
		$("#T_Sub1").html(data);
	}
	});
}

function getSubject1(val) {
	$.ajax({
	type: "POST",
	url: "getSubject.php",
	data:'Standard_Name='+val,
	success: function(data){
		$("#T_Sub2").html(data);
	}
	});
}

function getSubject2(val) {
	$.ajax({
	type: "POST",
	url: "getSubject.php",
	data:'Standard_Name='+val,
	success: function(data){
		$("#T_Sub3").html(data);
	}
	});
}
</script>

<?php 
     if(isset($_POST["savebtn"]))
	 { 

	   $tname=$_POST["T_Name"];
	   $tic=$_POST["T_IC"];
	   $tgender=$_POST["Gender"];
	   $tcontact=$_POST["T_Contact"];
	   $temail=$_POST["T_Email"];
	   $ttsub1=$_POST["T_Sub1"];
	   $ttsub2=$_POST["T_Sub2"];
	   $ttsub3=$_POST["T_Sub3"];
	   
	     $result1=mysqli_query($conn,"update teacher set Name='$tname',IC_No='$tic',Gender='$tgender',
		 Contact_Number='$tcontact',Email='$temail',Teach_Subject1='$ttsub1',Teach_Subject2='$ttsub2',Teach_Subject3='$ttsub3' where Id=$tchid");
		 
		$subject = "Change To Personal Information <Smart Tuition Center>";
		$message = "A change have been made to your teacher account in Smart Tuition Center Admin Panel, the changed information are as below : 
		\n\n Name: ".$tname."\n\n IC: ".$tic. "\n\n Gender: ".$tgender."\n\n Contact: ".$tcontact."\n\n Teach Subject 1: ".$ttsub1."\n\n Teach Subject 2: ".$ttsub2."\n\n Teach Subject 3: ".$ttsub3." \n\n \n\nNo change is applied to information that is blank (Eaxample: IC :'Blank')\n\n.";
		$from = "From: Smart Tuition Centre <linksky34@gmail.com>";
		
		mail($temail,$subject,$message,$from);	
	   
	   if($result1)
	   {
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>		
<script type="text/javascript">
       swal({
		   title: "Successful!",
		   text:"A teacher account have beeen created, an change information email will be send to the teacher.",
		   icon:"success"
		   });
		 setTimeout(function(){ window.location = "ad_tables(teacher).php?page=1"; }, 5000)
		 
</script>
<?php
	  }
	 }
?>