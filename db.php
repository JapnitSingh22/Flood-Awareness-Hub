<?php
$conn = new mysqli("localhost", "root", "", "flood_awareness");

if ($conn->connect_error) {
    die("Connection failed");
}
?>