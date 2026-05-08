<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_id'])) {
    echo "not_logged_in";
    exit();
}

$user_id = $_SESSION['user_id'];
$location = $_POST['location'];
$message = $_POST['message'];

$sql = "INSERT INTO reports (user_id, location, message)
        VALUES ('$user_id', '$location', '$message')";

if ($conn->query($sql)) {
    echo "Report submitted";
} else {
    echo "Error";
}
?>