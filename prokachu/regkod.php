<?php
session_start();
require_once("dbconn.php"); // тут идет подклчение к файлу с переменной ($link которая) для подключения к бд
mysqli_connect_error ();







if(!empty($_POST["email"]) and !empty($_POST["password"]) and !empty($_POST["phone"]) and !empty($_POST["name"]) and !empty($_POST["driver_license"])     ){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $phone=$_POST["phone"];
    $driver_license=$_POST["driver_license"];




    $query="INSERT INTO `user`(`id`, `id_role`, `password`, `full_name`, `phone`, `email`, `driver_license`) VALUES (null, 1,'$password','$name','$phone','$email','$driver_license')";
    $res = mysqli_query($link, $query);


    $queryid = "SELECT `id` from `user` where email='$email' and password='$password'";
        $id= mysqli_query($link, $queryid);
        $resid= mysqli_fetch_assoc($id);
        $_SESSION["id"]=$resid["id"];
        header("Location: index.php");

}
else{
    echo"пустые или неверные поля";
}




?>