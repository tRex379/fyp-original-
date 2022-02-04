<?php
 include("dbconnection.php");
 if($_SESSION["loggedin"]!=1)
 {
	header("location:sign-in.php");
 }
 
 $schid=$_REQUEST['schid'];
 $page=$_REQUEST['page'];
 $result=mysqli_query($conn,"select * from schedule where schedule_id = $schid");
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
		    <li><a href="tables(schedule).php?page=1">List of Schedule</a></li>
            <li class="active">Update</li>
          </ol>
          <h1>UPDATE(SCHEDULE)</h1>
		  <br/>
          <div class="row">
            <div class="col-md-12">
           <form role="form" method="post" action="" id="schedule_form" name="schedule_form">
		   <div class="row">
		          <div class="col-md-8 margin-bottom-15">
                  <label for="Standard_Name" class="control-label">Choose Standard</label>
                  <select class="form-control margin-bottom-15" name="standard" id="standard" onChange="getSubject(this.value);">
				  <option value='<?php echo $row["standard"];?>'><span style="color:blue">*<?php echo $row["standard"];?></span></option>
                  <option value="PT3">PT3</option>
				  <option value="SPM">SPM</option>
                  </select>
                  <span style="color:red" name="subject_error" id="subject_error">&nbsp;</span>				  
                  </div>
				  <div class="col-md-8 margin-bottom-15">
                    <label for="Venue_Name" class="control-label">Choose Subject</label>
                    <select class="form-control margin-bottom-15" name="subject" id="subject" onChange="getTeacher(this.value);">
				  <option value='<?php echo $row["subject"];?>'>*<?php echo $row["subject"];?></option>
                  </select>
                  <span style="color:red" name="subject_error" id="subject_error">&nbsp;</span>				  
                  </div>
		          <div class="col-md-8 margin-bottom-15">
                    <label for="Venue_Name" class="control-label">Choose Teacher</label>
                    <select class="form-control margin-bottom-15" name="teacher" id="teacher">
				  <option value='<?php echo $row["teacher"];?>'>*<?php echo $row["teacher"];?></option>
                  </select>
                  <span style="color:red" name="teacher_error" id="teacher_error">&nbsp;</span>				  
                  </div>
		 <div class="col-md-8 margin-bottom-15">
		 <label for="Time" class="control-label">Capacity</label>
         <input type="number" class="form-control" name="capacity" id="capacity" value="<?php echo $row["capacity"];?>">
		 <span style="color:red" name="capacity_error" id="capacity_error">&nbsp;</span>
		 </div>
		 <div class="col-md-8 margin-bottom-15">
		 <label for="Time" class="control-label">Venue</label>
         <select class="form-control margin-bottom-15" name="displayVenue" id="displayVenue">
		 <option value='<?php echo $row["venue"];?>'>*<?php echo $row["venue"];?></option>
		 <option value='CR01'>CR01</option>
		 <option value='CR02'>CR02</option>
		 <option value='CR03'>CR03</option>
		 </select>
		 <span style="color:red" name="venue_error" id="venue_error">&nbsp;</span>
		 </div>
		  <div class="col-md-8 margin-bottom-15">
		 <label for="Day" class="control-label">Day</label>
		 <select class="form-control margin-bottom-15" name="displayDay" id="displayDay">
		 <option value='<?php echo $row["day"];?>'>*<?php echo $row["day"];?></option>
		 <option value='Monday'>Monday</option>
		 <option value='Tuesday'>Tuesday</option>
		 <option value='Wednesday'>Wednesday</option>
		 <option value='Thursday'>Thursday</option>
		 <option value='Friday'>Friday</option>
		 <option value='Saturday'>Saturday</option>
		 <option value='Sunday'>Sunday</option>
		 </select>
		 <span style="color:red" name="day_error" id="day_error">&nbsp;</span>
		 </div>
		 <div class="col-md-8 margin-bottom-15">
		 <label for="Time" class="control-label">Time</label>
         <select class="form-control margin-bottom-15" name="displayTime" id="displayTime">
		 <option value='<?php echo $row["time"];?>'>*<?php echo $row["time"];?></option>
		 <option value='8.00am - 9.00am'>8.00am - 9.00am</option>
		 <option value='9.00am - 10.00am'>9.00am - 10.00am</option>
		 <option value='10.00am - 11.00am'>10.00am - 11.00am</option>
		 <option value='11.00pm - 12.00pm'>11.00pm - 12.00pm</option>
		 <option value='12.00pm - 1.00pm'>12.00pm - 1.00pm</option>
		 <option value='1.00pm - 2.00pm'>1.00pm - 2.00pm</option>
		 <option value='2.00pm - 3.00pm'>2.00pm - 3.00pm</option>
		 <option value='2.00pm - 3.00pm'>2.00pm - 3.00pm</option>
		 <option value='3.00pm - 4.00pm'>3.00pm - 4.00pm</option>
		 <option value='4.00pm - 5.00pm'>4.00pm - 5.00pm</option>
		 <option value='6.00pm - 7.00pm'>6.00pm - 7.00pm</option>
		 <option value='7.00pm - 8.00pm'>7.00pm - 8.00pm</option>
		 <option value='8.00pm - 9.00pm'>8.00pm - 9.00pm</option>
		 <option value='9.00pm - 10.00pm'>9.00pm - 10.00pm</option>
		 </select>
		  <span style="color:red" name="time_error" id="time_error">&nbsp;</span>
		 </div>
	</div>
	  <div class="row templatemo-form-buttons">
      <div class="col-md-12" style="margin-bottom:3%">
            <button type="submit" class="btn btn-primary" name="savebtn" onclick="return validateForm()">Update</button>
            <button type="button" class="btn btn-default" onclick="location.href = 'tables(schedule).php?page=<?php echo $page?>'">Cancel</button> 
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
function teacher()
{
	 if (document.schedule_form.teacher.value == "")
	{
	  document.getElementById('teacher_error').innerHTML = "Please select a teacher .";
	  return false;
	}
	else
	{
	  document.getElementById('teacher_error').innerHTML = "&nbsp";
	  return true;
    }
}

function subject()
{
	 if (document.schedule_form.subject.value == "")
	{
	  document.getElementById('subject_error').innerHTML = "Please select a subject .";
	  return false;
	}
	else
	{
	  document.getElementById('subject_error').innerHTML = "&nbsp";
	  return true;
    }
}

function capacity()
{
	 if (document.schedule_form.capacity.value == ""||document.schedule_form.capacity.value == 0||document.schedule_form.capacity.value >30)
	{
	  document.getElementById('capacity_error').innerHTML = "Please enter value from 1 to 30.";
	  return false;
	}
	else
	{
	  document.getElementById('capacity_error').innerHTML = "&nbsp";
	  return true;
    }
}

function venue()
{
	 if (document.schedule_form.displayVenue.value == "")
	{
	  document.getElementById('venue_error').innerHTML = "Please enter a venue.";
	  return false;
	}
	else
	{
	  document.getElementById('venue_error').innerHTML = "&nbsp";
	  return true;
    }
}

function day()
{
	 if (document.schedule_form.displayDay.value == "")
	{
	  document.getElementById('day_error').innerHTML = "Please enter any day from Monday - Sunday.";
	  return false;
	}
	else
	{
	  document.getElementById('day_error').innerHTML = "&nbsp";
	  return true;
    }
}

function time()
{
	 if (document.schedule_form.displayTime.value == "")
	{
	  document.getElementById('time_error').innerHTML = "Please select a time .";
	  return false;
	}
	else
	{
	  document.getElementById('time_error').innerHTML = "&nbsp";
	  return true;
    }
}

function validateForm()
{ 
  var t=teacher();
  var sb=subject();
  var cp=capacity();
  var vn=venue();
  var tm=time();
  var dy=day();
  
  if(t&&sb&&cp&&vn&&tm&&dy)
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
		$("#subject").html(data);
		getTeacher();
	}
	});
}


function getTeacher(val) {
	$.ajax({
	type: "POST",
	url: "getTeacher.php",
	data:'Teach_Subject='+val,
	success: function(data){
		$("#teacher").html(data);
	}
	});
}
</script>

<?php 
     if(isset($_POST["savebtn"]))
	 { 
       $teacher=$_POST["teacher"];
       $subject=$_POST["subject"];
       $capacity=$_POST["capacity"];
	   $day=$_POST["displayDay"];
	   $time=$_POST["displayTime"];
	   $venue=$_POST["displayVenue"];
	   $standard=$_POST["standard"];
	  
	  $result1=mysqli_query($conn,"select * from schedule where time = '$time' and day = '$day' and venue='$venue';");
	  $result1_a=mysqli_query($conn,"select * from schedule where time = '$time' and day = '$day' and teacher='$teacher';");
	  $result1_b=mysqli_query($conn,"select * from schedule where subject='$subject' and standard='$standard'");
	  
	  if(mysqli_num_rows($result1)>2)
	  {
?>
		 <script type="text/javascript">
		 alert("Class session with same DAY,TIME & VENUE already existed, please check");
		 </script>
<?php
	  }
	    else if(mysqli_num_rows($result1_a)>=2)
	  {
?>
		 <script type="text/javascript">
		 alert("Class session with same DAY,TIME & TEACHER already existed, please check");
		 </script>
<?php
	  }
	   else if(mysqli_num_rows($result1_b)>=2)
	  {
?>
		 <script type="text/javascript">
		 alert("There can only be 2 class session under one SUBJECT within a week,if update wasn't working please delete and add new record");
		 </script>
<?php
	  }
	  else
	  {
	    $result2=mysqli_query($conn,"update schedule set subject='$subject',teacher='$teacher',capacity=$capacity,day='$day',time='$time',venue='$venue',standard='$standard' where schedule_id=$schid");
		if($result2)
		{
?>
         <script type="text/javascript">
	     alert("1 record updated");
		 window.location.replace("tables(schedule).php?page=<?php echo $page?>");
	     </script>
<?php
	    }
	  }
	 }
?>
