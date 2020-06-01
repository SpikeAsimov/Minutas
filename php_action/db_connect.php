<?php 	

$localhost = "localhost";
$username = "u239399297_minutas";
$password = "tierras";
$dbname = "u239399297_rpi";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>