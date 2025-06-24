<?php
mysqli_connect_error();
session_start();
require_once("dbconn.php"); // тут идет подклчение к файлу с переменной ($link которая) для подключения к бд
$id=$_GET['id'];
$st = $_GET['st'];
$st+=0; //преобразование в целочисленный, а то без этого не работает :с
if($st==1){
    if (isset($_POST['yes'])){
        $q = "UPDATE `request` SET `id_status`= 4 WHERE `id`='$id'";
        mysqli_query ($link, $q);
        header("Location: lkadmin.php");
    }
    elseif (isset($_POST['no'])){
        $q = "UPDATE `request` SET `id_status`= 3 WHERE `id`='$id'";
        mysqli_query ($link, $q);
        header("Location: lkadmin.php");       
    }
}
else {
    echo"редактировать мождно только новые<br>";
    echo"<a href='lkadmin.php'> вернуться в ЛК АДМИН</a>";
}
?>