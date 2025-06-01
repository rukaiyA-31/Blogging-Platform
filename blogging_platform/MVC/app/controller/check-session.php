<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "logged in";
} else {
    echo "not logged in";
}
?>
