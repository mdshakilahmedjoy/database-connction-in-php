<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "rowphp";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
// else
//     echo "Database Connected Successfully";
?>