<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
echo "<h1>Welcome, " . $_SESSION['user'] . "</h1>";
echo "<a href='logout.php'>Logout</a>";
?>
