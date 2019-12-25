<?php
include('database_connection.php');
$query = "SELECT * FROM adsimg ORDER BY id DESC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$number_of_rows = $statement->rowCount();
$output = '';
$output .= '
 <table class="table table-bordered table-striped">
  <tr>
   <th>Sr. No</th>
   <th>Image</th>
   <th>URL</th>
  
   <th>Edit</th>
   <th>Delete</th>
  </tr>
';
if($number_of_rows > 0)
{
 $count = 0;
 foreach($result as $row)
 {
  $count ++; 
  $output .= '
  <tr>
   <td>'.$count.'</td>
   <td><img src="../../images/ads/'.$row["imagename"].'" class="img-thumbnail" width="600" height="100" /></td>
   
   <td>'.$row["description"].'</td>
   <td><button type="button" style="padding:5px"  class="btn btn-success btn-xs edit" id="'.$row["id"].'">Edit</button></td>
   <td>

   <button type="button" style="padding:5px" class="btn btn-add btn-xs delete" id="'.$row["id"].'" data-imagename="'.$row["imagename"].'">Delete</button></td>
  </tr>
  ';
 }
}
else
{
 $output .= '
  <tr>
   <td colspan="6" align="center">No Data Found</td>
  </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
