<?php
$servername = "localhost";
$username = "root";
$password = "master12!";
$dbname = "personal_webpage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
