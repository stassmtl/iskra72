<?php
session_start();
require_once("dbconn.php");
mysqli_connect_error ();



$userid = $_SESSION["id"]; 


$carname = $_POST["cars"];
$date = $_POST["date"];

$carid = "SELECT * from `car` where name='$carname'";
$caridres = mysqli_query($link, $carid);
$caridres1 = mysqli_fetch_assoc($caridres);
$carid1 = $caridres1["id"];

$query = "INSERT INTO `request`(`id`, `id_user`, `id_car`, `id_status`, `booking_date`) VALUES (null,'$userid','$carid1',1, '$date') ";
$res = mysqli_query($link, $query);

header("Location: lk.php");




?>