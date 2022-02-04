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
  <title>Dashboard Tables, Free Admin Template</title>
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
	answer=confirm("Confirm accept and deduct this amount from the payment record?");
	return answer;
}

function confirmation1()
{
	answer=confirm("Confirm reject this payment record?");
	return answer;
}

function validateForm() 
{
    if (document.deductform.deduction.value == ""||document.deductform.deduction.value <=0)
	{
	  document.getElementById('amount_error').innerHTML = "Value should not less than 1";
	  return false;
	}
	else
	{
	  document.getElementById('amount_error').innerHTML = "&nbsp";
	  return true;
    }
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
            <li class="active">List of Payments</li>
          </ol>
         <h1>Payments</h1>
          <p>Manage payments by customer</p>

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <?php 
			 $result6=mysqli_query($conn,"select * from payment where payment_status='Pending';");
			 $row7=mysqli_num_rows($result6);
			 $result7=mysqli_query($conn,"select * from student where register_status='Pending';");
			 $row8=mysqli_num_rows($result7);
			 
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
			 
			$result6_a=mysqli_query($conn,"select * from payment,parent where payment.parent_id_fk = parent.parent_id  and payment_status='Pending' limit $page1,6;");
			?>
              <ul class="nav nav-pills">
			    <li><a href="tables(paymentRF).php?page=1">Registartion Fee<span class="badge"><?php echo $row8?></span></a></li>
				<li class="active"><a href="tables(paymentTF).php?page=1">Tuition Fees<span class="badge"><?php echo $row7?></span></a></li>
              </ul>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
              <div class="btn-group pull-right" id="templatemo_sort_btn">
                <button type="button" class="btn btn-default">Sort by</button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="tables(paymentTF).php?page=1">Pending</a></li>
                  <li><a href="tables(paymentTF1).php?page=1">Accepted</a></li>
                  <li><a href="tables(paymentTF2).php?page=1">Rejected</a></li>
                </ul>
              </div>
              <div class="table-responsive">
                 <h4 class="margin-bottom-15">Tuition Fees <span style="color:#ADD8E6;">(Pending)</span></h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
					  <th>Parent Name</th>
                      <th>Total Payment(RM)</th>
                      <th>Payment Date</th>
					  <th>Payment Transcript</th>
					  <th>Amount Paid</th>
                      <th>Approval</th>
					  <th>Due Amount (RM)</th>
                    </tr>
                  </thead>
			  <?php
			   while($row=mysqli_fetch_assoc($result6_a))
			   {
			  ?>
                  <tbody>
                    <tr>
					  <td><?php echo $row["payment_id"]?></td>
					  <td><?php echo $row["parent_name"];?></td>
					  <td><?php echo $row["total_payment"];?></td>
					  <td><?php echo $row["payment_date"];?></td>
					  <td><a href="#" class="pop"><img src="<?php echo $row["payment_transcript"];?>" style="width: 40px; height: 50px;">
                      Click to Enlarge
                      </a></td>
                      <form method="post" id="deductform" name="deductform" action="tables(paymentTF).php?pid=<?php echo $row['payment_id']."&page=".$page;?>" id="deduct_form" onsubmit="return validateForm()">
					  <td><input type="number" id="deduction" name="deduction" value="0"><br />
					  <span style="color:red" name="amount_error" id="amount_error">&nbsp;</span></td>	
					  <td><button type="submit" class="btn btn-success" name="savebtn" onclick="return confirmation()">Accept</button>
					  </form>
					  <a href="tables(paymentTF).php?pid1=<?php echo $row['payment_id']."&page=".$page;?>" onclick="return confirmation1()" class="btn btn-danger">Reject</a></td>
                      <td><?php echo $row["due_payment"];?></td>				
                    </tr>    					
                  </tbody>
			  <?php
			   }
			   ?>
                </table>
              </div>
			  <ul class="pagination pull-right">
              <?php if($page >= 2){ ?>
                <li><a href="tables(paymentTF).php?page=<?php echo $previouspage;?>">&laquo;</a></li>
			  <?php } ?>
				<?php for($b=1;$b<=$a;$b++){?>
                <li><a href="tables(paymentTF).php?page=<?php echo $b?>"><?php echo $b?><span class="sr-only">(current)</span></a></li>
				<?php
				}
				?>
				<?php if($page != $endpage){ ?>
                <li><a href="tables(paymentTF).php?page=<?php echo $nextpage;?>">&raquo;</a></li>
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
if(isset($_REQUEST["pid"])&&isset($_REQUEST["page"])&&isset($_POST["savebtn"]))
{
  
	$pid=$_REQUEST["pid"];
	$page=$_REQUEST["page"];
	$deduct=$_POST["deduction"];
	
	$result1=mysqli_query($conn,"select * from payment where payment_id=$pid");
	$row1=mysqli_fetch_assoc($result1);
	
	if($deduct>$row1['total_payment'])
	{
?>
	<script type="text/javascript">
    alert("The amount you trying to deduct is more than the available value, please try again");
    </script>
<?php
	}
	else
	{
	mysqli_query($conn,"update payment set payment_status='Yes',due_payment=due_payment-$deduct,paid_amount=$deduct where payment_id=$pid");
	mysqli_query($conn,"update payment set complete_status='Complete' where due_payment<='0'");
?>
<script type="text/javascript">
window.location.replace("tables(paymentTF).php?page=<?php echo $page?>"); 
</script>
<?php
}
}
?>

<?php
if(isset($_REQUEST["pid1"]))
{
	$pid1=$_REQUEST["pid1"];
	mysqli_query($conn,"update payment set payment_status='No' where payment_id=$pid1");
?>
<script type="text/javascript">
window.location.replace("tables(paymentTF).php?page=<?php echo $page?>"); 
</script>
<?php
}
?>