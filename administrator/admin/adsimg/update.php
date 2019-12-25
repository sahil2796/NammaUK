
<?php
//update.php

include('database_connection.php');

if(isset($_POST["id"]))
{
 $old_name = get_old_imagename($connect, $_POST["id"]);
 $file_array = explode(".", $old_name);
 $file_extension = end($file_array);
 $new_name = $_POST["imagename"] . '.' . $file_extension;
 $query = '';
 if($old_name != $new_name)
 {
  $old_path = '../../images/ads/' . $old_name;
  $new_path = '../../images/ads/' . $new_name;
  if(rename($old_path, $new_path))
  { 
   $query = "
   UPDATE adsimg 
   SET imagename = '".$new_name."', description = '".$_POST["description"]."' 
   WHERE id = '".$_POST["id"]."'
   ";
  }
 }
 else
 {
  $query = "
   UPDATE adsimg 
   SET description = '".$_POST["description"]."' 
   WHERE id = '".$_POST["id"]."'
   ";
 }
 
 $statement = $connect->prepare($query);
 $statement->execute();
}
function get_old_imagename($connect, $id)
{
 $query = "
 SELECT imagename FROM adsimg WHERE id = '".$id."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["imagename"];
 }
}

?>