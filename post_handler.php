<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if user is authenticated
    if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
        die("You are not authenticated to post.");
    }

    $post_content = $_POST['post_content'];

    // Example: Save post content to a file
    $post_filename = "posts.txt";
    $post_file = fopen($post_filename, 'a'); // Open file in append mode
    fwrite($post_file, $post_content . "\n"); // Append post content
    fclose($post_file);
    
    echo "Post submitted successfully.";
} else {
    echo "Error: Method not allowed.";
}
?>
