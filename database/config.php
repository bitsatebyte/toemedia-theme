<?php
    $host = "localhost:3306";
    $userName = "toemedia";
    $password = "u472bmt0410j";
    $dbName = "toemedia-website";
    // Create database connection
    $conn = new mysqli($host, $userName, $password, $dbName);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    return false;
    }
    else {
        return true;
    }
?>