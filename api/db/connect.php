<?php

// Vercel / Environment Variable Support
$servername = getenv('DB_HOST') ?: "localhost";
$username = getenv('DB_USER') ?: "root";
$password = getenv('DB_PASS') ?: "";
$db = getenv('DB_NAME') ?: "eventmgmt";

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    // On Vercel, we want to know why it failed without crashing completely if possible
    error_log("Database connection failed: " . mysqli_connect_error());
    if (getenv('VERCEL')) {
        die("Database connection error. Please check your Environment Variables.");
    }
    die("Connection failed: " . mysqli_connect_error());
}
?>
