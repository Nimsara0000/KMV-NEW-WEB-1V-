<?php
require '../admin/config.php';

$student = null;
if (isset($_GET['student_id'])) {
    $student_id = $_GET['student_id'];
    $stmt = $conn->prepare("SELECT * FROM students WHERE student_id = ?");
    $stmt->bind_param("s", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $student = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <title>KMV ශිෂ්‍ය සෙවීම</title>
</head>
<body>
    <h2>ශිෂ්‍ය අංකය අනුව සෙවීම</h2>
    <form method="GET" action="">
        <input type="text" name="student_id" placeholder="ඇතුළත් වීමේ අංකය" required>
        <button type="submit">සෙවීම</button>
    </form>

    <?php if ($student): ?>
        <h3>ශිෂ්‍ය විස්තර</h3>
        <p>නම: <?= htmlspecialchars($student['name']) ?></p>
        <p>උපන්දිනය: <?= htmlspecialchars($student['dob']) ?></p>
        <p>දෙමාපියන්ගේ නම්: <?= htmlspecialchars($student['parent_names']) ?></p>
        <p>භාරකරුගේ නම: <?= htmlspecialchars($student['guardian_name']) ?></p>
        <p><img src="photos/<?= htmlspecialchars($student['photo']) ?>" alt="ශිෂ්‍ය ඡායාරූපය" width="150"></p>
    <?php elseif (isset($_GET['student_id'])): ?>
        <p>ශිෂ්‍යයා හමු නොවීය</p>
    <?php endif; ?>
</body>
</html>
