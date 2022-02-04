<?php
 include("dbconnection.php");

 if($_SESSION["staffloggedin"]!=1)
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
  <link rel="stylesheet" href="css/grow.css">
<!-- 
Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
</head>
<script type="text/javascript">
function confirmation()
{
	answer=confirm("Confirm DELETE this record?");
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
		  <li><a href="ad_edit(profile).php"><i class="fa fa-address-book-o"></i> Edit Profile </a></li>
          <li><a href="ad_tables(teacher).php?page=1"><i class="fa fa-users"></i> Management </a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="ad_index.php">Dashboard</a></li>
            <li class="active">List of Schedule</li>
          </ol>
         <h1>Management</h1>
          <p>- Updates records of the tuition center</p>

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <?php 
			 $result=mysqli_query($conn,"select * from teacher ;");
			 $result2=mysqli_query($conn,"select * from subject ;");
			 $result4=mysqli_query($conn,"select * from admin;");
			 $result5=mysqli_query($conn,"select * from schedule;");
			 $result6=mysqli_query($conn,"select * from payment;");
			 $result7=mysqli_query($conn,"select * from student;");
			 $result8=mysqli_query($conn,"select * from parent;");
			 $row1=mysqli_num_rows($result);
			 $row3=mysqli_num_rows($result2);
			 $row5=mysqli_num_rows($result4);
			 $row6=mysqli_num_rows($result5);
			 $row7=mysqli_num_rows($result6);
			 $row8=mysqli_num_rows($result7);
			 $row9=mysqli_num_rows($result8);
			?>
              <ul class="nav nav-pills">
			    <li><a href="ad_tables(teacher).php?page=1">Teacher<span class="badge"><?php echo $row1?></span></a></li>
				<li><a href="ad_tables(subject).php?page=1">Subject<span class="badge"><?php echo $row3?></span></a></li>
				<li class="active"><a href="ad_tables(schedule).php?page=1">Schedule<span class="badge"><?php echo $row6?></span></a></li>
				<li><a href="ad_tables(parent).php?page=1">Parent<span class="badge"><?php echo $row9?></span></a></li>
				<li><a href="ad_tables(student).php?page=1">Student<span class="badge"><?php echo $row8?></span></a></li>
              </ul>          
            </div> 
          </div>
         <div class="table-responsive">
		  <div class="col-md-12">
		  <p class="margin-bottom-15" style="color:#0000ff">Instructions:<br />1. Hover over the table cell to update / delete <br />2. Use the pages below to forward to the other parts of schedule </p>
		  <div class="btn-group pull-right" id="templatemo_sort_btn">
                <button type="button" class="btn btn-default">Sort by</button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                 <li><a href="ad_tables(schedule)1.php">Full View</a></li>
                  <li><a href="ad_tables(schedule)1(SPM).php">- SPM</a></li>
				  <li><a href="ad_tables(schedule)1(PT3).php">- PT3</a></li>
                </ul>
              </div>
		   <button type="button" style="margin-bottom:15px;" class="btn btn-info" onclick="location.href = 'ad_tables(schedule).php?page=1'">Record View</button>
		   <h1 style="margin-bottom:20px;">SCHEDULE (<span style="color:blue">PT3</span>)</h1>
		   <?php include('ad_schedule1(PT3).php');?>
		   <ul class="pagination pull-right">
                <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
				<li><a href="ad_tables(schedule)1_a.php">2<span class="sr-only"></span></a></li>
                <li><a href="ad_tables(schedule)1_a.php">&raquo;</a></li>
			</ul> 
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

<?php
if(isset($_REQUEST["schid"]))
{
	$schid=$_REQUEST["schid"];
	$page=$_REQUEST["page"];
	mysqli_query($conn,"delete from schedule where schedule_id=$schid");
?>
<script type="text/javascript">
window.location.replace("ad_tables(schedule)1.php"); 
</script>
<?php
}
?>
