<?php
//delete.php

include('database_connection.php');

if(isset($_POST["id"]))
{
 $file_path = '../../../images/ads/' . $_POST["imagename"];
 if(unlink($file_path))
 {
  $query = "DELETE FROM adsimg WHERE id = '".$_POST["id"]."'";
  $statement = $connect->prepare($query);
  $statement->execute();
 }
}

?>