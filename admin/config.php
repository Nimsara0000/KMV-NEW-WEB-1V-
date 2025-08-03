<?php
$servername = "localhost";
$username = "root"; // DB username ඔබට වෙනස් කරන්න
$password = "";     // DB password ඔබට වෙනස් කරන්න
$dbname = "kmv_school";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
