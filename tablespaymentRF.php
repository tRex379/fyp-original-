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
            <li class="active">List of Payments</li>
          </ol>
         <h1>Payments</h1>
          <p>Manage payments by customer</p>
          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <?php 
			 $result6=mysqli_query($conn,"select * from payment ");
			 $count=mysqli_num_rows($result6);
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
			 $result6_a=mysqli_query($conn,"select * from payment,parent,student where payment.parent_id_fk = parent.parent_id and payment.student_id= student.student_id limit $page1,6;");
			 
			 if(isset($_POST["btnSearch"]))
           {
	        $kw=$_POST["search_box"];
	        $result6_a=mysqli_query($conn,"select * from payment,parent,student where payment.parent_id_fk = parent.parent_id and payment.student_id= student.student_id and total_payment like '%$kw%' or payment.parent_id_fk = parent.parent_id and payment.student_id= student.student_id and payment_date like '%$kw%'");
           }
			?>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
			  <form style="margin:0px 0px 10px 0px;" method="post">
              <input type="text" class="form-control" style="width:95%;display: inline-block;" id="search_box" name="search_box"  placeholder="Search by Payment Date / Amount...">
              <input type="submit" class="btn btn-primary" style="margin:0px 0px 3px 5px;" id="btnSearch" name="btnSearch" value="Go"> 
			  </form>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
					  <th>Total Payment</th>
					  <th>Payment Status</th>
                      <th>Payment Date</th>
					  <th>Parent Name</th>
					  <th>Student Name</th>
                    </tr>
                  </thead>
			  <?php
			   while($row=mysqli_fetch_assoc($result6_a))
			   {
			  ?>
                  <tbody>
                    <tr>
					  <td><?php echo $row["payment_id"]?></td>
					  <td><?php echo $row["total_payment"];?></td>
					  <td><?php echo $row["payment_status"];?></td>
					  <td><?php echo $row["payment_date"];?></td>
                      <td><?php echo $row["parent_name"];?></td>	
                      <td><?php echo $row["student_name"];?></td>						  
                  </tbody>
			  <?php
			   }
			   ?>
                </table>
              </div>
			  <ul class="pagination pull-right">
			  <?php if($page >= 2){ ?>
                <li><a href="tables(paymentRF).php?page=<?php echo $previouspage;?>">&laquo;</a></li>
			  <?php } ?>
				<?php for($b=1;$b<=$a;$b++){?>
                <li><a href="tables(paymentRF).php?page=<?php echo $b?>"><?php echo $b?><span class="sr-only">(current)</span></a></li>
				<?php
				}
				?>
				<?php if($page != $endpage){ ?>
                <li><a href="tables(paymentRF).php?page=<?php echo $nextpage;?>">&raquo;</a></li>
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
	   <!-- Creates the bootstrap modal where the image will appear -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Image preview</h4>
      </div>
      <div class="modal-body">
        <img src="" class="imagepreview" style="width: 550px; height: 600px;" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
$('.pop').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
			$('#imagemodal').modal('show');   
		});		
</script>

<?php
if(isset($_REQUEST["rgid"])&&isset($_REQUEST["page"]))
{
  
	$rgid=$_REQUEST["rgid"];
	$page=$_REQUEST["page"];
	mysqli_query($conn,"update student set register_status='Yes' where student_id=$rgid");
	
?>
<script type="text/javascript">
window.location.replace("tables(paymentRF).php?page=<?php echo $page?>"); 
</script>
<?php
}
?>

<?php
if(isset($_REQUEST["rgid1"]))
{
	$rgid1=$_REQUEST["rgid1"];
	mysqli_query($conn,"update student set register_status='No' where student_id=$rgid1");
?>
<script type="text/javascript">
window.location.replace("tables(paymentRF).php?page=<?php echo $page?>"); 
</script>
<?php
}
?>