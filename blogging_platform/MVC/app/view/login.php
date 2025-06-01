<?php
session_start();

$valid_email = 'admin@example.com';
$valid_password = '12345';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION['logged in'] = true;
        $_SESSION['email'] = $email;
        header('Location: login.php');
        exit();
    } else {
        $error = "Invalid email or password.";
    }
}
?>