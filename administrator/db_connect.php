<?php

/* Database connection start */

//$servername = "148.72.232.171:3306";
//$username = "nammauk";
//$password = "loveyoudad9820102993";
//$dbname = "nammauk";


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nammauk";




$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>