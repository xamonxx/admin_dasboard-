<?php
session_start();
session_destroy();

// Redirect ke halaman login
header("Location: register.php");
exit;
?>
