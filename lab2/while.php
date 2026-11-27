<?php
declare(strict_types=1);

/**
 * Выводит символы переданной строки в столбик с помощью цикла while.
 * 
 * @param string $text Строка для вывода
 * @return string HTML-код с символами
 */
function printStringColumnWhile(string $text): string {
    $result = '';
    $i = 0;
    $length = mb_strlen($text);
    
    while ($i < $length) {
        $result .= mb_substr($text, $i, 1) . "<br>";
        $i++;
    }
    return $result;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цикл while</title>
</head>
<body>
    <h1>Цикл while</h1>
    <?php
    /*
    ЗАДАНИЕ
    - Создайте переменную $var и присвойте ей строковое значение 'ПРИВЕТ'
    - Используя цикл while выведите значение переменной $var в столбик так, 
      чтобы на выходе в браузере получилось:
      П
      Р
      И
      В
      Е
      Т
    */
    $var = 'ПРИВЕТ';
    echo printStringColumnWhile($var);
    ?>
</body>
</html>
