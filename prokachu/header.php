<html>

<?php
mysqli_connect_error();
session_start();
require_once("dbconn.php"); // тут идет подклчение к файлу с переменной ($link которая) для подключения к бд

?>
    <head>

<link href="style.css" rel="stylesheet  ">

</head>

<body>
<header>


<div class="hedimg">
    <img src="images/hed111.png">

    <ul>
        <li><a href="http://landing-page/index.html">Главная</a></li>
        <?php
if(!empty($_SESSION['id'])){
    echo"
    
    <li><a href='zayavka.php'>Заявка</a></li>
    <li><a href='lk.php'>Мои заявки</a></li>";
    
    
    if (!empty($_SESSION['admin'])){
        echo"<li><a href='lkadmin.php'>ЛК АДМИН</a></li>";
    }
    
    echo"
    <li> <form class='outform'><a href='out.php'>Выйти</a> </form> </li>";
} 

else {
    echo"
    <li><a href='auth.php'>Авторизироваться</a></li>
    <li><a href='reg.php'>Зарегистрироваться</a></li>
    ";
}
?>
</ul>
</div>


</header>
</body>



</html>


