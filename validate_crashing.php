<?php
include("dbconnect.php");
if(isset($_POST['subject_name'])){
	$subject_name=json_decode($_POST['subject_name'],true);
	$checking_crashing=json_decode($_POST['checking_crashing'],true);
	$ic=$_POST['ic'];
	$result_student_ic=mysqli_query($conn,"select * from student where student_ic='$ic' and isdeleted='0'");
	$result_parent_ic=mysqli_query($conn,"select * from parent where parent_ic='$ic'");
	$validate=0;
		
		if(mysqli_num_rows($result_student_ic)!=0){
			echo "student_ic";
		}
		else if(mysqli_num_rows($result_parent_ic)!=0){
			echo "parent_ic";
		}
		else{
			if(!array_key_exists(1,$checking_crashing)){
			// $checking_crashing[1]['subject']=" ";
			$checking_crashing[1]['time']=" ";
			if($checking_crashing[0]['time'] == $checking_crashing[1]['time']){
			echo "The ".$checking_crashing[0]['subject']." is crashing with ".$checking_crashing[1]['subject'];
			$validate=0;
			}
			else{
				$validate=1;
			}
			}	
			else if(!array_key_exists(2,$checking_crashing)){
			// $checking_crashing[2]['subject']=" ";
			$checking_crashing[2]['time']=" ";
			if($checking_crashing[0]['time'] == $checking_crashing[1]['time']){
			echo "The ".$checking_crashing[0]['subject']." is crashing with ".$checking_crashing[1]['subject'];
			$validate=0;
			}
			else{
				$validate=1;
			}
			}
			else if(!array_key_exists(3,$checking_crashing)){
			// $checking_crashing[3]['subject']=" ";
			$checking_crashing[3]['time']=" ";
			if($checking_crashing[0]['time'] == $checking_crashing[1]['time']){
			echo "The ".$checking_crashing[0]['subject']." is crashing with ".$checking_crashing[1]['subject'];
				$validate=0;
			}
			else if($checking_crashing[0]['time'] == $checking_crashing[2]['time']){
			echo "The ".$checking_crashing[0]['subject']." is crashing with ".$checking_crashing[2]['subject'];
				$validate=0;
			}
			else if($checking_crashing[1]['time'] == $checking_crashing[2]['time']){
			echo "The ".$checking_crashing[1]['subject']." is crashing with ".$checking_crashing[2]['subject'];
				$validate=0;
			}
			else if($checking_crashing[1]['time'] == $checking_crashing[3]['time']){
			echo "The ".$checking_crashing[1]['subject']." is crashing with ".$checking_crashing[3]['subject'];
				$validate=0;
			}
			else{
				$validate=1;
			}
			}
			else if(!array_key_exists(4,$checking_crashing)){
			$checking_crashing[4]['subject']=" ";
			$checking_crashing[4]['time']=" ";
			if($checking_crashing[0]['time'] == $checking_crashing[1]['time']){
			echo "The ".$checking_crashing[0]['subject']." is crashing with ".$checking_crashing[1]['subject'];
			$validate=0;
			}
			else if($checking_crashing[0]['time'] == $checking_crashing[2]['time']){
			echo "The ".$checking_crashing[0]['subject']." is crashing with ".$checking_crashing[2]['subject'];
			$validate=0;
			}
			else if($checking_crashing[0]['time'] == $checking_crashing[3]['time']){
			echo "The ".$checking_crashing[0]['subject']." is crashing with ".$checking_crashing[3]['subject'];
			$validate=0;
			}
			else if($checking_crashing[1]['time'] == $checking_crashing[2]['time']){
			echo "The ".$checking_crashing[1]['subject']." is crashing with ".$checking_crashing[2]['subject'];
			$validate=0;
			}
			else if($checking_crashing[1]['time'] == $checking_crashing[3]['time']){
			echo "The ".$checking_crashing[1]['subject']." is crashing with ".$checking_crashing[3]['subject'];
			$validate=0;
			}
			else if($checking_crashing[2]['time'] == $checking_crashing[3]['time']){
			echo "The ".$checking_crashing[2]['subject']." is crashing with ".$checking_crashing[3]['subject'];
			$validate=0;
			}
			else{
				$validate=1;
			}
			}
			
			if($validate==1){
				echo 1;
			}
		}
}		
		
		
		
		// foreach($subject_name as $subject => $time){
			// mysqli_query($conn,"insert into timetable (subject,time) values ('$subject','$time')");
		// }
		// $result_timetable=mysqli_query($conn,"select * from timetable");
		// $result_timetable=mysqli_query($conn,"select * from timetable");
		// while($row_timetable=mysqli_fetch_assoc($result_timetable)){
			// $array=$row_timetable;
		// }
		// print_r($array);
		// for($i=0;$i<$count;$i++){
		   // for($s=0;$s<$count;$s++){
			// $a=array_values($subject_name)[$s];
			// $crashing=array_values($subject_name)[$s+1];
			// if(!array_key_exists($s,$subject_name)){
			// $subject_name[$s]=" ";
			// }
			// }
			// foreach($subject_name as $subject => $time){
			// if($a==$crashing){
				// echo $subject."   ".$crashing."  crashing with ".$subject."".$a."   a   ";
			// }
			// } 
			// echo $i;
			// }
		// foreach($subject_name as $subject => $time){
			// $j=1;
			// echo $time;
			// while($j<$count){
			// $b=array_values($subject_name)[$j+1];
			// echo $b;
			// if($b == $time){
				 // echo "disco";
			// }

			
			// if(!array_key_exists($i+1,$checking_crashing)){
			 // $s=array_values($checking_crashing[$i]);
			 // array_push($s," ");
			 // print_r($s);
			// }
			// for($j=1;$j<=$count;$j++){

			// }
		// print_r ($b); 
		// if($time==$crashing){
			// echo "The ".$subject." Time Is Crashing With ".$crashing_subject." " ;
			// echo "The Time is Crashing ";
			// echo $time." = ".$crashing." , ";
		// }
		// else{
			// $crashing_subject=$subject;
		// }
		// print_r $crashing;
		
	
	// if($validate==1){
		
	// }
	// else{
	// echo 2;
	// }
// }
?>