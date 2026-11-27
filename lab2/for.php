<?php
declare(strict_types=1);

/**
 * Генерирует HTML-строку с нечетными числами от $start до $end в столбик.
 * 
 * @param int $start Начальное число
 * @param int $end Конечное число
 * @return string HTML-код с числами
 */
function generateOddNumbersColumn(int $start, int $end): string {
    $result = '';
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 !== 0) {
            $result .= $i . "<br>";
        }
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
    <title>Цикл for</title>
</head>
<body>
    <h1>Цикл for</h1>
    <?php
    /*
    ЗАДАНИЕ
    - Используя цикл for выведите в столбик Нечётные числа от 1 до 50
    */
    echo generateOddNumbersColumn(1, 50);
    ?>
</body>
</html>
