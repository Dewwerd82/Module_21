<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css" />
</head>
<body>
<div id="header"><h1>PHP</h1></div>

<div id="content">
    <p>Пожалуйста, введите ниже свои данные:</p>
    <form action="index2.php" method="POST">
        <fieldset>
            <label for="first_name">Имя:</label>
            <input type="text" name="first_name" size="20" value="Andrei" class="first_name"/><br />
            <label for="last_name">Фамилия:</label>
            <input type="text" name="last_name" size="20" value="Mikhalka" class="last_name"/><br />
            <label for="email">Адрес электронной почты:</label>
            <input type="text" name="email" size="50" value="Dewwerd@tut.by" class="email"/><br />
            <label for="age">Возраст:</label>
            <input type="text" name="age" size="3" value="39" class="age"/><br />
            <label for="city">Город:</label>
            <input type="text" name="city" size="25" value="Minsk" class="city"/><br />
        </fieldset>
        <br />
        <fieldset class="center">
            <input class="btn" type="submit" value="Отправить" />
            <input class="btn" type="reset" value="Очистить и начать все сначала" />
        </fieldset>
    </form>
</div>
<div id="footer"></div>
</body>
</html>