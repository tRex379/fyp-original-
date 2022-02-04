<?php
require_once ("dbcontroller.php");
$db_handle = new DBController();
if (! empty($_POST["Standard_Name"])) {
    $query = "SELECT * FROM subject WHERE Standard_Name = '" . $_POST["Standard_Name"] . "' and Subject_Status = 'active' order by Subject_Name asc";
    $results = $db_handle->runQuery($query);
    ?>
<option value disabled selected>Select Subject</option>
<?php
    foreach ($results as $subject) {
        ?>
<option value="<?php echo $subject["Subject_Name"]; ?>"><?php echo $subject["Subject_Name"]; ?></option>
<?php
    }
}
?>