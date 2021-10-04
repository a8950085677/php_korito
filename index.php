<!DOCTYPE html>
<?php
    require_once 'include/db.php';
    require_once 'include/functions.php';
?>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Регистрация</title>
    </head>
    <body>
        <form action="include/register.php" method="POST">
            <h1 title="Форма регистрации">Регистрация</h1>
            <div class="group"></div>
                <label for="">Имя пользователя</label>
                <input type="text" id="login" name="login">
            <div class="group"></div>
                <label for="">Пароль</label>
                <input type="password" id="password" name="password">
            <div class="group"></div>
                <label for="">Почта</label>
                <input type="text" id="email" name="email">
            <div class="group"></div>
            <div class="group">
                <button type="submit" id="reg" vallue="Выполнить" name="reg">Регистрация</button>
            </div>
        </form>
    </body>
</html>