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
<!-- 
Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
</head>
<script type="text/javascript">
function confirmation()
{
	answer=confirm("Confirm inactive this record?");
	return answer;
}
function confirmation1()
{
	answer=confirm("Confirm reactive this record?");
	return answer;
}
function confirmation2()
{
	answer=confirm("Confirm inactive selected records?.");
	return answer;
}
function confirmation3()
{
	answer=confirm("Confirm reactive selected records?.");
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
		  <li><a href="ad_edit(profile).php?page=1"><i class="fa fa-address-book-o"></i> Edit Profile </a></li>
          <li><a href="ad_tables(teacher).php?page=1"><i class="fa fa-users"></i> Management </a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="ad_index.php">Dashboard</a></li>
            <li class="active">List of Subjects</li>
          </ol>
          <h1>Management</h1>
          <p>Updates records of the tuition center</p>

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
			 
			 $count=mysqli_num_rows($result2);
             $a=$count/6;
             $a=ceil($a);
			 
			 $page=$_GET['page'];
		   
             $endpage = ceil($a);
             $startpage = 1;
			 $nextpage=$page+1;
			 $previouspage=$page-1;
			  
			 if($page==""||$page=="1")
			 {
				$page1=0;
			 }  
			 else
			 {
				$page1=($page*6)-6;
			 }  
			 
			$result2_a=mysqli_query($conn,"select * from subject limit $page1,6;");
			
			if(isset($_POST["btnSearch"]))
           {
	        $kw=$_POST["search_box"];
	        $result2_a=mysqli_query($conn,"select * from subject where Subject_Name like '%$kw%' or Standard_Name like '%$kw%'");
           }
		   
			?>
              <ul class="nav nav-pills">
			    <li><a href="ad_tables(teacher).php?page=1">Teacher<span class="badge"><?php echo $row1?></span></a></li>
				<li class="active"><a href="ad_tables(subject).php?page=1">Subject<span class="badge"><?php echo $row3?></span></a></li>
				<li><a href="ad_tables(schedule).php?page=1">Schedule<span class="badge"><?php echo $row6?></span></a></li>
				<li><a href="ad_tables(parent).php?page=1">Parent<span class="badge"><?php echo $row9?></span></a></li>
				<li><a href="ad_tables(student).php?page=1">Student<span class="badge"><?php echo $row8?></span></a></li>
              </ul>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <h4 class="margin-bottom-15">List of Subjects</h4>
				<p><img src="images/success.png" height="20px" width="20px"> : Active &nbsp <img src="images/fail.png" height="20px" width="20px"> : Inactive</p>
				 <form style="margin:10px 0px 10px 0px;" method="post">
                 <input type="text" class="form-control" style="width:95%; display: inline-block;" id="search_box" name="search_box"  placeholder="Search by Subject / Standard...">
                 <input type="submit" class="btn btn-primary" style="margin:0px 0px 3px 5px;" id="btnSearch" name="btnSearch" value="Go"> 
			     </form>
              <div class="table-responsive">
			   <form  method="post">
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
					  <th>Select</th>
                      <th>ID</th>
                      <th>Subject Name</th>
					  <th>Subject Fee</th>
                      <th>Edit</th>
                      <th>Active</th>
					  <th>Status</th>
                    </tr>
                  </thead>
			<?php
			   while($row=mysqli_fetch_assoc($result2_a))
			   {
			 ?>
                  <tbody>
                    <tr>
					  <td><input type="checkbox" name="check_record[]" value="<?php echo $row["Subject_ID"];?>"></td>
					  <td><?php echo $row["Subject_ID"]?></td>
                      <td><?php echo $row["Subject_Name"]?> (<?php echo $row["Standard_Name"]?>)</td>
					  <td><?php echo $row["Subject_Fee"]?></td>
                      <td><a href="ad_edit(subject).php?sbid=<?php echo $row['Subject_ID']."&page=".$page;?>" class="btn btn-info">Update</a></td>
                      <td>
					  <?php if($row["Subject_Status"]=="active"){
						  ?>
						  <a href="ad_tables(subject).php?sbid=<?php echo $row['Subject_ID']."&page=".$page;?>" onclick="return confirmation()" class="btn btn-danger">Inactive</a>
						  <?php
					      }
						  else if(($row["Subject_Status"]=="inactive"))
						  {
						  ?>
						    <a href="ad_tables(subject).php?sbid1=<?php echo $row['Subject_ID']."&page=".$page;?>" onclick="return confirmation1()" class="btn btn-success">Active</a>
					  <?php
						  }
						 ?>
                      </td>						 
                       <td><?php if($row["Subject_Status"]=="active"){
						  ?>
						  <img src="images/success.png" height="25px" width="25px">
						  <?php
					      }
						  else if(($row["Subject_Status"]=="inactive"))
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
			?>
                </table>
			  <div><input type="submit" class="btn btn-danger" name="inactive_multiple" value="Inactive Selected Records" onclick="return confirmation2()"/>
			  <input type="submit" name="active_multiple" class="btn btn-success" value="Activate Selected Records" onclick="return confirmation3()"/></div>
              </div>
			  </form>
               <ul class="pagination pull-right">
              <?php if($page >= 2){ ?>
                <li><a href="ad_tables(subject).php?page=<?php echo $previouspage;?>">&laquo;</a></li>
			  <?php } ?>
				<?php for($b=1;$b<=$a;$b++){?>
                <li><a href="ad_tables(subject).php?page=<?php echo $b?>"><?php echo $b?><span class="sr-only">(current)</span></a></li>
				<?php
				}
				?>
				<?php if($page != $endpage){ ?>
                <li><a href="ad_tables(subject).php?page=<?php echo $nextpage;?>">&raquo;</a></li>
				 <?php } ?>
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
if(isset($_REQUEST["sbid"])&&isset($_REQUEST["page"]))
{
	$sbid=$_REQUEST["sbid"];
	$page=$_REQUEST["page"];
	mysqli_query($conn,"update subject set Subject_Status='inactive' where Subject_ID=$sbid");
?>
<script type="text/javascript">
window.location.replace("ad_tables(subject).php?page=<?php echo $page?>"); 
</script>
<?php
}
?>

<?php
if(isset($_REQUEST["sbid1"])&&isset($_REQUEST["page"]))
{
	$sbid1=$_REQUEST["sbid1"];
	mysqli_query($conn,"update subject set Subject_Status='active' where Subject_ID=$sbid1");
?>
<script type="text/javascript">
window.location.replace("ad_tables(subject).php?page=<?php echo $page?>"); 
</script>
<?php
}
?>

<?php
if(isset($_REQUEST["inactive_multiple"])&&isset($_REQUEST["page"]))
{
	$checkbox=$_POST["check_record"];
	
	$count=count($checkbox);
	
	for($i=0;$i<$count;$i++)
	{
	  $inac_id=$checkbox[$i];
      mysqli_query($conn,"update subject set Subject_Status='inactive' where Subject_ID=$inac_id");
	}	
?>
<script type="text/javascript">
window.location.replace("ad_tables(subject).php?page=<?php echo $page?>"); 
</script>
<?php
}
?>

<?php
if(isset($_REQUEST["active_multiple"])&&isset($_REQUEST["page"]))
{
	$checkbox=$_POST["check_record"];
	
	$count=count($checkbox);
	
	for($i=0;$i<$count;$i++)
	{
	  $ac_id=$checkbox[$i];
      mysqli_query($conn,"update subject set Subject_Status='active' where Subject_ID=$ac_id");
	}	
?>
<script type="text/javascript">
window.location.replace("ad_tables(subject).php?page=<?php echo $page?>"); 
</script>
<?php
}
?>