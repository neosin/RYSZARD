<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="POST" action="createchar">
            <div style="float: left; margin-right: 500px">
                Informatyk<input type="radio" name="occupation" value="informatyk" checked></br>
                Mechatronik<input type="radio" name="occupation" value="mechatronik"></br>
                Elektronik<input type="radio" name="occupation" value="elektronik"></br>
                Wpisz nazwę postaci<input type="text" name="nickname"></br>
            </div>
            <div>
                Człowiek<input type="radio" name="race" value="czlowiek" checked></br>
                Kobieta<input type="radio" name="race" value="kobieta"></br>
                Żyd<input type="radio" name="race" value="zyd"></br>
                Karzeł<input type="radio" name="race" value="karzel"></br>
            </div>
            <button type="submit">Stwórz postać</button><br>
            <a href="login">Wybór serwerów</a>
        </form>
        <?= ($creating_error1)."
" ?>
        <?= ($creating_error2)."
" ?>
        <?= ($creating_error3)."
" ?>
        <?= ($creating_error4)."
" ?>
    </div>

</body>
</html>