<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>victoria.portfolio</title>
    <link rel="stylesheet" href ="style.css">
    <script type="text/javascript">
        var score = 0;
    function checkAnswer(inputId, answers){
        var userAnswer =document.getElementById(inputId).value;
        userAnswer = userAnswer.toLowerCase();
        for(var i=0; i< answers.length; i++){
            if(userAnswer == answers[i]){
                score++;
                break;
            }
        }
    }
        function checkAnswers() {
        checkAnswer("userAnswer1", ["мопед"]);
            checkAnswer("userAnswer2", ["млечный путь", "млечному пути"]);
            checkAnswer("userAnswer3", ["шахматист"]);
            checkAnswer("userAnswer4", ["музыка", "мелодия"]);

            alert("Вы отгадали " + score + " загадок");
        }
    </script>
</head>
<body>
<?php
include "menu.php";
?>
    <div class ="contentWrap">
        <div class ="content">
            <div class ="center">
<h1>Игра в загадки</h1>
                <div class ="box">

                    <?php
                    if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3']) && isset($_GET['userAnswer4'])){
                        $userAnswer = $_GET["userAnswer1"];
                        $score = 0;
                        if($userAnswer == "мопед"){
                            $score++;
                        }

                        $userAnswer = $_GET["userAnswer2"];
                        if($userAnswer == "млечный путь" || $userAnswer == "млечному пути"){
                             $score++;
                        }

                        $userAnswer = $_GET["userAnswer3"];
                        if($userAnswer == "шахматист"){
                            $score++;
                        }

                        $userAnswer = $_GET["userAnswer4"];
                        if($userAnswer == "музыка" || $userAnswer == "мелодия"){
                            $score++;
                        }
                        echo "Вы угадали " . $score . " загадок";
                    }
                    ?>
                    <form method="GET">
                    <p>Среднее арифметическое между велосипедом и мотоциклом?</p>
                        <label><input type="text" name="userAnswer1"></label>

                    <p>По какому пути ещё никто никогда не ходил и не ездил?</p>
                        <label><input type="text" name="userAnswer2"></label>

                    <p>Какой человек сможет удержать слона?</p>
                        <label><input type="text" name="userAnswer3"></label>

                    <p>Бывает лёгкой и тяжёлой, но ничего не весит. Бывает быстрой и медленной, но не ходит, не бегает, не летает.</p>
                        <label><input type="text" name="userAnswer4"></label>

                    <br>
                        <label><input type="submit" value="Ответить" name=" "></label>
                    </form>
                </div>
            </div>
        </div>
<div class ="footer"> Copyright &copy; <?php echo date("Y");?> Victoria Ulyanova </div>
</div>
</body>
</html>