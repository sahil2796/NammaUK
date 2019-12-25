<?php
require_once ("dbcontroller.php");
$db_handle = new DBController();
if (! empty($_POST["maincatid"])) {
    $query = "SELECT * FROM bisubcategory WHERE maincatid = '" . $_POST["maincatid"] . "'";
    $results = $db_handle->runQuery($query);
    ?>
<option value disabled selected>Select SubCategory</option>
<?php
    foreach ($results as $subcategory) {
        ?>
<option value="<?php echo $subcategory["id"]; ?>"><?php echo $subcategory["subcategory"]; ?></option>
<?php
    }
}
?>