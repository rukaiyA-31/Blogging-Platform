<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

if (isset($_SESSION['role']) && $_SESSION['role'] !== 'admin') {
    echo "Access denied. Admins only.";
    exit();
}
?>
