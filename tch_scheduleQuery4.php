<?php
 $result1=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='8.00am - 9.00am' and schedule.Venue='CR01' and teacher='$name' ");
 $result2=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='9.00am - 10.00am' and schedule.Venue='CR01' and teacher='$name' ");
 $result3=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='10.00am - 11.00am' and schedule.Venue='CR01' and teacher='$name' ");
 $result4=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='11.00am - 12.00pm' and schedule.Venue='CR01' and teacher='$name' ");
 $result5=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='12.00pm - 1.00pm' and schedule.Venue='CR01' and teacher='$name' ");
 $result6=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='1.00pm - 2.00pm' and schedule.Venue='CR01' and teacher='$name' ");
 $result7=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='2.00pm - 3.00pm' and schedule.Venue='CR01' and teacher='$name' ");
 $result8=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='3.00pm - 4.00pm' and schedule.Venue='CR01' and teacher='$name' ");
 $result9=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='4.00pm - 5.00pm' and schedule.Venue='CR01' and teacher='$name' ");
 $result10=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='5.00pm - 6.00pm' and schedule.Venue='CR01' and teacher='$name' ");
 $result11=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='6.00pm - 7.00pm' and schedule.Venue='CR01' and teacher='$name' ");
 $result12=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='7.00pm - 8.00pm' and schedule.Venue='CR01' and teacher='$name' ");
 $result13=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='8.00pm - 9.00pm' and schedule.Venue='CR01' and teacher='$name' ");
 $result14=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='9.00pm - 10.00pm' and schedule.Venue='CR01' and teacher='$name' ");
 $row1=mysqli_fetch_assoc($result1);
 $row2=mysqli_fetch_assoc($result2);
 $row3=mysqli_fetch_assoc($result3);
 $row4=mysqli_fetch_assoc($result4);
 $row5=mysqli_fetch_assoc($result5);
 $row6=mysqli_fetch_assoc($result6);
 $row7=mysqli_fetch_assoc($result7);
 $row8=mysqli_fetch_assoc($result8);
 $row9=mysqli_fetch_assoc($result9);
 $row10=mysqli_fetch_assoc($result10);
 $row11=mysqli_fetch_assoc($result11);
 $row12=mysqli_fetch_assoc($result12);
 $row13=mysqli_fetch_assoc($result13);
 $row14=mysqli_fetch_assoc($result14);
 
 $result1a=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='8.00am - 9.00am' and schedule.Venue='CR02' and teacher='$name' ");
 $result2a=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='9.00am - 10.00am' and schedule.Venue='CR02' and teacher='$name' ");
 $result3a=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='10.00am - 11.00am' and schedule.Venue='CR02' and teacher='$name' ");
 $result4a=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='11.00am - 12.00pm' and schedule.Venue='CR02' and teacher='$name' ");
 $result5a=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='12.00pm - 1.00pm' and schedule.Venue='CR02' and teacher='$name' ");
 $result6a=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='1.00pm - 2.00pm' and schedule.Venue='CR02' and teacher='$name' ");
 $result7a=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='2.00pm - 3.00pm' and schedule.Venue='CR02' and teacher='$name' ");
 $result8a=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='3.00pm - 4.00pm' and schedule.Venue='CR02' and teacher='$name' ");
 $result9a=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='4.00pm - 5.00pm' and schedule.Venue='CR02' and teacher='$name' ");
 $result10a=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='5.00pm - 6.00pm' and schedule.Venue='CR02' and teacher='$name' ");
 $result11a=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='6.00pm - 7.00pm' and schedule.Venue='CR02' and teacher='$name' ");
 $result12a=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='7.00pm - 8.00pm' and schedule.Venue='CR02' and teacher='$name' ");
 $result13a=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='8.00pm - 9.00pm' and schedule.Venue='CR02' and teacher='$name' ");
 $result14a=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='9.00pm - 10.00pm' and schedule.Venue='CR02' and teacher='$name' ");
 $row1a=mysqli_fetch_assoc($result1a);
 $row2a=mysqli_fetch_assoc($result2a);
 $row3a=mysqli_fetch_assoc($result3a);
 $row4a=mysqli_fetch_assoc($result4a);
 $row5a=mysqli_fetch_assoc($result5a);
 $row6a=mysqli_fetch_assoc($result6a);
 $row7a=mysqli_fetch_assoc($result7a);
 $row8a=mysqli_fetch_assoc($result8a);
 $row9a=mysqli_fetch_assoc($result9a);
 $row10a=mysqli_fetch_assoc($result10a);
 $row11a=mysqli_fetch_assoc($result11a);
 $row12a=mysqli_fetch_assoc($result12a);
 $row13a=mysqli_fetch_assoc($result13a);
 $row14a=mysqli_fetch_assoc($result14a);
 
 $result1b=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='8.00am - 9.00am' and schedule.Venue='CR03' and teacher='$name' ");
 $result2b=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='9.00am - 10.00am' and schedule.Venue='CR03' and teacher='$name' ");
 $result3b=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='10.00am - 11.00am' and schedule.Venue='CR03' and teacher='$name' ");
 $result4b=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='11.00am - 12.00pm' and schedule.Venue='CR03' and teacher='$name' ");
 $result5b=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='12.00pm - 1.00pm' and schedule.Venue='CR03' and teacher='$name' ");
 $result6b=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='1.00pm - 2.00pm' and schedule.Venue='CR03' and teacher='$name' ");
 $result7b=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='2.00pm - 3.00pm' and schedule.Venue='CR03' and teacher='$name' ");
 $result8b=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='3.00pm - 4.00pm' and schedule.Venue='CR03' and teacher='$name' ");
 $result9b=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='4.00pm - 5.00pm' and schedule.Venue='CR03' and teacher='$name' ");
 $result10b=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='5.00pm - 6.00pm' and schedule.Venue='CR03' and teacher='$name' ");
 $result11b=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='6.00pm - 7.00pm' and schedule.Venue='CR03' and teacher='$name' ");
 $result12b=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='7.00pm - 8.00pm' and schedule.Venue='CR03' and teacher='$name' ");
 $result13b=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='8.00pm - 9.00pm' and schedule.Venue='CR03' and teacher='$name' ");
 $result14b=mysqli_query($conn,"select *  from schedule where schedule.Day='Friday' and time='9.00pm - 10.00pm' and schedule.Venue='CR03' and teacher='$name' ");
 $row1b=mysqli_fetch_assoc($result1b);
 $row2b=mysqli_fetch_assoc($result2b);
 $row3b=mysqli_fetch_assoc($result3b);
 $row4b=mysqli_fetch_assoc($result4b);
 $row5b=mysqli_fetch_assoc($result5b);
 $row6b=mysqli_fetch_assoc($result6b);
 $row7b=mysqli_fetch_assoc($result7b);
 $row8b=mysqli_fetch_assoc($result8b);
 $row9b=mysqli_fetch_assoc($result9b);
 $row10b=mysqli_fetch_assoc($result10b);
 $row11b=mysqli_fetch_assoc($result11b);
 $row12b=mysqli_fetch_assoc($result12b);
 $row13b=mysqli_fetch_assoc($result13b);
 $row14b=mysqli_fetch_assoc($result14b);
 
 ?>