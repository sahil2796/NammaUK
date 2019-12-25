
<?php
//edit.php
include('database_connection.php');

$query = "
SELECT * FROM adsimg 
WHERE id = '".$_POST["id"]."'
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{
 $file_array = explode(".", $row["imagename"]);
 $output['imagename'] = $file_array[0];
 $output['description'] = $row["description"];
}

echo json_encode($output);

?>
