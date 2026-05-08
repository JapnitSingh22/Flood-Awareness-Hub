<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, email, password)
        VALUES ('$name', '$email', '$password')";

if ($conn->query($sql)) {
    echo "Signup successful";
} else {
    echo "Error: Email may already exist";
}
?>