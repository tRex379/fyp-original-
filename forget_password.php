<?php
 include("dbconnect.php");
if(isset($_POST["reset_email"]))
{
	function random_string(){
    $character_set_array = array();
    $character_set_array[] = array('count' => 5, 'characters' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $character_set_array[] = array('count' => 3, 'characters' => '0123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set){
        for ($i = 0; $i < $character_set['count']; $i++){
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
	}
    shuffle($temp_array);
    return implode('', $temp_array);
	}
	$email = mysqli_real_escape_string($conn,$_POST['reset_email']);
	$currdate = date("Y-m-d H:i:s");  	
	$after_date = date("Y-m-d H:i:s",strtotime("+1 hours", strtotime($currdate)));
	$email_check = mysqli_query($conn,"select * from parent where parent_email= '$email'");
	$count = mysqli_num_rows($email_check);
	
	if($count != 0)
	{
		$pin = random_string();

		$result = mysqli_query($conn,"update parent set secu_pin = '$pin',secu_date = '$after_date' where parent_email = '$email'");
		
		$subject = "Forgot Password Information";
		$message = "You can change your password by using this security pin and click the link at below:\n\n http://localhost/fyp/reset_password1.php \n\nSecurity Pin:".$pin." \n\n Thank you.\n\nThe pin code only within 1 hours.";
		$from = "From: Patrick Lee <linksky34@gmail.com>";
		mail($email,$subject,$message,$from);
		echo 1;
	}
	else{
		echo 2;
	}
}	
?>