<?php
 include("dbconnection.php");

 if($_SESSION["staffloggedin"]!=1)
 {
	 header("location:sign-in.php");
 }
 
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
            <li class="active">ADD TEACHER</li>
          </ol>
          <h1>ADD TEACHER</h1>
		  </br>
          <div class="row">
            <div class="col-md-12" style="margin-bottom:2%">
              <form role="form" method="post" action="" id="teacherform" name="teacherform">
				<div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="TeacherName" class="control-label">Name</label>
                    <input type="text" class="form-control" name="T_Name" id="T_Name">
                    <span style="color:red" name="name_error" id="name_error">&nbsp;</span>					
                  </div>
				  <div class="col-md-6 margin-bottom-15">
				  <label for="TeacherIC" class="control-label">IC.No</label>
                  <input type="text" class="form-control" name="T_IC" id="T_IC" maxlength="12">
                  <span style="color:red" name="ic_error" id="ic_error">&nbsp;</span>				  
                  </div>					
                </div>
                <div class="row">
				 <div class="col-md-6 margin-bottom-15">
                    <label for="TeacherIC" class="control-label">Contact number</label>
                    <input type="text" class="form-control" name="T_Contact" id="T_Contact" maxlength="15">
                    <span style="color:red" name="contact_error" id="contact_error">&nbsp;</span>					
                  </div>
				  <div class="col-md-6 margin-bottom-15">
                  <label for="singleSelect">Gender</label>
                  <select class="form-control margin-bottom-15" name="Gender" id="Gender">
				    <option value=""></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
				  <span style="color:red" name="gender_error" id="gender_error">&nbsp;</span>
                  </div>
				   </div>
			    <div class="row">
				   <div class="col-md-6 margin-bottom-15">
                    <label for="TeacherEmail" class="control-label">Email</label>
                    <input type="text" class="form-control" name="T_Email" id="T_Email">
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
				     <option value=''></option>
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
					<option value=''></option>
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
					<option value=''></option>
                    </select>					
                    <span style="color:red" name="subject_error" id="subject_error">&nbsp;</span>					
                  </div>
				</div>
               <div class="row templatemo-form-buttons">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="savebtn" onclick="return validateForm()">Add</button>
                  <button type="button" class="btn btn-default" onclick="location.href = 'ad_index.php'">Cancel</button> 
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


function validateForm()
{ 
  var tname=name();
  var tic=ic();
  var tgender=gender();
  var num=number();
  var mail=email();
 
  if(tname&&tic&&tgender&&num&&mail)
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
	   $tname=$_POST["T_Name"];
	   $tic=$_POST["T_IC"];
	   $tgender=$_POST["Gender"];
	   $tcontact=$_POST["T_Contact"];
	   $temail=$_POST["T_Email"];
	   $tpassword=base64_encode($pin = random_string());
	   $ttsub1=$_POST["T_Sub1"];
	   $ttsub2=$_POST["T_Sub2"];
	   $ttsub3=$_POST["T_Sub3"];
	   $currdate = date("Y-m-d H:i:s");  	
	   $after_date = date("Y-m-d H:i:s",strtotime("+168 hours", strtotime($currdate)));
	   
	   $result1=mysqli_query($conn,"select * from teacher where Email = '$temail'");
	   $result5=mysqli_query($conn,"select * from teacher where IC_No = '$tic'");
		  if(mysqli_num_rows($result1)!=0)
	   {
	   ?>
	       <script type ="text/javascript">
		     alert("Error,Email already existed, please enter a different Email");
		   </script>
	   <?php
	   }
	   else if(mysqli_num_rows($result5)!=0)
	   {
	   ?>
	       <script type ="text/javascript">
		     alert("Error,teacher's IC already existed, please make sure your entered IC is correct");
		   </script>
	   <?php
	   }
	     else
	   {
	 	
	     $result=mysqli_query($conn,"insert into teacher (Name,IC_No,Gender,Contact_Number,Email,Password,
		 Teach_Subject1,Teach_Subject2,Teach_Subject3,secu_pin,secu_date)values('$tname','$tic','$tgender','$tcontact',
		 '$temail','$tpassword','$ttsub1','$ttsub2','$ttsub3','$pin','$after_date')");
		 
		$subject = "Change Teacher Account Password";
		$message = "You can change your password by using this security pin and click the link at below:\n\n http://localhost/fyp/reset_password.php \n\nSecurity Pin:".$pin."\n\nYou can also login with the default password for your account in Admin Panel which is also the security pin : ".$pin."\n\nThe link to admin panel is http://localhost/fyp/sign-in.php \n\nThank you.\n\nThe pin code only within 1 week.";
		$from = "From: Smart Tuition Centre <linksky34@gmail.com>";
		
		mail($temail,$subject,$message,$from);	
		 
	  if($result)
	  {
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>		
<script type="text/javascript">
       swal({
		   title: "Successful!",
		   text:"A teacher account have beeen created, an change password email will be send to the teacher.",
		   icon:"success"
		   });
		   setTimeout(function(){ window.location = "ad_addteacher.php"; }, 5000)
</script>
<?php
	  }
	 }
	}
?>
