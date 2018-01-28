<?php
session_start();
// remove all session variables
unset($_SESSION['username']);
unset($_SESSION);

// destroy the session 
session_destroy(); 
header("Location: logout.php");

?>