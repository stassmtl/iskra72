<?php
session_start();
require_once("dbconn.php"); // тут идет подклчение к файлу с переменной ($link которая) для подключения к бд
mysqli_connect_error ();

$id = $_SESSION["id"];

$query = "SELECT request.id, car.name as car_name, status.name as status_name, booking_date  FROM `request` 

JOIN `car`
on request.id_car = car.id

JOIN `status`
on request.id_status = status.id

WHERE id_user = '$id' 

ORDER BY `id`

";
$res = mysqli_query($link, $query);


?>

<!doctype html>
<html>

<head>
<title>Upstairs StudioS</title>
<link href="prokachu/style.css" rel="stylesheet  ">
</head>

<body>

<?php include 'header.php';?>


<h1>Отправленные заявки<h1/>



<div class="wrap">
        <table border="1">
            <thead>
                <tr>
                    <th>id заявки</th>
                    <th>Фотостудия</th>
                    <th>Статус</th>
                    <th>дата</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($r = mysqli_fetch_assoc($res)){
                    echo "<tr>";
                    echo "<td>{$r['id']}</td>";
                    echo "<td>{$r['car_name']}</td>";
                    echo "<td>{$r['status_name']}</td>";
                    echo "<td>{$r['booking_date']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="form-container">
        <form onsubmit="return validateForm();">
            <div>
                <label for="input1">Введите id заявки:</label>
                <input type="text" id="input1" required>
            </div>
            <button type="submit">Оплатить бронирование</button>
        </form>
    </div>

    <script>
        function validateForm() {
            const input1 = document.getElementById('input1').value;

            if (input1.length < 1) {
                alert("Каждое поле должно содержать не менее 14 символов.");
                return false;
            }

            // Если оба поля заполнены корректно, переходим на другую страницу
            window.location.href = "opl.html"; // замените на вашу страницу
            return false; // предотвращаем стандартное поведение формы
        }
    </script>


</tbody>
</table>
</div>




</body>


</html>