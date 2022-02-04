<?php
 include("dbconnection.php");
 if($_SESSION["staffloggedin"]!=1)
 {
	header("location:sign-in.php");
 }
 
 $sbid=$_REQUEST['sbid'];
 $result=mysqli_query($conn,"select * from subject where Subject_ID = $sbid");
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
		    <li><a href="index.html">Dashboard</a></li>
            <li><a href="tables(subject).php?page=1">Subject List</a></li>
            <li class="active">Update</li>
          </ol>
          <h1>UPDATE (SUBJECT)</h1>
		  </br>
          <div class="row">
            <div class="col-md-12">
             <form role="form" method="post" action="" id="subject_form" name="subject_form">
				<div class="row">
				  <div class="col-md-6 margin-bottom-15">
                    <label for="subject_name" class="control-label">Subject Name</label>
                    <input type="text" class="form-control" name="Sb_Name" id="Sb_Name" value="<?php echo $row['Subject_Name'];?>">
                    <span style="color:red" name="name_error" id="name_error">&nbsp;</span>						
                  </div>
				</div>
			    <div class="row">
				 <div class="col-md-6 margin-bottom-15">
                  <label for="singleSelect">Standard</label>
                  <select class="form-control margin-bottom-15" name="Sb_Standard" id="Sb_Standard">
				  <option value="<?php echo $row["Standard_Name"]?>">*<?php echo $row["Standard_Name"]?></option>
				  <option value='PT3'>PT3</option>
				  <option value='SPM'>SPM</option>
                  </select>
                  <span style="color:red" name="standard_error" id="standard_error">&nbsp;</span>	  				  
                  </div>
				 </div>
			    <div class="row">
				  <div class="col-md-6 margin-bottom-15">
                    <label for="subject_fee" class="control-label">Subject Fee(RM) <sup>This subject fee is set per month, and for session of 2 hours per week</sup></label>
                    <input type="text" class="form-control" name="Sb_Fee" id="Sb_Fee" value="<?php echo $row["Subject_Fee"]?>">
                    <span style="color:red" name="fee_error" id="fee_error">&nbsp;</span>						
                  </div>
				 </div>		
              <div class="row templatemo-form-buttons">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="savebtn"  onclick="return validateForm()">Update</button>
                  <button type="button" class="btn btn-default" onclick="location.href = 'ad_tables(subject).php?page=<?php echo $page?>'">Cancel</button>
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
function name() 
{
    if (document.subject_form.Sb_Name.value == "")
	{
	  document.getElementById('name_error').innerHTML = "Please enter subject name.";
	  return false;
	}
	else
	{
	  document.getElementById('name_error').innerHTML = "&nbsp";
	  return true;
    }
}

function fee() 
{
    if (document.subject_form.Sb_Fee.value == ""||isNaN(document.subject_form.Sb_Fee.value)||document.subject_form.Sb_Fee.value<=0)
	{
	  document.getElementById('fee_error').innerHTML = "Please enter subject fee which value more than 0.";
	  return false;
	}
	else if (isNaN(document.subject_form.Sb_Fee.value))
	{
	  document.getElementById('fee_error').innerHTML = "Please enter number format only.";
	  return false;
	}
	else
	{
	  document.getElementById('fee_error').innerHTML = "&nbsp";
	  return true;
    }
}

function standard() 
{
    if (document.subject_form.Sb_Standard.value == "")
	{
	  document.getElementById('standard_error').innerHTML = "Please enter subject standard.";
	  return false;
	}
	else
	{
	  document.getElementById('standard_error').innerHTML = "&nbsp";
	  return true;
    }
}

function validateForm()
{ 
  var n=name();
  var f=fee();
  var stnd=standard();
  
  if(n&&f&&stnd)
  {
	  return true;
  }
  else
  return false;
}
</script>

<?php 
     if(isset($_POST["savebtn"]))
	 { 
	   $sbname=$_POST["Sb_Name"];
	   $sbstandard=$_POST["Sb_Standard"];
	   $sbfee=$_POST["Sb_Fee"];
	   $sbremarks=$_POST["Sb_Remarks"];
	  
	   
	   $result2=mysqli_query($conn,"update subject set Subject_Name='$sbname',Standard_Name='$sbstandard',Subject_Fee=$sbfee where Subject_ID=$sbid");
	   
	   if($result2)
	   {
?>
         <script type="text/javascript">
	     alert("1 record updated");
		 window.location = "ad_tables(subject).php?page=1";
	     </script>
<?php	 
	   }
	 }
?>