<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "Siddhant@0867"; // Your database password
$dbname = "adrs_techno";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{ 
 
}
?>