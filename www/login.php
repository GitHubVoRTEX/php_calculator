<?php
var_dump($_POST);
$login = !empty($_POST['login']) ? $_POST['login'] : 'логин не передан';
$password = !empty($_POST['password']) ? $_POST['password'] : 'пароль не передан';
?>

<html>
<head>
    <title>Знакомство с GET-запросами</title>
</head>
<body>
Переданный логин: <?= $login ?>
<br>
Переданный пароль: <?= $password ?>
</body>
</html>