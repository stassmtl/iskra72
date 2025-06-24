<?php
mysqli_connect_error();
session_start();
require_once("dbconn.php");
?>
<!doctype html>
<html>
<head>
<title>Искра</title>
<link href="style.css" rel="stylesheet  ">
</head>
<body>
<?php include 'header.php';?>
<div class="wrap">
<?php
if(!empty($_SESSION["id"])){
    $id=$_SESSION["id"];
    echo"<h1> Здравствуйте, $id <h1/>";
}
else {
    echo"<h1>Войдите или зарегистрируйтесь<h1/>";
}
?>
</div>
</body>
</html>