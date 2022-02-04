<?php
	include("dbconnect.php");
	$curr_month=date("m");
	$curr_year=date("Y");
	$curr_date=date("d");
	$curr_date=$curr_date."-".$curr_month."-".$curr_year;
	$curr_date=strtotime($curr_date);

	$date="1-".$curr_month."-".$curr_year;
	$date=strtotime($date);

	if($date==$curr_date){
		mysqli_query($conn,"update parent set parent_payment='unpaid'");
	}	
?>