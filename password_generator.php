<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>victoria.portfolio</title>
    <link rel="stylesheet" href ="style.css" >
    <script type="text/javascript">
        function genText(letters, length)
        {
            var text = "";
            for (var i = 0; i < length; i++)
            {
                var n = getRandomNumber(letters.length - 1);
                text = text + letters[n];
            }
            return text;
        }
        function getRandomNumber(max)
        {
            var rand = Math.round(Math.random() * max);
            return rand;
        }
        function readInt()
        {
            var passwordLength = document.getElementById("userAnswer").value;
            return parseInt(passwordLength);
        }
        function write(text)
        {
            document.getElementById("passw").innerHTML = text;
        }
        function genPassword()
        {
            var passwordLength = readInt();
            var passw = genText(["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "0", "1", "2", "3", "4", "5", "6", "7", "8","9", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "@", "#"], passwordLength);
            write(passw);
        }
    </script>
</head>
<body>
<div class="contentWrap">
    <div class="content">
<?php
include "menu.php";
?>
        <h1>Генератор паролей</h1>

        <div class="box">
            <p id="info">Укажите длину пароля</p>
            <label><input type="text" id="userAnswer" placeholder="цифрами"></label>
            <h3 id="passw"></h3>
            <br>
            <a href="#" onclick="genPassword();" id="button">Cгенерировать</a>
        </div>
    </div>
</div>
<div class ="footer"> Copyright &copy; <?php echo date("Y");?> Victoria Ulyanova </div>
</body>
</html>
