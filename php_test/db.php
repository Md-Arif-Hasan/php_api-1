<?php

$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn=new mysqli($servername, $username, $password,'test');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else
  {echo "success";}