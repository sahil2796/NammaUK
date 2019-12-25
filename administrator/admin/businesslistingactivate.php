<?php 
//$db= new mysqli('148.72.232.171:3306','nammauk','loveyoudad9820102993','nammauk'); 

$db= new mysqli('localhost','root','','nammauk'); 

extract($_POST);
$user_id=$db->real_escape_string($id);
$status=$db->real_escape_string($status);
$sql=$db->query("UPDATE bicategory SET status='$status' WHERE id='$id'");
echo $sql;
//echo 1;
?>
