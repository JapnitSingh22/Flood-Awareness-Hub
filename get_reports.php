<?php
include "db.php";

$result = $conn->query("SELECT users.name, reports.location, reports.message 
FROM reports 
JOIN users ON reports.user_id = users.id 
ORDER BY reports.id DESC");

while ($row = $result->fetch_assoc()) {
    echo "<div class='report-card'>";
    echo "<strong>{$row['name']}</strong> ({$row['location']})<br>";
    echo "{$row['message']}";
    echo "</div>";
}
?>