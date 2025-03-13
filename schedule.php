<?php 
include('scheduleQuery.php');
$display_result_count = 1;
$agenda_count = count($days) * count ($classrooms) * count($periods);
?>

<table class="table table-striped table-hover table-bordered" border="1"  cellpadding="0" cellspacing="0" id="scheduleTable" style="text-align:center;">
                  <thead>
                    <tr>
					  <th>Day (Venue)</th>
					  <?php
					  foreach($periods as $period){ ?>
					  <th id="<?php echo $period; ?>"> <?php echo $period; ?> </th>
					  <?php } ?>
					</tr>
                  </thead>
                <tbody>
				  <?php for($i=0;$i<count($days);$i++){
							for($j=0;$j<count($classrooms);$j++){
				  ?>
				  <tr>
					  <th id="<?php echo $days[$i];?>" name="<?php echo $classrooms[$j];?>">
					  <?php if($j==0){echo $days[$i];}?> <?php echo "<br />(".$classrooms[$j].")"; ?>
					  </th>
					  <?php 
							for($k=0;$k<count($periods);$k++){
								if(mysqli_num_rows(${"result".$display_result_count})!=0){	
									echo "<td>".${"row".$display_result_count}["subject"]."<br />".${"row".$display_result_count}["standard"]."<br />".${"row".$display_result_count}["teacher"]."<br /></td>";
								}else{
									echo "<td></td>";
								}
								
								if($display_result_count == $agenda_count){
									break;
								}
								$display_result_count++;
							} 
					  ?>
				  </tr>
				  <?php 
							}
						}
				  ?>
                </tbody>
</table>