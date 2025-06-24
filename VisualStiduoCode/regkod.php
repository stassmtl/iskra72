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