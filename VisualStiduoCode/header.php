<html>

<?php
mysqli_connect_error();
session_start();
require_once("dbconn.php"); // тут идет подклчение к файлу с переменной ($link которая) для подключения к бд

?>
    <head>

<link href="prokachu/style.css" rel="stylesheet  ">

</head>

<body>
<header>


<div class="hedimg">
    <img src="images/hed111.png">

    <ul>
        <li><a href="http://SDFAS/index.html">Главная</a></li>
        
        <?php
if (!empty($_SESSION['id'])) {

    if (empty($_SESSION['admin'])) {
        // Для обычных пользователей показываем Заявка и Мои заявки
        echo "<li><a href='zayavka.php'>Заявка</a></li>";
        echo "<li><a href='lk.php'>Мои заявки</a></li>";
    }

    if (!empty($_SESSION['admin'])) {
        // Для администратора — ЛК АДМИН
        echo "<li><a href='lkadmin.php'>ЛК АДМИН</a></li>";
    }

    // Кнопка выхода общая для всех авторизованных
    echo "<li><form class='outform'><a href='out.php'>Выйти</a></form></li>";

} else {
    // Для неавторизованных
    echo "
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


