<?php
$host = "localhost"; /* Host name */
$user = "Fil"; /* User */
$password = "Password"; /* Password */
$dbname = "cinema_db"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>  