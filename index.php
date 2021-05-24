<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Station</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<?php require "blocks/header.php" ?>
<div class="container">
            <div class="block-title">
                <h1 class="block-title-style">Без музики життя було б помилкою</h1>
            </div>
           <div class="block-picture-music">
                <a href="#"class="block-music">
                    <img class="block-music_img" src="./img//music.jpg" alt="music">
                </a>
            </div>
            <div class="block-music-online">
                <img id="block-music-online_img" src="./img/listen.jpg" alt="listen online">
                <span id="block-music-online_text">Прослухай онлайн
                    <img id="block-music-online_icon" src="./img/play.png" alt="icon music">
                </span> 
            </div>
            <div class="block-title">
                <span class="block-title-style">Вибери свій стиль</span>
            </div>
            <div class="block-type">
                <div class="block-type-music">
                    <img class="block-type-music_img" src="./img/classical.jpg" alt="classical music">
                    <a href="#classical" class="block-type-music_title">Classical</a>
                    <p class="block-type-music_text">Насолоджуйся мистецтвом</p>
                </div>
                <div class="block-type-music">
                    <img class="block-type-music_img"src="./img/rock.jpg" alt="rock music">
                    <a  href="#rock" class="block-type-music_title">Rock</a>
                    <p class="block-type-music_text">Кайфуйте від адреналіну</p>
                </div>
                <div class="block-type-music">
                    <img class="block-type-music_img" src="./img/pop.jpg" alt="pop music">
                    <a href="#pop" class="block-type-music_title">Pop</a>
                    <p class="block-type-music_text">Відчуйте молодість у музиці</p>
                </div>
                <div class="block-type-music">
                    <img class="block-type-music_img"src="./img/jazz.jpg" alt="jazz music">
                    <a href="#jazz" class="block-type-music_title">Jazz</a>
                    <p class="block-type-music_text">Пориньте у світ саксофону</p>
                </div>
            </div>
            <?php require "musics.php" ?>
            <div class="block-title">
                <h1 class="block-title-style"id="advertising">Наші послуги</h1>
            </div>
            <?php require "advertising.php" ?> 
            <div class="block-title">
                <a href="cart.php" class="block-title-style"id="advertising" style="border: 5px solid rgb(15, 149, 139); margin-top:10px">Замов рекламу прямо зараз</a>
            </div>
            <?php require "contacts.php" ?>  
        </div>
        <?php require "blocks/footer.php" ?>
</body>
</html>