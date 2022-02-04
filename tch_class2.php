<?php
 include("dbconnection.php");

 if($_SESSION["tchloggedin"]!=1)
 {
	header("location:sign-in.php");
 }
 $sess_tchid=$_SESSION["sess_tchid"];
 $result=mysqli_query($conn,"select * from teacher where Id=$sess_tchid");
 $row=mysqli_fetch_assoc($result);
 $subject=$row["Teach_Subject3"];
 $teacher=$row["Name"];
 $result_schedule=mysqli_query($conn,"select * from schedule where subject='$subject' and teacher='$teacher'");
 $row_sch=mysqli_fetch_assoc($result_schedule);
 $schedule_id=$row_sch["schedule_id"];
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
<script type="text/javascript">
function confirmation()
{
	answer=confirm("Confirm delete this record?");
	return answer;
}
function confirmation1()
{
	answer=confirm("Confirm reactive this record?");
	return answer;
}
</script>
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
            <form class="navbar-form" style="background-color:grey;margin-top:-8.5%;padding:10px;border-bottom:1px solid black;">
              <h3 style="margin-bottom:10px;margin-top:0;padding:4px 0px 0px 4px;color:white;">Menu</h3>
            </form>
          </li>
          <li><a href="tch_index.php"><i class="fa fa-home"></i>Dashboard</a></li>
          <li><a href="tch_edit(profile).php"><i class="fa fa-address-book-o"></i> Edit Profile </a></li>
          <li><a href="tch_schedule.php"><i class="fa fa-info-circle"></i> Check Schedule </a></li>
		  <li><a href="tch_class.php"><i class="fa fa-child"></i> Check Class Member</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="tch_index.php">Dashboard</a></li>
            <li class="active">Class Members</li>
          </ol>
          <h1>Class Members</h1>
          <p>Check current existing class members</p>
          <div class="row">
            <div class="col-md-12">
			  <div class="btn-group pull-right" id="templatemo_sort_btn">
                <button type="button" class="btn btn-default">Sort by</button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="tch_class.php"><?php echo $row["Teach_Subject1"]?></a></li>
                  <li><a href="tch_class1.php"><?php echo $row["Teach_Subject2"]?></a></li>
                  <li><a href="tch_class2.php"><?php echo $row["Teach_Subject3"]?></a></li>
                </ul>
              </div>
			   <h4 class="margin-bottom-15"><span style="color:blue"><?php echo $row["Teach_Subject3"]?></span></h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Student IC</th>
					  <th>Subject Name</th>
                      <th>Student Gender</th>
					  <th>Level</th>
					  <th>Join Date</th>
					  <th>End Date</th>
                    </tr>
                  </thead>
			<?php
			 $result_all=mysqli_query($conn,"select * from schedule_student where schedule_id='$schedule_id'");
			 while($row=mysqli_fetch_assoc($result_all)){
             $student_id=$row["student_id"];
			 $final_result=mysqli_query($conn,"select * from student,parent where student.parent_id_fk = parent.parent_id and student_id='$student_id' and student.activate=1 and student.isdeleted=0
			 or student.parent_id_fk = parent.parent_id and student_id='$student_id' and parent.barred_status='unbarred' and student.activate=1 and student.isdeleted=0
			 or student.parent_id_fk = parent.parent_id and student_id='$student_id' and parent.barred_status='barred'
			 or student.parent_id_fk = parent.parent_id and student_id='$student_id' and parent.barred_status='blocked'");
			 while($row=mysqli_fetch_assoc($final_result)){
			 ?>
                  <tbody>
                    <tr>
					  <td><?php echo $row["student_id"]?></td>
					  <td><?php echo $row["student_ic"]?></td>
                      <td><?php echo $row["student_name"]?></td>
					  <td><?php echo $row["student_gender"]?></td>
					  <td><?php echo $row["student_level"]?></td>
					  <td><?php echo $row["student_join_date"]?></td>
					  <td><?php echo $row["student_end_date"]?></td>
					  <td><?php if($row["barred_status"]=="unbarred"){
						  ?>
						  <img src="images/success.png" height="25px" width="25px">
						  <?php
					      }
						  else if(($row["barred_status"]=="barred"))
						  {
						  ?>
						  <img src="images/fail.png" height="25px" width="25px">
						  <?php
						  }
						  ?>
					  </td>		
                    </tr>
			<?php
			   }
			 }
			?>
                </table>
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