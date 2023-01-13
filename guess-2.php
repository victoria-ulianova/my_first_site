<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>victoria.portfolio</title>
    <link rel="stylesheet" href ="style.css">
    <script type="text/javascript">

        var answer = parseInt(Math.random() * 100);
        var tryCount = 0;
        var maxTryCount = 5;

        function readInt(){
            var arrAnswer = [];
            var ap1 = document.getElementById("userAnswer1").value;
            arrAnswer.push(ap1);
            var ap2 = document.getElementById("userAnswer2").value;
            arrAnswer.push(ap2);
            return (arrAnswer);
            // return +document.getElementById(userAnswer).value;
        }

        function write(text1, text2, text3){
            document.getElementById("info1").innerHTML = text1;
            document.getElementById("info2").innerHTML = text2;
            document.getElementById("info").innerHTML = text3;
        }

        function hide(id1, id2, id3, id4, id5){
            document.getElementById(id1).style.display = "none";
            document.getElementById(id2).style.display = "none";
            document.getElementById(id3).style.display = "none";
            document.getElementById(id4).style.display = "none";
            document.getElementById(id5).style.display = "none";
        }

        function guess(){
            tryCount++;
            var a = readInt();
            if ((a[0] == answer) && (a[1] != answer)) {
                write("<b>Поздравляем, Вы угадали!</b>", "А Вы, нет!", "Игра окончена!");
                hide("button", "userAnswer1", "userAnswer2");
            } else if (a[0] != answer && a[1] == answer) {
                write("Не угадал!", "<b>Поздравляем, Вы угадали!</b>", "Игра окончена!");
                hide("button", "userAnswer1", "userAnswer2");
            } else if (a[0] == answer && a[1] == answer){
                write("", "", "<b>Оба игрока угадали.</b><br>Правильный ответ: " + answer);
                hide("button", "userAnswer1", "userAnswer2", "player1", "player2");
            } else if (a[0] == "q" || a[2] == "q") {
                write("", "", "Игра окончена, т.к. 1 или оба игрока её покинул.");
                hide("button", "userAnswer1", "userAnswer2", "player1", "player2");
            } else if(tryCount >= maxTryCount){
                write("", "", "Вы проиграли. Никто не угадал.<br>Правильный ответ: " + answer);
                hide("button", "userAnswer1", "userAnswer2", "player1", "player2");
            } else if (a[0] > answer) {
                if (a[1] > answer) {
                    write("Вы ввели слишком большое число<br>Попробуйте ещё раз.", "Вы ввели слишком большое число<br>Попробуйте ещё раз.", "У Вас осталось " + (maxTryCount - tryCount) + " попыток");
                } else {
                    write("Вы ввели слишком большое число<br>Попробуйте ещё раз.", "Вы ввели слишком маленькое число<br>Попробуйте ещё раз.", "У Вас осталось " + (maxTryCount - tryCount) + " попыток");
                }
            } else if (a[1] < answer) {
                write("Вы ввели слишком маленькое число<br>Попробуйте ещё раз.", "Вы ввели слишком маленькое число<br>Попробуйте ещё раз.", "У Вас осталось " + (maxTryCount - tryCount) + " попыток");
            } else {
                write("Вы ввели слишком маленькое число<br>Попробуйте ещё раз.", "Вы ввели слишком большое число<br>Попробуйте ещё раз.", "У Вас осталось " + (maxTryCount - tryCount) + " попыток");
            }

        }

    </script>
</head>
<body>
<?php
include "menu.php";
?>
    <div class="contentWrap">
        <div class="content">
            <div class="center">
                <h1>Игра Угадайка</h1>
                <div class="box">

                    <p id="info">Угадайте число от 0 до 100</p>
                    <p id="player1">Игрок 1</p>
                    <p id="info1"></p>
                    <label><input type="text" id="userAnswer1"></label>
                    <p id="player2">Игрок 2</p>
                    <p id="info2"></p>
                    <label><input type="text" id="userAnswer2"></label>
                    <br>
                    <a href="#" onClick="guess();" id="button">Проверить</a>

                </div>
            </div>
        </div>
    </div>


    <div class ="footer"> Copyright &copy; <?php echo date("Y");?> Victoria Ulyanova </div>


</body>
</html>
