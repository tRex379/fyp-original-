<?php
require_once ("dbcontroller.php");
$db_handle = new DBController();
if (! empty($_POST["Teach_Subject"])) {
    $query = "SELECT * FROM teacher WHERE Teach_Subject1 = '" . $_POST["Teach_Subject"] . "' or Teach_Subject2 = '" . $_POST["Teach_Subject"] ."' or Teach_Subject3 = '" . $_POST["Teach_Subject"] ."' and 
	 status = 'active' order by Name asc";
    $results = $db_handle->runQuery($query);
    ?>
<option value disabled selected>Select Teacher</option>
<?php
    foreach ($results as $teacher) {
        ?>
<option value="<?php echo $teacher["Name"]; ?>"><?php echo $teacher["Name"]; ?></option>
<?php
    }
}
?>