<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - KMV</title>
</head>
<body>
    <h1>ආයුබෝවන්, <?php echo htmlspecialchars($_SESSION['admin']); ?>!</h1>
    <p><a href="logout.php">Logout</a></p>
    <ul>
        <li><a href="manage_students.php">ශිෂ්‍ය විස්තර කළමනාකරණය</a></li>
        <li><a href="manage_teachers.php">ගුරුවරුන් කළමනාකරණය</a></li>
    </ul>
</body>
</html>
