<?php
/*
ЗАДАНИЕ 1
- Создайте переменную $name и присвойте ей значение содержащее Ваше имя, например 'Иван' (обязательно в одинарных кавычках!).
- Создайте переменную $age и присвойте ей значение содержащее Ваш возраст, например 20.
*/
$name = 'Таня'; 
$age = 19;      
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Переменные и вывод</title>
</head>
<body>
    <h1>Переменные и вывод</h1>
    <p>Меня зовут: <?= $name ?></p>
    <p>Мне <?= $age ?> лет</p>
    <p>Тип переменной name: <?= gettype($name) ?></p>
    <p>Тип переменной age: <?= gettype($age) ?></p>

    <?php
    
    unset($name);
    unset($age);
    ?>
</body>
</html>
