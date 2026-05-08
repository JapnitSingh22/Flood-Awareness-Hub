
<?php
session_start();
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name']; // ✅ ADD THIS

    echo "Login successful";
} else {
    echo "Invalid email or password";
}
?>