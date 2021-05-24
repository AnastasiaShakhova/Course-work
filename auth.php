<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."ertyu2345");

    $mysql = new mysqli('localhost', 'root', '', 'db_musics');

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = 
    '$login' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();
    if(count($user) == 0){
        echo "Такого користувача не існує";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600, "index.php");

    $mysql->close();

    header('Location: index.php');
?>