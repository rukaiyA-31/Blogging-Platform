<?php
include_once '../../config/db.php';

function find_user_by_username($username) {
    global $conn;
    $sql = "SELECT * FROM users WHERE username = '$username'";
    return mysqli_query($conn, $sql);
}

function insert_user($username, $email, $password) {
    global $conn;
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    return mysqli_query($conn, $sql);
}
?>
