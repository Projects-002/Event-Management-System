<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "22092209";
$dbname = "Campus_Planner";
$conn = '';

try {
    // Create a new PDO instance and set the error mode to exception
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Handle connection failure
    echo "Connection failed: " . $e->getMessage();
}