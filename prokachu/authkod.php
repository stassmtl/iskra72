<?php
session_start();
require_once("dbconn.php"); // тут идет подклчение к файлу с переменной ($link которая) для подключения к бд
mysqli_connect_error ();



if(!empty($_POST["email"]) and !empty($_POST["password"])){
    $email=$_POST["email"];
    $password=$_POST["password"];


    $query="SELECT * from `user` where email ='$email' and password='$password' "; // сам sql запрос
    $res = mysqli_query($link, $query); // отправка запроса в бд и получение ответа
    $usr = mysqli_fetch_assoc ($res);

    if(!empty($usr) and $usr["id_role"]==1)
    {
        $id=$usr["id"]; 
        $_SESSION["id"]=$id;
        header("Location: index.php");
    }
    elseif(!empty($usr) and $usr["id_role"]==2) {
        $id=$usr["id"]; 
        $_SESSION["id"]=$id;
        $_SESSION["admin"]=true;

        header("Location: index.php");

    }
    else {
        echo"неверно введены почта или пароль";
    }

}
else{
    echo"пустые поля";
}




?>