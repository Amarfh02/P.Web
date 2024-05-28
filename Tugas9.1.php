<?php

// Database connection parameters
$dbHost = "localhost";
$dbUsername = "username";
$dbPassword = "password";
$dbName = "database_name";

// Create connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
