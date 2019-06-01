<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "wolly");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>