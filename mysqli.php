<?php
$mysqli1 = new mysqli("localhost","root","Mysql@hari#2001","tesla");

// Check connection
if ($mysqli1 -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli1 -> connect_error;
  exit();
}
?>