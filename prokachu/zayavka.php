<?php
session_start();
require_once("dbconn.php");
mysqli_connect_error ();

?>

<!doctype html>
<html>

<head>
<title>Заявка</title>
<link href="style.css" rel="stylesheet  ">
</head>

<body>

<?php include 'header.php';?>
<h1>Заявка<h1/>




<div class="wrap">

<form action="zayavkakod.php" method="POST">

<p>Выберите помещение</p>
    <select name="cars">
    <?php
    $qcars="select * from `car`";
    $res = mysqli_query($link, $qcars);


    while($r = mysqli_fetch_assoc($res)){
        echo"<option>  {$r['name']} </option> ";
    }
?>
        <option > </option>
</select>



<p> Выберите дату бронирования</p>
<input type="date" name="date"/> <br>
<button type="submit">Отправить</buton>
</form>
</div>




</body>


</html>