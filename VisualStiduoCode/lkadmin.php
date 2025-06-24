<?php
session_start();
require_once("dbconn.php");
mysqli_connect_error ();
$query = "SELECT request.id as id, user.full_name as FIO,  car.name as car_name, status.name as status_name,
 user.phone as phone, user.email as email, booking_date, id_status   FROM `request` 
JOIN `car` 
on request.id_car = car.id

JOIN `status`
on request.id_status = status.id

join `user`
on request.id_user = user.id

ORDER BY id DESC
";
$res = mysqli_query($link, $query);
?>
<!doctype html>
<html>
<head>
<link href="style.css" rel="stylesheet  ">

<title>Личный кабинет администратора</title>

</head>



<body>
<?php include 'header.php';?>
<h1>Бронирование</h1>
<div class="wrap">

<table border ="1">
<thead>
    <tr>
        <th>id заявки</th>
        <th>Номер телефона</th>
        <th>Email</th>
        <th>Помещение</th>
        <th>Дата</th>
        <th>Статус</th>
        <th>Подтвердить?</th>
</tr>
</thead>
<tbody>
<?php
while($r = mysqli_fetch_assoc($res)){
    echo"<tr>";
    echo"<td> {$r['id']}</td>";
    echo"<td> {$r['phone']}</td>";
    echo"<td> {$r['email']}</td>";
    echo"<td> {$r['car_name']}</td>";
    echo"<td> {$r['booking_date']}</td>";
    echo"<td> {$r['status_name']}</td>";
    echo"<td>";

    $idz=$r['id']; //передача айди в форму скрипта подтверждения
    $idst=$r['id_status']; //передача айди статуса в форму скрипта подтверждения (типа олько новые можно редактировать)
    $_POST["id_status"] = $r["id_status"];
    echo"
     <form action='confirm.php?id=$idz &amp st=$idst' method='POST'> 
     <button type='submit'
     
     name='yes'>Подтвердить</button>
     <button type='submit'  name='no'>Отклонить </button>
     </form>
    </td>";
    echo"</tr>";
}
?>
</tbody>
</table>
</div>
</body>

</html>