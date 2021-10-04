<?php
    require_once("functions.php");
    require_once("db.php");
?>

<?php
    if (isset($_POST['reg'])) {
        $result = add_user($mysql,$_POST['login'],$_POST['password'],$_POST['email']);
        if ($result == 1) {
            echo 'Новый аккаунт зарегистрирован!';
        } else {
            echo 'Этот аккаунт уже существует!<br/>';
        }
    }
?>