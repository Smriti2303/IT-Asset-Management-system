<?php
$servername = "localhost";
$username = "system"; // Your MySQL username
$password = "smriti"; // Your MySQL password
$dbname = "IT asset management"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
