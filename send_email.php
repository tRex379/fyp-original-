<?php
include("dbconnect.php");
if(isset($_POST['email'])){
	$email=$_POST['email'];
	$name=$_POST['name'];
	$msg='Name: '.$name."\n"."Email : ".$email."\n"."Comment: ".$_POST['message'];
	mail('raven2327@outlook.com','Message from Contact Us', $msg,$name);
	echo 1;
}
?>