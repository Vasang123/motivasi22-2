<?php

$servername = "localhost"; //Localhost
$username = "root"; //username
$password = ""; //password

//TODO: BUAT SINGLETON
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "DBCon";
?>