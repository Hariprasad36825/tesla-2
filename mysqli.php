<?php
$mysqli1 = new mysqli("localhost","root","","tesla");

// Check connection
if ($mysqli1 -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli1 -> connect_error;
  exit();
}
?>
