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
        echo"<div class='error-message'>неверно введены почта или пароль</div>";
    }

}
else {
    echo "<div class='error-message'>пустые или неверные поля</div>";
}
?>
<style>
.error-message {
  color: #d93025;          /* ярко-красный цвет */
  background-color: #fce8e6; /* светлый красный фон */
  border: 1px solid #d93025;
  padding: 10px 15px;
  border-radius: 5px;
  font-family: "Montserrat", sans-serif;
  font-size: 16px;
  max-width: 320px;
  margin: 10px auto;
  text-align: center;
  box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}
</style>




