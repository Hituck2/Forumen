<?php
session_start();
session_unset();
session_destroy();

// Redirect to sign-in page after sign out
header("Location: signin.html");
exit;
?>
