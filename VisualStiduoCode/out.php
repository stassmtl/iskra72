<?php
session_start();
$_SESSION["id"] = null;
$_SESSION["admin"] = null;
echo"вы вышли";
header("Location: index.php")
?>
