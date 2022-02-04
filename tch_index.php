<!DOCTYPE html>
<?php
 include("dbconnection.php");
 if($_SESSION["tchloggedin"]!=1)
 {
	header("location:sign-in.php");
 }
 
 $sess_tchid=$_SESSION["sess_tchid"];
 $result=mysqli_query($conn,"select * from teacher where Id=$sess_tchid");
 $row=mysqli_fetch_assoc($result);
?>
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
            <li class="active">Dashboard</li>
          </ol>
		  <h1>Dashboard (<span style="color:blue;">TEACHER</span>)</h1>
          <p class="margin-bottom-15">Welcome to the dashboard of Admin Panel,<span style="color:blue"><?php echo $row['Name'];?> (<?php echo $row['Email'];?></span>)<br /> Please use the links below for navigation</p>
		   
		   <div class="row">
		   <div class="col-md-6">
                <div class="list-group">
				  <div class="list-group-item" style="background-color:#d3d3d3;border:1px solid">
                    <h4 class="list-group-item-heading" style="text-decoration:underline;">View</h4>
					<p class="list-group-item-text">View schedule / class member for this teacher<p>
					<p class="list-group-item-text" style="text-decoration:underline;"><a href="tch_schedule.php">Check Schedule</a></p>
					<p class="list-group-item-text" style="text-decoration:underline;"><a href="tch_edit(profile).php">Check and edit self profile</a></p>
					<p class="list-group-item-text" style="text-decoration:underline;"><a href="tch_class.php">Check class members</a></p>
                  </div>
                </div>
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