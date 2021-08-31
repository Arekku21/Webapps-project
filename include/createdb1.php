<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enquirydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{}

// Create database
//mysqli_query() function performs a query against a database.
$sql = "CREATE DATABASE enquirydb";

if (mysqli_query($conn, $sql)) {
    echo "\nDatabase created successfully";
} else {
    echo "\nError creating database: " . mysqli_error($conn);
}

mysqli_close($conn);


?>