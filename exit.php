<?php
if($_COOKIE['user'] != '')
    setcookie('user', $user['name'], time() - 3600, "/index.php");
else 
    setcookie('user', $user['name'], time() + 3600, "/index.php");
header('Location: login.php');
?>

