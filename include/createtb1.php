<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enquirydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("\nConnection failed: " . mysqli_connect_error());
}else{}

// sql to create table
	$sql = "CREATE TABLE enqdetails(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
    address VARCHAR(40) NOT NULL,
    citytown VARCHAR(20) NOT NULL,
    state VARCHAR(20) NOT NULL,
    postcode INT(5) NOT NULL,
    phone INT(10) NOT NULL,
    location VARCHAR(20) NOT NULL,
    packagetype VARCHAR(40) NOT NULL,
    package VARCHAR(600),
    notes VARCHAR(600)
	)";

if (mysqli_query($conn, $sql)) {
    echo "\nTable enqdetails created successfully";
} else {
    echo "\nError creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
