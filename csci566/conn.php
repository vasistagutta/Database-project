<?php
$servername = "courses";
$username = "cs566201";
$password = "hgFTnvgE7w";
$dbname = "cs566201";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//printf("Server version: %d\n", $conn->server_version);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>