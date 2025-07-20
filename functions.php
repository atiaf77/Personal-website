<?php
// This file contains PHP functions that can be used for server-side processing.

// Example function to sanitize user input
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Example function to connect to a database
function connectToDatabase($host, $username, $password, $dbname) {
    $conn = new mysqli($host, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Example function to close the database connection
function closeDatabaseConnection($conn) {
    $conn->close();
}
?>