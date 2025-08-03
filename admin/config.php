<?php
$servername = "localhost";
$username = "if0_39624347"; // DB username ඔබට වෙනස් කරන්න
$password = "NIMSARA2009";     // DB password ඔබට වෙනස් කරන්න
$dbname = "kmv_school";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
