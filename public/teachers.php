<?php
require '../admin/config.php';

$result = $conn->query("SELECT * FROM teachers");
?>

<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <title>ගුරුවරුන් ලැයිස්තුව - KMV</title>
</head>
<body>
    <h2>ගුරුවරුන් ලැයිස්තුව</h2>
    <ul>
    <?php while ($teacher = $result->fetch_assoc()): ?>
        <li>
            <img src="photos/<?= htmlspecialchars($teacher['photo']) ?>" alt="ගුරුවරු ඡායාරූපය" width="100">
            <p>නම: <?= htmlspecialchars($teacher['name']) ?></p>
            <p>විෂය: <?= htmlspecialchars($teacher['subject']) ?></p>
            <p>දුරකථන: <?= htmlspecialchars($teacher['phone']) ?></p>
        </li>
    <?php endwhile; ?>
    </ul>
</body>
</html>
