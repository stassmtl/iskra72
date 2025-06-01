
<!doctype html>
<html>

<head>
<title>Регистрация</title>
<link href="style.css" rel="stylesheet  ">
</head>

<body>
    <?php include 'header.php';?>
<h1>Регистрация<h1/>




<div class="wrap">
    






<form action="regkod.php" method="POST">
    <p id="fio">Введите ваше ФИО:<p/>
<input name="name" type="text" placeholder=""> <br>
<p>Введите ваш номер телефона:</p>
<input name="phone" type="phone" placeholder="">
<p>Введите email:</p>
<input name="email" type="email" placeholder="">
<p>Ваш возраст:</p>
<input name="driver_license" type="text" placeholder="">
<p>Введите пароль:</p>
<input name="password" type="password" placeholder=""> <br>
<button Id="zareg" type="submit">Зарегистрироваться</buton>
</form>
</div>




</body>


</html>