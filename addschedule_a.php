<!DOCTYPE html>
<?php
 include("dbconnection.php");
 if($_SESSION["loggedin"]!=1)
 {
	header("location:sign-in.php");
 }
 
?>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Dashboard Preferences, Free Admin Template</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src=" http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js"></script>
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
          <li><a href="index.html"><i class="fa fa-home"></i>Dashboard</a></li>
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
          <li><a href="tables(admin).php?page=1"><i class="fa fa-users"></i> Management </a></li>
		  <li><a href="tables(paymentRF).php?page=1"><i class="fa fa-money"></i> Payment</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

     <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
		    <li><a href="index.php">Dashboard</a></li>
            <li class="active">Add SCHEDULE</li>
          </ol>
		  <button class="btn btn-primary"><a href="addschedule1.php">Form View</a></button>
          <h1>ADD SCHEDULE</h1>	
		  <div class="table-responsive">
		        <br/>
				<p class="margin-bottom-15" style="color:#0000ff">Instructions:<br />- Click on the table cell to add new schedule<br/>- The pages below are direct to other parts of the schedule</p>	
                <?php include('schedule_a.php');?>
			    <ul class="pagination pull-right">
		        <li><a href="addschedule.php">&laquo;</a></li>
                <li><a href="addschedule.php">1<span class="sr-only"></span></a></li>
				<li class="active"><a href="addschedule_a.php">2<span class="sr-only">(current)</span></a></li>
			</ul> 
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
	<div class="modal fade" id="classModal" tabindex="-1" role="dialog" aria-labelledby="classModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel">Create Schedule</h4>
		  </div>
		   <form role="form" method="post" action="" id="schedule_form" name="schedule_form">
		   <div class="modal-body" id="scheduleClass">
		   <div class="row">
				  <div class="col-md-8 margin-bottom-15">
                    <label for="Venue_Name" class="control-label">Choose Subject</label>
                    <select class="form-control margin-bottom-15" name="subject" id="subject">
				  <option value=''></option>
				  <?php
			       $result=mysqli_query($conn,"select * from subject where subject.Subject_Status='active';");
			       while($row=mysqli_fetch_assoc($result))
			       {
			      ?>
                    <option value="<?php echo $row["Subject_Name"]?>&nbsp;(<?php echo $row["Standard_Name"]?>)"><?php echo $row["Subject_Name"]?>(<?php echo $row["Standard_Name"]?>)</option>
				<?php
			       }
			      ?>
                  </select>
                  <span style="color:red" name="subject_error" id="subject_error">&nbsp;</span>				  
                  </div>
		  <div class="col-md-8 margin-bottom-15">
                    <label for="Venue_Name" class="control-label">Choose Teacher</label>
                    <select class="form-control margin-bottom-15" name="teacher" id="teacher">
				  <option value=''></option>
				  <?php
			       $result=mysqli_query($conn,"select * from teacher where teacher.Status='active';");
			       while($row=mysqli_fetch_assoc($result))
			       {
			      ?>
                    <option value="<?php echo $row["Name"]?>"><?php echo $row["Name"]?>&nbsp;&nbsp;(<?php echo $row["Teach_Subject1"]?>&nbsp;<?php echo $row["Teach_Subject2"]?>&nbsp;<?php echo $row["Teach_Subject3"]?>)</option>
				<?php
			       }
			      ?>
                  </select>
                  <span style="color:red" name="teacher_error" id="teacher_error">&nbsp;</span>				  
                  </div>
		 <div class="col-md-8 margin-bottom-15">
		 <label for="Time" class="control-label">Capacity</label>
         <input type="text" class="form-control" name="capacity" id="capacity">
		 <span style="color:red" name="capacity_error" id="capacity_error">&nbsp;</span>
		 </div>
		 <div class="col-md-8 margin-bottom-15">
		 <label for="Time" class="control-label">Venue</label>
         <input type="text" class="form-control" name="displayVenue" id="displayVenue" readonly>
		 </div>
		  <div class="col-md-8 margin-bottom-15">
		 <label for="Day" class="control-label">Day</label>
		 <input type="text" class="form-control" name="displayDay" id="displayDay" readonly>
		 </div>
		 <div class="col-md-8 margin-bottom-15">
		 <label for="Time" class="control-label">Time</label>
         <input type="text" class="form-control" name="displayTime" id="displayTime" readonly>
		 </div>
	</div>
		</div>		
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="savebtn" onclick="return validateForm()">Add</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          </div>
		</form>
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
</body>
</html>

<script type="text/javascript">
$('table').on('click', 'td', function(e) {  
    var time = e.delegateTarget.tHead.rows[0].cells[this.cellIndex],
        day_venue = this.parentNode.cells[0];
		
	 document.getElementById('displayTime').value = $(time).attr('id');
     document.getElementById('displayDay').value = $(day_venue).attr('id');
	 document.getElementById('displayVenue').value = $(day_venue).attr('name');
	 $('#classModal').modal();
	
});
</script>

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
	 if (document.schedule_form.capacity.value == ""||document.schedule_form.capacity.value <= 0||document.schedule_form.capacity.value > 30)
	{
	  document.getElementById('capacity_error').innerHTML = "Please enter value more than 0.";
	  return false;
	}
	else
	{
	  document.getElementById('capacity_error').innerHTML = "&nbsp";
	  return true;
    }
}

function validateForm()
{ 
  var t=teacher();
  var sb=subject();
  var cp=capacity();
  
  if(t&&sb&&cp)
  {
	  return true;
  }
  else
  return false;
}
</script>

  <script src="js/bootstrap.min.js"></script>
  <script src="js/templatemo_script.js"></script>
</body>
</html>

<?php 
     if(isset($_POST["savebtn"]))
	 { 
       $teacher=$_POST["teacher"];
       $subject=$_POST["subject"];
       $capacity=$_POST["capacity"];
	   $day=$_POST["displayDay"];
	   $time=$_POST["displayTime"];
	   $venue=$_POST["displayVenue"];
	  
	  $result1=mysqli_query($conn,"select * from schedule where time = '$time' and day = '$day' and venue='$venue';");
	  $result1_a=mysqli_query($conn,"select * from schedule where time = '$time' and day = '$day' and teacher='$teacher';");
	  $result1_b=mysqli_query($conn,"select * from schedule where subject='$subject' and teacher='$teacher';");
	  
	  if(mysqli_num_rows($result1)!=0)
	  {
?>
		 <script type="text/javascript">
		 alert("Class session with same DAY,TIME & VENUE already existed, please check");
		 </script>
<?php
	  }
	    else if(mysqli_num_rows($result1_a)!=0)
	  {
?>
		 <script type="text/javascript">
		 alert("Class session with same DAY,TIME & TEACHER already existed, please check");
		 </script>
<?php
	  }
	   else if(mysqli_num_rows($result1_b)>1)
	  {
?>
		 <script type="text/javascript">
		 alert("There can only be 2 class session under one SUBJECT within a week,please check");
		 </script>
<?php
	  }
	  else
	  {
	    $result2=mysqli_query($conn,"insert into schedule(subject,teacher,capacity,day,time,venue)values('$subject','$teacher',$capacity,'$day','$time','$venue')");
?>
         <script type="text/javascript">
	     alert("1 record saved");
		 window.location.replace("addschedule.php");
	     </script>
<?php
	  }
	 }
?>
