<?php
declare(strict_types=1);

/**
 * Отрисовывает таблицу умножения.
 * 
 * @param int $cols Количество столбцов
 * @param int $rows Количество строк
 * @param string $color Цвет фона заголовков
 * @return int Возвращает текущее количество вызовов функции
 */
function getTable(int $cols = 10, int $rows = 10, string $color = 'yellow'): int {
    static $count = 0;
    $count++;

    echo "<table>";
    echo "<tr><th> </th>";
    for ($c = 1; $c <= $cols; $c++) {
        echo "<th style='background-color: {$color};'>{$c}</th>";
    }
    echo "</tr>";

    for ($r = 1; $r <= $rows; $r++) {
        echo "<tr>";
        echo "<th style='background-color: {$color};'>{$r}</th>"; 
        for ($c = 1; $c <= $cols; $c++) {
            echo "<td>" . ($c * $r) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    
    return $count;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица умножения</title>
    <style>
        table {
            border: 2px solid black;
            border-collapse: collapse;
            margin-bottom: 10px;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
        }
        th {
            font-style: italic;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Таблица умножения (getTable)</h1>
    
    <?php
    /*
    ЗАДАНИЕ 3
    - Отрисуйте таблицу умножения вызывая функцию getTable() с различными параметрами
    - Создайте локальную статическую переменную $count для подсчета числа вызовов функции getTable()
    - Функция getTable() должна возвращать значение переменной $count
    */
    $totalCount = getTable(6, 6, 'red');
    $totalCount = getTable();
    $totalCount = getTable(8, 10);
    $totalCount = getTable(5);

    /*
    ЗАДАНИЕ 5
    - Используя статическую переменную $count выведите общее число вызовов функции getTable()
    */
    echo "<p>Таблица была отрисована {$totalCount} раза</p>";
    ?>
</body>
</html>
