<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_id'])) {
    echo "not_logged_in";
    exit();
}

$id = $_POST['id'];

// Optional: restrict delete to own reports only
$conn->query("DELETE FROM reports WHERE id='$id'");

echo "deleted";
?>