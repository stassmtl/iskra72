<?php

// тут прописывается подключение, остальные файлы ссылаются на переменную отсюда (чтобы потом в остальныъ файлах это не прописывать)
mysqli_connect_error();

$host1="localhost";
$user1="root";
$pass1="";
$dbname="prokachu";

$link=mysqli_connect($host1, $user1, $pass1, $dbname); // типа подключение


if(!$link){
    die("подключение не удалось". mysqli_connect_error());
}
?>
