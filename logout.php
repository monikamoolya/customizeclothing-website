<?php             /*PHP session code for Logout module */
session_start(); /*Creates a session or resumes the current one based on a session identifier passed via a GET or POST request */
session_destroy();
header('location:custom.php');
?>