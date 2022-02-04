<?php 
include("dbconnect.php");
$parent_id=$_SESSION['parent_id'];
$result_parent=mysqli_query($conn,"select * from parent where parent_id='$parent_id'");
$row_parent=mysqli_fetch_assoc($result_parent);
$result_payment1=mysqli_query($conn,"select * from payment where parent_id_fk='$parent_id'");
$row_payment1=mysqli_fetch_assoc($result_payment1);
if(!empty($row_payment1)){
$record_per_page=5;
$page='';
$output='';
$payment_status='';
$j=1;
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
$start_from = ($page - 1)*$record_per_page; 
$result_payment=mysqli_query($conn,"select * from payment where parent_id_fk='$parent_id' ORDER BY payment_id DESC LIMIT $start_from,$record_per_page");
$output.="
			<div class='col-md-10' style='margin-left:6.5%;'>
			<div>
			<table border class='table-responsive col-md-12 table-hover'>
			<thead>
			<tr>
			<th colspan='7' style='background-color:#7382B5; color:#FFFFFF; text-align:left;'> &nbsp;&nbsp;&nbsp; Posted Payment</th>
			</tr>
			</thead>
			<thead>
				<tr>
					<th style='background-color:#7B97C0; color:#FFFFFF;'> Date Paid </td>
					<th style='background-color:#7B97C0; color:#FFFFFF;' width='20%'>Payment ID </td>
					<th style='background-color:#7B97C0; color:#FFFFFF;'>Parent </td>
					<th style='background-color:#7B97C0; color:#FFFFFF;'> Paid Amount </td>
					<th style='background-color:#7B97C0; color:#FFFFFF;'> Receipt </td>
				</tr>
			<thead>
			<tbody>
";
				while($row_payment=mysqli_fetch_assoc($result_payment)){
				$output.="
				<tr>
					<td>".$row_payment['payment_date']."</td>
					<td>".$row_payment['payment_id']."</td>
					<td>".$row_parent['parent_name']."</td>
					<td> RM".$row_payment['total_payment']."</td>
					<td>
					";
					if($row_payment['payment_status']=='Yes'){
					$output.="<a target='_blank' href='payment_receipt.php?payment_id=".$row_payment['payment_id']."&parent_id=".$parent_id."'><input type='button' id='printbtn' value='Print' /></a>
					</td>
					</tr>
					";
					}
					else if($row_payment['payment_status']=='No' || $row_payment['payment_status']=='Pending'){
					$output.="</td></tr>";
					}						
				$j+=1;
				}
			$output.="</tbody></table></div><div style='margin-top:20px;' class='pull-right pagination'>";
			$page_query="Select * from payment where parent_id_fk='$parent_id' ORDER BY payment_id DESC";
			$page_result=mysqli_query($conn,$page_query);
			$total_records=mysqli_num_rows($page_result);
			$total_pages=ceil($total_records/$record_per_page);
			for($i=1;$i<=$total_pages;$i++){
				$output.="<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc; margin-right:5px;' id=$i>$i</span>";
			}
			$output.="</div></div>";
		echo $output;
}
else{
	echo "<div id='no_history' class='col-md-12'>----------------- No Have Payment History Yet ------------------------- </div>";
}
?>