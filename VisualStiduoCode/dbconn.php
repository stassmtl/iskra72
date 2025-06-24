<?php
mysqli_connect_error();
$host1="localhost";
$user1="root";
$pass1="";
$dbname="prokachu";
$link=mysqli_connect($host1, $user1, $pass1, $dbname);
if(!$link){
    die("подключение не удалось". mysqli_connect_error());
}
?>
