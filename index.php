<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Smart Attendance System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>📌 Smart Attendance System</h1>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Time</th>
</tr>

<?php
$sql = "SELECT attendance_log.id, students.name, attendance_log.time 
        FROM attendance_log 
        JOIN students ON students.id = attendance_log.student_id
        ORDER BY attendance_log.time DESC";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['time']}</td>
          </tr>";
}
?>

</table>

</body>
</html>
