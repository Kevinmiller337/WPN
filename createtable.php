<?php
$servername = "localhost";
$username = "student";
$password = "scholar";
$dbname = "EM420KevinMiller";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Creates Table One
$sql = "CREATE TABLE archives (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
archivename VARCHAR(30) NOT NULL,
authorname  VARCHAR(30) NOT NULL,
articlename  VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table archives created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


//  Creates Table Two
$sql = "CREATE TABLE newsletter (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table newsletter created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

//  Creates Table Three
$sql = "CREATE TABLE subscribed (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
subscribetype VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table subscribe created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

//  Creates Table Four
$sql = "CREATE TABLE jobapp (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
jobtype VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table jobaplication created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

//  Creates Table Five
$sql = "CREATE TABLE contact (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
textmessage VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table contact created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

