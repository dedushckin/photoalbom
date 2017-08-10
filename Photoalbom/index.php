<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Мой личный сайт</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content">
    <div class="header">
        <a href="#">Главная</a>/
        <a href="petrodvorets.php">Петродворец</a>/
        <a href="dublin.php">Дублин</a>
    </div>
        <h1>Мой личный сайт</h1>
        <div class="center">

            <img src="img/My_photo/hi.png" alt="Мои фото">

            <div class="box_text">
                <p>
                    Добрый День. Меня зовут <b>Петя Пяточкин</b>. Я - <i>начинающий програмист</i>.
                    Я совсем недавно встал на этот путь, но уже успел написать свой первый сайт.
                </p>
                <p>
                    Это мой первый сайт. Здесь я делюсь своими фотками.
                    Спасибо!
                </p>

            </div>
        </div>
</div>
<div class="footer">
    <?php date_default_timezone_set('Europe/Moscow');?>
    Copyright &copy Петруня,  <?php echo date('j-m-Y, H-i-s')?>
</div>
</body>
</html>