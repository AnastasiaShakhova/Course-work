<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<?php require "blocks/header.php" ?>
<div class="block-title">
    <h1 class="block-title-style"id="advertising">Реєстрація</h1>
</div>
<form action="check.php" method="post" class="block-registr">
    <input type="text" class="form-control" name="login" placeholder="Login" id="login">
    <input type="text" class="form-control" name="name" placeholder="Name" id="name">
    <input type="password" class="form-control" name="pass" placeholder="Password" id="pass">
    <button class="btn-success" type="submit">Registration</button>
</form>
<?php require "blocks/footer.php" ?>
</body>
</html>