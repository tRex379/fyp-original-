<?php
 include("dbconnection.php");

 if($_SESSION["loggedin"]!=1)
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
	answer=confirm("Confirm barred this parent?");
	return answer;
}
function confirmation1()
{
	answer=confirm("Confirm unbarred this parent?");
	return answer;
}
function confirmation2()
{
	answer=confirm("Confirm barred all parents? This action should be only be done by 22th of each month.");
	return answer;
}
function confirmation3()
{
	answer=confirm("Confirm barred selected parents?.");
	return answer;
}
function confirmation4()
{
	answer=confirm("Confirm barred selected parents?.");
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
            <li class="active">List of Parents</li>
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
			 $result8=mysqli_query($conn,"select * from parent where barred_status='barred' or barred_status='unbarred';");
			 $row1=mysqli_num_rows($result);
			 $row3=mysqli_num_rows($result2);
			 $row5=mysqli_num_rows($result4);
			 $row6=mysqli_num_rows($result5);
			 $row7=mysqli_num_rows($result6);
			 $row8=mysqli_num_rows($result7);
			 $row9=mysqli_num_rows($result8);
			 
			 $count=mysqli_num_rows($result8);
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
			 
			$result8_a=mysqli_query($conn,"select * from parent where barred_status='barred' or barred_status='unbarred' limit $page1,6;");
			
			if(isset($_POST["btnSearch"]))
           {
	        $kw=$_POST["search_box"];
	        $result8_a=mysqli_query($conn,"select * from parent where parent_name like '%$kw%' or parent_ic like '%$kw%' or parent_email like '%$kw%'");
           }
		   
		   if(isset($_POST["barred_btn"]))
           {
			   mysqli_query($conn,"update parent set barred_status = 'barred' where barred_status='unbarred'");
           ?>
           <script type="text/javascript">
           window.location.replace("tables(parent).php?page=<?php echo $page?>"); 
           </script>
           <?php
            }
           ?>
              <ul class="nav nav-pills">
			    <li><a href="tables(admin).php?page=1">Admin<span class="badge"><?php echo $row5?></span></a></li>
			    <li><a href="tables(teacher).php?page=1">Teacher<span class="badge"><?php echo $row1?></span></a></li>
				<li><a href="tables(subject).php?page=1">Subject<span class="badge"><?php echo $row3?></span></a></li>
				<li><a href="tables(schedule).php?page=1">Schedule<span class="badge"><?php echo $row6?></span></a></li>
				<li class="active"><a href="tables(parent).php?page=1">Parent<span class="badge"><?php echo $row9?></span></a></li>
				<li><a href="tables(student).php?page=1">Student<span class="badge"><?php echo $row8?></span></a></li>
              </ul>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
			 <div class="btn-group pull-right" id="templatemo_sort_btn">
                <button type="button" class="btn btn-default">Barred & Unbarred</button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="tables(parent).php?page=1">Barred & Unbarred</a></li>
                  <li><a href="tables(parent)1.php?page=1">Barred</a></li>
				  <li><a href="tables(parent)3.php?page=1">Blocked</a></li>
                  <li><a href="tables(parent)2.php?page=1">Unbarred</a></li>
                </ul>
              </div>
			  <h4 class="margin-bottom-15">List of Parents (Barred & Unbarred)</h4>
			  <ul>
			  <li class="margin-bottom-15" style="color:blue">Admin should 'barred' parent by 22th of every months, students who is children to that parent will also be 'barred'</li>
			  <li class="margin-bottom-15" style="color:blue">Admin should 'block' parent by 7th of every months, 'blocked' students won't be able to attend any class</li>
			  <li class="margin-bottom-15" style="color:blue">Use the "Sort by" on the right to check barred/unbarred/blocked students</span></li>
			  </ul>
			  <p><img src="images/success.png" height="20px" width="20px"> : Unbarred &nbsp <img src="images/pending.png" height="20px" width="20px"> : Barred 
			  &nbsp <img src="images/fail.png" height="20px" width="20px"> : Blocked</p>
              <form style="margin:10px 0px 10px 0px;" method="post">
                 <input type="text" class="form-control" style="width:95%; display: inline-block;" id="search_box" name="search_box"  placeholder="Search by Parent's Name / IC/ Email...">
                 <input type="submit" class="btn btn-primary" style="margin:0px 0px 3px 5px;" id="btnSearch" name="btnSearch" value="Go">
			     </form>
              <form  method="post">				 
              <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
					  <th>Select</th>
                      <th>ID</th>
                      <th>Parent Name</th>
					  <th>Parent IC</th>
					  <th>Parent Email</th>
                      <th>Barred</th>
					  <th>Status</th>
                    </tr>
                  </thead>
			<?php
			   while($row=mysqli_fetch_assoc($result8_a))
			   {
			 ?>
                  <tbody>
                    <tr>
					  <td><input type="checkbox" name="check_record[]" value="<?php echo $row["parent_id"];?>"></td>
					  <td><?php echo $row["parent_id"]?></td>
                      <td><?php echo $row["parent_name"]?></td>
					  <td><?php echo $row["parent_ic"]?></td>
					  <td><?php echo $row["parent_email"]?></td>
					  <td><?php if($row["barred_status"]=="unbarred"){
						  ?>
						  <a href="tables(parent).php?prid=<?php echo $row['parent_id']."&page=".$page;?>" onclick="return confirmation()" class="btn btn-warning">Barred</a>
						  <?php
					      }
						  else if(($row["barred_status"]=="barred"))
						  {
						  ?>
						 <a href="tables(parent).php?prid1=<?php echo $row['parent_id']."&page=".$page;?>" onclick="return confirmation1()" class="btn btn-success">Unbarred</a>
						  <?php
						  }
						  ?>
					  </td>			
                      <td><?php if($row["barred_status"]=="unbarred"){
						  ?>
						  <img src="images/success.png" height="25px" width="25px">
						  <?php
					      }
						  else if(($row["barred_status"]=="barred"))
						  {
						  ?>
						  <img src="images/pending.png" height="25px" width="25px">
						  <?php
						  }
                          else if(($row["barred_status"]=="blocked"))
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
			  <div>
			  <input type="submit" class="btn btn-warning" name="barred_btn" value="Barred All" onclick="return confirmation2()">
			  <input type="submit" class="btn btn-warning" name="inactive_multiple" value="Barred Selected Records" onclick="return confirmation3()"/>
			  <input type="submit" name="active_multiple" class="btn btn-success" value="Unbarred Selected Records" onclick="return confirmation4()"/>
			  </div>
				</form>
              </div>
               <ul class="pagination pull-right">
              <?php if($page >= 2){ ?>
                <li><a href="tables(parent).php?page=<?php echo $previouspage;?>">&laquo;</a></li>
			  <?php } ?>
				<?php for($b=1;$b<=$a;$b++){?>
                <li><a href="tables(parent).php?page=<?php echo $b?>"><?php echo $b?><span class="sr-only">(current)</span></a></li>
				<?php
				}
				?>
				<?php if($page != $endpage){ ?>
                <li><a href="tables(parent).php?page=<?php echo $nextpage;?>">&raquo;</a></li>
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
if(isset($_REQUEST["prid"])&&isset($_REQUEST["page"]))
{
	$prid=$_REQUEST["prid"];
	$page=$_REQUEST["page"];
	mysqli_query($conn,"update parent set barred_status='barred' where parent_id=$prid");
	mysqli_query($conn,"update student set parent_barred_status='barred' where parent_id_fk=$prid");
?>
<script type="text/javascript">
window.location.replace("tables(parent).php?page=<?php echo $page?>"); 
</script>
<?php
}
?>

<?php
if(isset($_REQUEST["prid1"])&&isset($_REQUEST["page"]))
{
	$prid1=$_REQUEST["prid1"];
	mysqli_query($conn,"update parent set barred_status='unbarred' where parent_id=$prid1");
	mysqli_query($conn,"update student set parent_barred_status='unbarred' where parent_id_fk=$prid1");
?>
<script type="text/javascript">
window.location.replace("tables(parent).php?page=<?php echo $page?>"); 
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
      mysqli_query($conn,"update parent set barred_status='barred' where parent_id=$inac_id");
	  mysqli_query($conn,"update student set parent_barred_status='barred' where parent_id_fk=$inac_id");
	}	
?>
<script type="text/javascript">
window.location.replace("tables(parent).php?page=<?php echo $page?>"); 
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
      mysqli_query($conn,"update parent set barred_status='unbarred' where parent_id=$ac_id");
	  mysqli_query($conn,"update student set parent_barred_status='unbarred' where parent_id_fk=$ac_id");
	}	
?>
<script type="text/javascript">
window.location.replace("tables(parent).php?page=<?php echo $page?>"); 
</script>
<?php
}
?>