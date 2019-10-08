<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .centered{
            align-content: center;
            text-align: center;
        }
    
    </style>
</head>
<body>
    
    

    <?php if ($missions): ?>
        
            <h1 class="centered">Tutaj bedziesz miał misje</h1>
            <?php foreach (($missionbox?:[]) as $mission): ?>
                <form action="choosemission" method="POST">
                    <p class="click">Misja taka i taka czas trwania: <?= ($mission['duration_time']) ?>, nagrody: <?= ($mission['currency_reward']) ?>golda i <?= ($mission['exp_reward']) ?>expa</p>
                    <input type="hidden" name="activemission" value="<?= ($mission['mission_id']) ?>">
                </form>
            <?php endforeach; ?>
        
        <?php else: ?>
            <?php if ($missionready): ?>
                
                    <h2 class="centered">Brawo!!! Skończyłeś swoją misję!!!</h2>
                    <h2 class="centered">Twoje nagrody to <?= ($missionready['currency_reward']) ?> golda i <?= ($missionready['exp_reward']) ?>expa</h2>
                    <a href="missions">Zacznij nową misję</a>
                    <br>
                
                <?php else: ?>
                    <h2 class="centered">Jesteś teraz w trakcie misji i zostało ci tyle czasu do końca:</h2>
                    <h2 id="timer" class="centered"><?= ($missionbox) ?></h2>
                    <script>
                        timeleft = document.getElementById("timer").innerHTML;
                        function odejmczas(){
                            if(timeleft<1){
                                window.location.href="";
                            }
                            else{
                                timeleft--;
                                document.getElementById("timer").innerHTML=timeleft;
                                setTimeout(odejmczas, 1000);
                            }
                        }
                        setTimeout(odejmczas, 1000);
                    </script>
                
            <?php endif; ?>
        
    <?php endif; ?>
    <a href="./">Powrót</a>
    <script>
        const buttons = document.querySelectorAll(".click")
        for (const button of buttons) {
            button.addEventListener('click', function(event) {
                button.parentNode.submit();
            })
        }
    </script>
</body>
</html>