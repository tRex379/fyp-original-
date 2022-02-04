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
	answer=confirm("Confirm delete this student?");
	return answer;
}
function confirmation1()
{
	answer=confirm("Confirm delete selected students?");
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
               <li><a href="tables(student).php?page=1">All</a></li>
                  <li><a href="tables(student)1.php?page=1">Barred</a></li>
				  <li><a href="tables(student)3.php?page=1">Blocked</a></li>
                  <li><a href="tables(student)2.php?page=1">Unbarred</a></li>
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
          <p>- Updates records of the tuition center</p>

          <div class="row margin-bottom-30">
             <div class="col-md-12">
              <?php 
			 $result=mysqli_query($conn,"select * from teacher ;");
			 $result2=mysqli_query($conn,"select * from subject ;");
			 $result4=mysqli_query($conn,"select * from admin;");
			 $result5=mysqli_query($conn,"select * from schedule;");
			 $result6=mysqli_query($conn,"select * from payment;");
			 $result7=mysqli_query($conn,"select * from student,parent where student.parent_id_fk = parent.parent_id and student.isdeleted=0;");
			 $result8=mysqli_query($conn,"select * from parent;");
			 $row1=mysqli_num_rows($result);
			 $row3=mysqli_num_rows($result2);
			 $row5=mysqli_num_rows($result4);
			 $row6=mysqli_num_rows($result5);
			 $row7=mysqli_num_rows($result6);
			 $row8=mysqli_num_rows($result7);
			 $row9=mysqli_num_rows($result8);
			 
			 $count=mysqli_num_rows($result7);
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
			 
			$result7_a=mysqli_query($conn,"select * from student,parent where student.parent_id_fk = parent.parent_id and student.isdeleted=0
		    limit $page1,6;");
			
			if(isset($_POST["btnSearch"]))
           {
	        $kw=$_POST["search_box"];
	        $result7_a=mysqli_query($conn,"select * from student,parent where student.parent_id_fk = parent.parent_id and student.isdeleted=0 and student.student_name like '%$kw%' 
			or student.parent_id_fk = parent.parent_id and student.isdeleted=0 and student.student_ic like '%$kw%' 
			or student.parent_id_fk = parent.parent_id and student.isdeleted=0 and student_subject like '%$kw%'");
           }
			?>
              <ul class="nav nav-pills">
			    <li><a href="ad_tables(teacher).php?page=1">Teacher<span class="badge"><?php echo $row1?></span></a></li>
				<li><a href="ad_tables(subject).php?page=1">Subject<span class="badge"><?php echo $row3?></span></a></li>
				<li><a href="ad_tables(schedule).php?page=1">Schedule<span class="badge"><?php echo $row6?></span></a></li>
				<li><a href="ad_tables(parent).php?page=1">Parent<span class="badge"><?php echo $row9?></span></a></li>
				<li class="active"><a href="ad_tables(student).php?page=1">Student<span class="badge"><?php echo $row8?></span></a></li>
              </ul>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
			 <div class="btn-group pull-right" id="templatemo_sort_btn">
                <button type="button" class="btn btn-default">All</button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="ad_tables(student).php?page=1">All</a></li>
                  <li><a href="ad_tables(student)1.php?page=1">Barred</a></li>
				  <li><a href="ad_tables(student)3.php?page=1">Blocked</a></li>
                  <li><a href="ad_tables(student)2.php?page=1">Unbarred</a></li>
                </ul>
              </div>
                <h4 class="margin-bottom-15">List of Students (All)</h4>
			  <ul>
			  <li class="margin-bottom-15" style="color:blue">Admin should barred parent by 22th of every months, & blocked "Barred" students by 7th of every month</li>
			  <li class="margin-bottom-15" style="color:blue">Use the "Sort by" on the right to check barred/ unbarred/ blocked students</li>
			  </ul>
			  <p><img src="images/success.png" height="20px" width="20px"> : Unbarred &nbsp <img src="images/pending.png" height="20px" width="20px"> : Barred
			  &nbsp <img src="images/fail.png" height="20px" width="20px"> : Blocked</p>
				 <form style="margin:10px 0px 10px 0px;" method="post">
                 <input type="text" class="form-control" style="width:95%; display: inline-block;" id="search_box" name="search_box"  placeholder="Search by Student's Name/ IC / Subject...">
                 <input type="submit" class="btn btn-primary" style="margin:0px 0px 3px 5px;" id="btnSearch" name="btnSearch" value="Go"> 
			     </form>
			  <form method="post">	 
              <div class="table-responsive">
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
					  <th>Subject</th>
					  <th>Total Fee</th>
					  <th>Status</th>
                    </tr>
                  </thead>
			<?php
			   while($row=mysqli_fetch_assoc($result7_a))
			   {
				   if($row['barred_status']="unbarred"&&$row['isdeleted']=0||$row['barred_status']="barred"||$row['barred_status']="blocked")
				   {
			 ?>
                  <tbody>
                    <tr>
					  <td><?php echo $row["student_id"]?></td>
					  <td><?php echo $row["student_ic"]?></td>
                      <td><?php echo $row["student_name"]?></td>
					  <td><?php echo $row["student_gender"]?></td>
					  <td><?php echo $row["student_level"]?></td>
					  <td><?php echo $row["student_join_date_month"]?></td>
					  <td><?php echo $row["student_end_date"]?></td>
                      <td><?php  
				      $student_subject_fee=$row['student_subject_fee'];
			          $subject=json_decode($student_subject_fee,true);
			          foreach($subject as $student_subject=>$subject_price){
				      echo $student_subject."<br />";
				      }
				      ?></td>
                      <td><?php echo $row['student_total_subject_fee'];?></td>
                      <td><?php if($row["parent_barred_status"]=="unbarred"){
						  ?>
						  <img src="images/success.png" height="25px" width="25px">
						  <?php
					      }
						  else if($row["parent_barred_status"]=="barred")
						  {
						  ?>
						  <img src="images/pending.png" height="25px" width="25px">
						  <?php
						  }
                          else if($row["parent_barred_status"]=="blocked")
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
			  </form>
               <ul class="pagination pull-right">
              <?php if($page >= 2){ ?>
                <li><a href="ad_tables(student).php?page=<?php echo $previouspage;?>">&laquo;</a></li>
			  <?php } ?>
				<?php for($b=1;$b<=$a;$b++){?>
                <li><a href="ad_tables(student).php?page=<?php echo $b?>"><?php echo $b?><span class="sr-only">(current)</span></a></li>
				<?php
				}
				?>
				<?php if($page != $endpage){ ?>
                <li><a href="ad_tables(student).php?page=<?php echo $nextpage;?>">&raquo;</a></li>
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
if(isset($_REQUEST["stdid"])&&isset($_REQUEST["page"]))
{
	$stdid=$_REQUEST["stdid"];
	$page=$_REQUEST["page"];
	
	$row=mysqli_fetch_assoc(mysqli_query($conn,"select * from student where student_id='$stdid'"));
	$subject_venue=$row["schedule_id"];
	$subject_venue=json_decode($subject_venue,true);
	foreach($subject_venue as $subject => $id){
	$result_venue=mysqli_query($conn,"select * from schedule where schedule_id='$id'");
	$row_venue=mysqli_fetch_assoc($result_venue);
	$venue_capacity=$row_venue['curr_capacity'];
	$venue_capacity-=1;
	mysqli_query($conn,"update schedule set curr_capacity='$venue_capacity' where schedule_id='$id'");
	}
	
	mysqli_query($conn,"delete from student where student_id=$stdid");
	
?>
<script type="text/javascript">
window.location.replace("ad_tables(student).php?page=<?php echo $page?>"); 
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
	  
	  $result_delete=mysqli_query($conn,"delete from student where student_id=$inac_id");
	  if($result_delete){
	  $row=mysqli_fetch_assoc(mysqli_query($conn,"select * from student where student_id='$inac_id'"));
	  $subject_venue=$row["schedule_id"];
	  $subject_venue=json_decode($subject_venue,true);
	  foreach($subject_venue as $subject => $id){
	  $result_venue=mysqli_query($conn,"select * from schedule where schedule_id='$id'");
	  $row_venue=mysqli_fetch_assoc($result_venue);
	  $venue_capacity=$row_venue['curr_capacity'];
	  $venue_capacity-=1;
	  mysqli_query($conn,"update schedule set curr_capacity='$venue_capacity' where schedule_id='$id'");
	  }
      }
	}	
?>
<script type="text/javascript">
window.location.replace("ad_tables(student).php?page=<?php echo $page?>"); 
</script>
<?php
}
?>