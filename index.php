<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>victoria.portfolio</title>
    <link rel="stylesheet" href ="style.css">
</head>
<body >
<div class = "content">
    <?php
    include "menu.php";
    ?>
<h1>Сайт - портфолио</h1>
<div class="center"></div>
<img src = "img/photo1.png">
<div class="box_text">
<p><b>Добрый день!</b><br>Меня зовут <strong><i>Виктория Ульянова</i></strong>.<br> Я совсем недавно начала программировать, однако уже написала свой первый сайт.</p>
    <p>В этом мне помог IT-портал  <a href = "https://gb.ru/"> GeekBrains</a>,<a href ="https://aislam23.github.io/links/"> Полезные ссылки для веб-разработчика</a></p>
<p>На этом сайте вы сможете сыграть в несколько игр, которые я написала. Из классики :
    <a href = "snake.html"> Змейка </a></p>
    <p>Мои другие проекты <a href = "https://github.com/victoria-ulianova">тут</a></p>
</div>
</div>
<div class ="footer"> Copyright &copy; <?php echo date("Y");?> Victoria Ulyanova </div>
</body>
</html>