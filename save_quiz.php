<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_id'])) {
    echo "not_logged_in";
    exit();
}

$user_id = $_SESSION['user_id'];
$score = $_POST['score'];

$sql = "INSERT INTO quiz_results (user_id, score)
        VALUES ('$user_id', '$score')";

if ($conn->query($sql)) {
    echo "saved";
} else {
    echo "error";
}
?>