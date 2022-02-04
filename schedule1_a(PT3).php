<table class="table table-striped table-hover table-bordered" border="1"  cellpadding="0" cellspacing="0" id="scheduleTable">
                  <thead>
                    <tr>
					  <th>Day (Venue)</th>
                      <th id="8.00am - 9.00am">8.00am - 9.00am</th>
					  <th id="9.00am - 10.00am">9.00am - 10.00am</th>
                      <th id="10.00am - 11.00am">10.00am - 11.00am</th>
					  <th id="11.00am - 12.00pm">11.00pm - 12.00pm</th>
                      <th id="12.00pm - 1.00pm">12.00pm - 1.00pm</th>
					  <th id="1.00pm - 2.00pm">1.00pm - 2.00pm</th>
					  <th id="2.00pm - 3.00pm">2.00pm - 3.00pm</th>
					  <th id="3.00pm - 4.00pm">3.00pm - 4.00pm</th>
					  <th id="4.00pm - 5.00pm">4.00pm - 5.00pm</th>
					  <th id="5.00pm - 6.00pm">5.00pm - 6.00pm</th>
					  <th id="6.00pm - 7.00pm">6.00pm - 7.00pm</th>
					  <th id="7.00pm - 8.00pm">7.00pm - 8.00pm</th>
					  <th id="8.00pm - 9.00pm">8.00pm - 9.00pm</th>
					  <th id="9.00pm - 10.00pm">9.00pm - 10.00pm</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php include('scheduleQuery_3b.php');?>
					 <tr>
					  <th id="Thursday" name="CR01">Thursday (CR01)</th>
					  <td>
					  <div class="grow">
					  <?php echo $row1["subject"]?><br /><?php echo $row1["standard"]?><br /><?php echo $row1["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row1['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row1['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row2["subject"]?><br /><?php echo $row2["standard"]?><br /><?php echo $row2["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row2['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row2['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row3["subject"]?><br /><?php echo $row3["standard"]?><br /><?php echo $row3["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row3['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row3['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                      <td>
					  <div class="grow">
					  <?php echo $row4["subject"]?><br /><?php echo $row4["standard"]?><br /><?php echo $row4["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row4['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row4['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row5["subject"]?><br /><?php echo $row5["standard"]?><br /><?php echo $row5["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row5['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row5['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row6["subject"]?><br /><?php echo $row6["standard"]?><br /><?php echo $row6["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row6['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row6['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row7["subject"]?><br /><?php echo $row7["standard"]?><br /><?php echo $row7["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row7['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row7['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row8["subject"]?><br /><?php echo $row8["standard"]?><br /><?php echo $row8["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row8['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row8['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row9["subject"]?><br /><?php echo $row9["standard"]?><br /><?php echo $row9["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row9['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row9['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row10["subject"]?><br /><?php echo $row10["standard"]?><br /><?php echo $row10["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row10['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row10['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row11["subject"]?><br /><?php echo $row11["standard"]?><br /><?php echo $row11["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row11['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row11['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row12["subject"]?><br /><?php echo $row12["standard"]?><br /><?php echo $row12["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row12['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row12['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row13["subject"]?><br /><?php echo $row13["standard"]?><br /><?php echo $row13["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row13['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row13['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row14["subject"]?><br /><?php echo $row14["standard"]?><br /><?php echo $row14["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row14['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row14['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                  </tr>
				   <tr>
					  <th id="Thursday" name="CR02">(CR02)</th>
					  <td>
					  <div class="grow">
					  <?php echo $row1a["subject"]?><br /><?php echo $row1a["standard"]?><br /><?php echo $row1a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row1a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row1a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row2a["subject"]?><br /><?php echo $row2a["standard"]?><br /><?php echo $row2a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row2a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row2a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row3a["subject"]?><br /><?php echo $row3a["standard"]?><br /><?php echo $row3a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row3a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row3a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                      <td>
					  <div class="grow">
					  <?php echo $row4a["subject"]?><br /><?php echo $row4a["standard"]?><br /><?php echo $row4a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row4a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row4a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row5a["subject"]?><br /><?php echo $row5a["standard"]?><br /><?php echo $row5a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row5a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row5a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row6a["subject"]?><br /><?php echo $row6a["standard"]?><br /><?php echo $row6a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row6a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row6a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row7a["subject"]?><br /><?php echo $row7a["standard"]?><br /><?php echo $row7a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row7a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row7a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row8a["subject"]?><br /><?php echo $row8a["standard"]?><br /><?php echo $row8a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row8a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row8a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row9a["subject"]?><br /><?php echo $row9a["standard"]?><br /><?php echo $row9a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row9a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row9a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row10a["subject"]?><br /><?php echo $row10a["standard"]?><br /><?php echo $row10a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row10a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row10a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row11a["subject"]?><br /><?php echo $row11a["standard"]?><br /><?php echo $row11a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row11a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row11a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row12a["subject"]?><br /><?php echo $row12a["standard"]?><br /><?php echo $row12a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row12a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row12a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row13a["subject"]?><br /><?php echo $row13a["standard"]?><br /><?php echo $row13a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row13a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row13a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row14a["subject"]?><br /><?php echo $row14a["standard"]?><br /><?php echo $row14a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row14a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row14a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                  </tr>
				   <tr>
					  <th id="Thursday" name="CR03">(CR03)</th>
					  <td>
					  <div class="grow">
					  <?php echo $row1b["subject"]?><br /><?php echo $row1b["standard"]?><br /><?php echo $row1b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row1b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row1b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row2b["subject"]?><br /><?php echo $row2b["standard"]?><br /><?php echo $row2b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row2b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row2b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row3b["subject"]?><br /><?php echo $row3b["standard"]?><br /><?php echo $row3b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row3b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row3b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                      <td>
					  <div class="grow">
					  <?php echo $row4b["subject"]?><br /><?php echo $row4b["standard"]?><br /><?php echo $row4b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row4b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row4b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row5b["subject"]?><br /><?php echo $row5b["standard"]?><br /><?php echo $row5b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row5b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row5b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row6b["subject"]?><br /><?php echo $row6b["standard"]?><br /><?php echo $row6b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row6b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row6b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row7b["subject"]?><br /><?php echo $row7b["standard"]?><br /><?php echo $row7b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row7b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row7b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row8b["subject"]?><br /><?php echo $row8b["standard"]?><br /><?php echo $row8b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row8b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row8b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row9b["subject"]?><br /><?php echo $row9b["standard"]?><br /><?php echo $row9b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row9b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row9b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row10b["subject"]?><br /><?php echo $row10b["standard"]?><br /><?php echo $row10b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row10b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row10b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row11b["subject"]?><br /><?php echo $row11b["standard"]?><br /><?php echo $row11b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row11b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row11b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row12b["subject"]?><br /><?php echo $row12b["standard"]?><br /><?php echo $row12b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row12b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row12b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row13b["subject"]?><br /><?php echo $row13b["standard"]?><br /><?php echo $row13b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row13b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row13b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row14b["subject"]?><br /><?php echo $row14b["standard"]?><br /><?php echo $row14b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row14b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row14b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                    </tr>
					<?php include('scheduleQuery_4b.php');?>
					 <tr>
					  <th id="Friday" name="CR01">Friday (CR01)</th>
					  <td>
					  <div class="grow">
					  <?php echo $row1["subject"]?><br /><?php echo $row1["standard"]?><br /><?php echo $row1["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row1['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row1['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row2["subject"]?><br /><?php echo $row2["standard"]?><br /><?php echo $row2["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row2['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row2['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row3["subject"]?><br /><?php echo $row3["standard"]?><br /><?php echo $row3["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row3['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row3['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                      <td>
					  <div class="grow">
					  <?php echo $row4["subject"]?><br /><?php echo $row4["standard"]?><br /><?php echo $row4["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row4['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row4['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row5["subject"]?><br /><?php echo $row5["standard"]?><br /><?php echo $row5["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row5['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row5['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row6["subject"]?><br /><?php echo $row6["standard"]?><br /><?php echo $row6["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row6['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row6['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row7["subject"]?><br /><?php echo $row7["standard"]?><br /><?php echo $row7["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row7['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row7['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row8["subject"]?><br /><?php echo $row8["standard"]?><br /><?php echo $row8["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row8['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row8['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row9["subject"]?><br /><?php echo $row9["standard"]?><br /><?php echo $row9["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row9['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row9['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row10["subject"]?><br /><?php echo $row10["standard"]?><br /><?php echo $row10["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row10['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row10['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row11["subject"]?><br /><?php echo $row11["standard"]?><br /><?php echo $row11["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row11['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row11['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row12["subject"]?><br /><?php echo $row12["standard"]?><br /><?php echo $row12["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row12['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row12['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row13["subject"]?><br /><?php echo $row13["standard"]?><br /><?php echo $row13["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row13['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row13['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row14["subject"]?><br /><?php echo $row14["standard"]?><br /><?php echo $row14["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row14['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row14['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                  </tr>
				   <tr>
					  <th id="Friday" name="CR02">(CR02)</th>
					  <td>
					  <div class="grow">
					  <?php echo $row1a["subject"]?><br /><?php echo $row1a["standard"]?><br /><?php echo $row1a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row1a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row1a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row2a["subject"]?><br /><?php echo $row2a["standard"]?><br /><?php echo $row2a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row2a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row2a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row3a["subject"]?><br /><?php echo $row3a["standard"]?><br /><?php echo $row3a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row3a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row3a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                      <td>
					  <div class="grow">
					  <?php echo $row4a["subject"]?><br /><?php echo $row4a["standard"]?><br /><?php echo $row4a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row4a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row4a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row5a["subject"]?><br /><?php echo $row5a["standard"]?><br /><?php echo $row5a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row5a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row5a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row6a["subject"]?><br /><?php echo $row6a["standard"]?><br /><?php echo $row6a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row6a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row6a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row7a["subject"]?><br /><?php echo $row7a["standard"]?><br /><?php echo $row7a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row7a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row7a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row8a["subject"]?><br /><?php echo $row8a["standard"]?><br /><?php echo $row8a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row8a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row8a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row9a["subject"]?><br /><?php echo $row9a["standard"]?><br /><?php echo $row9a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row9a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row9a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row10a["subject"]?><br /><?php echo $row10a["standard"]?><br /><?php echo $row10a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row10a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row10a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row11a["subject"]?><br /><?php echo $row11a["standard"]?><br /><?php echo $row11a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row11a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row11a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row12a["subject"]?><br /><?php echo $row12a["standard"]?><br /><?php echo $row12a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row12a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row12a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row13a["subject"]?><br /><?php echo $row13a["standard"]?><br /><?php echo $row13a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row13a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row13a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row14a["subject"]?><br /><?php echo $row14a["standard"]?><br /><?php echo $row14a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row14a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row14a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                  </tr>
				   <tr>
					  <th id="Friday" name="CR03">(CR03)</th>
					 <td>
					  <div class="grow">
					  <?php echo $row1b["subject"]?><br /><?php echo $row1b["standard"]?><br /><?php echo $row1b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row1b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row1b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row2b["subject"]?><br /><?php echo $row2b["standard"]?><br /><?php echo $row2b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row2b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row2b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row3b["subject"]?><br /><?php echo $row3b["standard"]?><br /><?php echo $row3b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row3b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row3b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                      <td>
					  <div class="grow">
					  <?php echo $row4b["subject"]?><br /><?php echo $row4b["standard"]?><br /><?php echo $row4b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row4b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row4b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row5b["subject"]?><br /><?php echo $row5b["standard"]?><br /><?php echo $row5b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row5b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row5b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row6b["subject"]?><br /><?php echo $row6b["standard"]?><br /><?php echo $row6b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row6b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row6b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row7b["subject"]?><br /><?php echo $row7b["standard"]?><br /><?php echo $row7b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row7b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row7b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row8b["subject"]?><br /><?php echo $row8b["standard"]?><br /><?php echo $row8b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row8b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row8b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row9b["subject"]?><br /><?php echo $row9b["standard"]?><br /><?php echo $row9b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row9b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row9b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row10b["subject"]?><br /><?php echo $row10b["standard"]?><br /><?php echo $row10b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row10b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row10b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row11b["subject"]?><br /><?php echo $row11b["standard"]?><br /><?php echo $row11b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row11b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row11b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row12b["subject"]?><br /><?php echo $row12b["standard"]?><br /><?php echo $row12b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row12b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row12b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row13b["subject"]?><br /><?php echo $row13b["standard"]?><br /><?php echo $row13b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row13b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row13b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row14b["subject"]?><br /><?php echo $row14b["standard"]?><br /><?php echo $row14b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row14b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row14b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                    </tr>
                   <?php include('scheduleQuery_5b.php');?>
					 <tr>
					  <th id="Saturday" name="CR01">Saturday (CR01)</th>
					  <td>
					  <div class="grow">
					  <?php echo $row1["subject"]?><br /><?php echo $row1["standard"]?><br /><?php echo $row1["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row1['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row1['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row2["subject"]?><br /><?php echo $row2["standard"]?><br /><?php echo $row2["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row2['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row2['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row3["subject"]?><br /><?php echo $row3["standard"]?><br /><?php echo $row3["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row3['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row3['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                      <td>
					  <div class="grow">
					  <?php echo $row4["subject"]?><br /><?php echo $row4["standard"]?><br /><?php echo $row4["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row4['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row4['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row5["subject"]?><br /><?php echo $row5["standard"]?><br /><?php echo $row5["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row5['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row5['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row6["subject"]?><br /><?php echo $row6["standard"]?><br /><?php echo $row6["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row6['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row6['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row7["subject"]?><br /><?php echo $row7["standard"]?><br /><?php echo $row7["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row7['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row7['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row8["subject"]?><br /><?php echo $row8["standard"]?><br /><?php echo $row8["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row8['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row8['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row9["subject"]?><br /><?php echo $row9["standard"]?><br /><?php echo $row9["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row9['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row9['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row10["subject"]?><br /><?php echo $row10["standard"]?><br /><?php echo $row10["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row10['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row10['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row11["subject"]?><br /><?php echo $row11["standard"]?><br /><?php echo $row11["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row11['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row11['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row12["subject"]?><br /><?php echo $row12["standard"]?><br /><?php echo $row12["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row12['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row12['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row13["subject"]?><br /><?php echo $row13["standard"]?><br /><?php echo $row13["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row13['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row13['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row14["subject"]?><br /><?php echo $row14["standard"]?><br /><?php echo $row14["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row14['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row14['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                  </tr>
				   <tr>
					  <th id="Saturday" name="CR02">(CR02)</th>
					  <td>
					  <div class="grow">
					  <?php echo $row1a["subject"]?><br /><?php echo $row1a["standard"]?><br /><?php echo $row1a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row1a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row1a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row2a["subject"]?><br /><?php echo $row2a["standard"]?><br /><?php echo $row2a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row2a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row2a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row3a["subject"]?><br /><?php echo $row3a["standard"]?><br /><?php echo $row3a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row3a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row3a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                      <td>
					  <div class="grow">
					  <?php echo $row4a["subject"]?><br /><?php echo $row4a["standard"]?><br /><?php echo $row4a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row4a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row4a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row5a["subject"]?><br /><?php echo $row5a["standard"]?><br /><?php echo $row5a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row5a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row5a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row6a["subject"]?><br /><?php echo $row6a["standard"]?><br /><?php echo $row6a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row6a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row6a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row7a["subject"]?><br /><?php echo $row7a["standard"]?><br /><?php echo $row7a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row7a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row7a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row8a["subject"]?><br /><?php echo $row8a["standard"]?><br /><?php echo $row8a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row8a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row8a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row9a["subject"]?><br /><?php echo $row9a["standard"]?><br /><?php echo $row9a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row9a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row9a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row10a["subject"]?><br /><?php echo $row10a["standard"]?><br /><?php echo $row10a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row10a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row10a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row11a["subject"]?><br /><?php echo $row11a["standard"]?><br /><?php echo $row11a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row11a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row11a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row12a["subject"]?><br /><?php echo $row12a["standard"]?><br /><?php echo $row12a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row12a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row12a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row13a["subject"]?><br /><?php echo $row13a["standard"]?><br /><?php echo $row13a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row13a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row13a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row14a["subject"]?><br /><?php echo $row14a["standard"]?><br /><?php echo $row14a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row14a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row14a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                  </tr>
				   <tr>
					  <th id="Saturday" name="CR03">(CR03)</th>
					  <td>
					  <div class="grow">
					  <?php echo $row1b["subject"]?><br /><?php echo $row1b["standard"]?><br /><?php echo $row1b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row1b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row1b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row2b["subject"]?><br /><?php echo $row2b["standard"]?><br /><?php echo $row2b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row2b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row2b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row3b["subject"]?><br /><?php echo $row3b["standard"]?><br /><?php echo $row3b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row3b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row3b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                      <td>
					  <div class="grow">
					  <?php echo $row4b["subject"]?><br /><?php echo $row4b["standard"]?><br /><?php echo $row4b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row4b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row4b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row5b["subject"]?><br /><?php echo $row5b["standard"]?><br /><?php echo $row5b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row5b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row5b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row6b["subject"]?><br /><?php echo $row6b["standard"]?><br /><?php echo $row6b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row6b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row6b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row7b["subject"]?><br /><?php echo $row7b["standard"]?><br /><?php echo $row7b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row7b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row7b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row8b["subject"]?><br /><?php echo $row8b["standard"]?><br /><?php echo $row8b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row8b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row8b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row9b["subject"]?><br /><?php echo $row9b["standard"]?><br /><?php echo $row9b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row9b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row9b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row10b["subject"]?><br /><?php echo $row10b["standard"]?><br /><?php echo $row10b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row10b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row10b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row11b["subject"]?><br /><?php echo $row11b["standard"]?><br /><?php echo $row11b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row11b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row11b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row12b["subject"]?><br /><?php echo $row12b["standard"]?><br /><?php echo $row12b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row12b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row12b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row13b["subject"]?><br /><?php echo $row13b["standard"]?><br /><?php echo $row13b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row13b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row13b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row14b["subject"]?><br /><?php echo $row14b["standard"]?><br /><?php echo $row14b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row14b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row14b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                    </tr>
                    <?php include('scheduleQuery_6b.php');?>
					 <tr>
					  <th id="Sunday" name="CR01">Sunday (CR01)</th>
					  <td>
					  <div class="grow">
					  <?php echo $row1["subject"]?><br /><?php echo $row1["standard"]?><br /><?php echo $row1["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row1['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row1['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row2["subject"]?><br /><?php echo $row2["standard"]?><br /><?php echo $row2["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row2['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row2['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row3["subject"]?><br /><?php echo $row3["standard"]?><br /><?php echo $row3["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row3['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row3['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                      <td>
					  <div class="grow">
					  <?php echo $row4["subject"]?><br /><?php echo $row4["standard"]?><br /><?php echo $row4["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row4['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row4['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row5["subject"]?><br /><?php echo $row5["standard"]?><br /><?php echo $row5["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row5['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row5['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row6["subject"]?><br /><?php echo $row6["standard"]?><br /><?php echo $row6["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row6['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row6['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row7["subject"]?><br /><?php echo $row7["standard"]?><br /><?php echo $row7["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row7['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row7['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row8["subject"]?><br /><?php echo $row8["standard"]?><br /><?php echo $row8["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row8['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row8['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row9["subject"]?><br /><?php echo $row9["standard"]?><br /><?php echo $row9["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row9['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row9['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row10["subject"]?><br /><?php echo $row10["standard"]?><br /><?php echo $row10["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row10['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row10['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row11["subject"]?><br /><?php echo $row11["standard"]?><br /><?php echo $row11["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row11['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row11['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row12["subject"]?><br /><?php echo $row12["standard"]?><br /><?php echo $row12["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row12['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row12['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row13["subject"]?><br /><?php echo $row13["standard"]?><br /><?php echo $row13["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row13['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row13['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row14["subject"]?><br /><?php echo $row14["standard"]?><br /><?php echo $row14["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row14['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row14['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                  </tr>
				   <tr>
					  <th id="Sunday" name="CR02">(CR02)</th>
					  <td>
					  <div class="grow">
					  <?php echo $row1a["subject"]?><br /><?php echo $row1a["standard"]?><br /><?php echo $row1a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row1a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row1a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row2a["subject"]?><br /><?php echo $row2a["standard"]?><br /><?php echo $row2a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row2a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row2a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row3a["subject"]?><br /><?php echo $row3a["standard"]?><br /><?php echo $row3a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row3a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row3a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                      <td>
					  <div class="grow">
					  <?php echo $row4a["subject"]?><br /><?php echo $row4a["standard"]?><br /><?php echo $row4a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row4a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row4a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row5a["subject"]?><br /><?php echo $row5a["standard"]?><br /><?php echo $row5a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row5a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row5a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row6a["subject"]?><br /><?php echo $row6a["standard"]?><br /><?php echo $row6a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row6a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row6a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row7a["subject"]?><br /><?php echo $row7a["standard"]?><br /><?php echo $row7a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row7a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row7a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row8a["subject"]?><br /><?php echo $row8a["standard"]?><br /><?php echo $row8a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row8a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row8a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row9a["subject"]?><br /><?php echo $row9a["standard"]?><br /><?php echo $row9a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row9a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row9a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row10a["subject"]?><br /><?php echo $row10a["standard"]?><br /><?php echo $row10a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row10a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row10a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row11a["subject"]?><br /><?php echo $row11a["standard"]?><br /><?php echo $row11a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row11a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row11a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row12a["subject"]?><br /><?php echo $row12a["standard"]?><br /><?php echo $row12a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row12a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row12a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row13a["subject"]?><br /><?php echo $row13a["standard"]?><br /><?php echo $row13a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row13a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row13a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row14a["subject"]?><br /><?php echo $row14a["standard"]?><br /><?php echo $row14a["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row14a['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row14a['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                  </tr>
				   <tr>
					  <th id="Sunday" name="CR03">(CR03)</th>
					  <td>
					  <div class="grow">
					  <?php echo $row1b["subject"]?><br /><?php echo $row1b["standard"]?><br /><?php echo $row1b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row1b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row1b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row2b["subject"]?><br /><?php echo $row2b["standard"]?><br /><?php echo $row2b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row2b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row2b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row3b["subject"]?><br /><?php echo $row3b["standard"]?><br /><?php echo $row3b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row3b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row3b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                      <td>
					  <div class="grow">
					  <?php echo $row4b["subject"]?><br /><?php echo $row4b["standard"]?><br /><?php echo $row4b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row4b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row4b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row5b["subject"]?><br /><?php echo $row5b["standard"]?><br /><?php echo $row5b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row5b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row5b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row6b["subject"]?><br /><?php echo $row6b["standard"]?><br /><?php echo $row6b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row6b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row6b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row7b["subject"]?><br /><?php echo $row7b["standard"]?><br /><?php echo $row7b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row7b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row7b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row8b["subject"]?><br /><?php echo $row8b["standard"]?><br /><?php echo $row8b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row8b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row8b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row9b["subject"]?><br /><?php echo $row9b["standard"]?><br /><?php echo $row9b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row9b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row9b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row10b["subject"]?><br /><?php echo $row10b["standard"]?><br /><?php echo $row10b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row10b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row10b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row11b["subject"]?><br /><?php echo $row11b["standard"]?><br /><?php echo $row11b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row11b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row11b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row12b["subject"]?><br /><?php echo $row12b["standard"]?><br /><?php echo $row12b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row12b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row12b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row13b["subject"]?><br /><?php echo $row13b["standard"]?><br /><?php echo $row13b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row13b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row13b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
					  <td>
					  <div class="grow">
					  <?php echo $row14b["subject"]?><br /><?php echo $row14b["standard"]?><br /><?php echo $row14b["teacher"]?><br />
					  <a href="edit(schedule)1_a.php?schid=<?php echo $row14b['schedule_id'];?>" class="btn btn-info" style="margin:5px">Update</a>
					  <a href="tables(schedule)1_a.php?schid=<?php echo $row14b['schedule_id'];?>" onclick="return confirmation()" class="btn btn-danger" style="margin:7px">Delete</a>
                      </div>
					  </td>
                    </tr>
                  </tbody>
                </table>