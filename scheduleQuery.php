<?php
$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$classrooms = ['CR01','CR02','CR03'];
$periods = ['8.00am - 9.00am', '9.00am - 10.00am','10.00am - 11.00am','11.00am - 12.00pm','12.00pm - 1.00pm','1.00pm - 2.00pm','2.00pm - 3.00pm','3.00pm - 4.00pm','4.00pm - 5.00pm','5.00pm - 6.00pm','6.00pm - 7.00pm','7.00pm - 8.00pm','8.00pm - 9.00pm','9.00pm - 10.00pm'];
$fetch_row_count=1;

for($i=0;$i<count($days);$i++){
	$day = $days[$i];
	for($j=0;$j<count($classrooms);$j++){
		$classroom= $classrooms[$j];
		for($k=0;$k<count($periods);$k++){
			$period = $periods[$k];
			${"result".$fetch_row_count}=mysqli_query($conn,"select *  from schedule where schedule.Day = '$day' and venue='$classroom' and time='$period'");
			${"row".$fetch_row_count}=mysqli_fetch_assoc(${"result".$fetch_row_count});
			$fetch_row_count++;
		}
	}
}
?>