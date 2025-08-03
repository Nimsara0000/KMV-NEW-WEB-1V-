<?php
session_start();
require 'config.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admin_users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (hash('sha256', $password) === $row['password']) {
            $_SESSION['admin'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "මුරපදය වැරදියි";
        }
    } else {
        $error = "පරිශීලක නාමය හමු නොවීය";
    }
}
?>

<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <title>Admin Login - KMV</title>
</head>
<body>
    <h2>Admin Login</h2>
    <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST" action="">
        <label>පරිශීලක නාමය:</label><br>
        <input type="text" name="username" required><br><br>

        <label>මුරපදය:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="login">ඇතුළු වන්න</button>
    </form>
</body>
</html>
