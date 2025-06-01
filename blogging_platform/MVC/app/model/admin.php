<?php
session_start();
include 'config.php';

if (!isset($_SESSION['username'])) {
    echo "Access denied.";
    exit();
}

$query = "SELECT id, username, email FROM users ORDER BY id DESC";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='5'><tr><th>ID</th><th>Username</th><th>Email</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['email']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "No users found.";
}
?>
