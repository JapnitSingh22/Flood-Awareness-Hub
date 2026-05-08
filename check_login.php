
<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
    echo $_SESSION['user_name'];
} else {
    echo "not_logged_in";
}
?>
