<?php
include("dbconnect.php");
if(empty($_SESSION['login'])){
	echo 1;
}
else{
	$_SESSION['check_after_payment']=1;
}
?>
