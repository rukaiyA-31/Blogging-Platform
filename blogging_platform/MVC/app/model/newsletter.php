<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    $query = "INSERT INTO newsletter (email) VALUES ('$email')";
    if (mysqli_query($conn, $query)) {
        echo "Subscribed successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
