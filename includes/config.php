<?php
// Database configuration
$host = 'localhost';
$db   = 'agrosmart_db';
$user = 'root';
$pass = '';

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: {$conn->connect_error}");
}