<?php
$conn = mysqli_connect("localhost","root","","api_silk_shop");

// Check connection
if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

# For default timezone setup
date_default_timezone_set('UTC');

session_start();

?>