<?php
session_start();

// Simulated authentication (replace with your actual authentication logic)
$valid_username = "user";
$valid_password = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['authenticated'] = true;
        header("Location: index.html"); // Redirect to main page after successful login
        exit;
    } else {
        echo "Invalid username or password.";
    }
}
?>
