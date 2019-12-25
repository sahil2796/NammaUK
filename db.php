<?php
//$con = mysqli_connect('148.72.232.171:3306','nammauk','loveyoudad9820102993','nammauk'); 

$con = mysqli_connect('localhost','root','','nammauk'); 



// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

