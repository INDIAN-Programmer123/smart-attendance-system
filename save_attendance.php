<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "INSERT INTO attendance_log (student_id) VALUES ('$id')";

    if ($conn->query($sql)) {
        echo "Success";
    } else {
        echo "Error";
    }
}
?>
