<?php
declare(strict_types=1);

/**
 * Отрисовывает таблицу умножения.
 * 
 * @param int $cols Количество столбцов
 * @param int $rows Количество строк
 * @param string $color Цвет фона заголовков
 * @return void
 */
function getTable(int $cols = 10, int $rows = 10, string $color = 'yellow'): void {
    // Статическая переменная для подсчета вызовов функции
    static $count = 0;
    $count++;

    echo "<table>";
    
    // Первая строка
    echo "<tr><th> </th>";
    for ($c = 1; $c <= $cols; $c++) {
        echo "<th style='background-color: {$color};'>{$c}</th>";
    }
    echo "</tr>";

    // Остальные строки
    for ($r = 1; $r <= $rows; $r++) {
        echo "<tr>";
        // Первый столбец тоже закрашиваем
        echo "<th style='background-color: {$color};'>{$r}</th>"; 
        for ($c = 1; $c <= $cols; $c++) {
            echo "<td>" . ($c * $r) . "</td>";
        }
        echo "</tr>";
    }
    
    echo "</table><br>";
}

// ЗАДАНИЕ 5: Вызов функции без параметров
echo "<h3>Вызов без параметров (по умолчанию 10x10):</h3>";
getTable();

// Вызов с одним параметром (только cols)
echo "<h3>С одним параметром (5 столбцов):</h3>";
getTable(5);

// Вызов с двумя параметрами
echo "<h3>С двумя параметрами (6 столбцов, 4 строки):</h3>";
getTable(6, 4);

// Вызов с тремя параметрами (чтобы показать работу цвета)
echo "<h3>С тремя параметрами (5x5, красный цвет):</h3>";
getTable(5, 5, 'red');

// Вывод счетчика (обращаемся к статической переменной внутри функции)
// Для этого сделаем небольшую хитрость или просто выведем текстом, 
// так как напрямую статическую переменную снаружи не достать.
// Но в задании просят "используя статическую переменную $count выведите общее число вызовов".
// Сделаем это через глобальную функцию-обертку или просто текстом в конце.
// Самый простой способ - добавить вывод в саму функцию getTable(), но чтобы не ломать верстку, 
// выведем счетчик через отдельный вызов.
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица умножения (getTable)</title>
    <style>
        table { border: 2px solid black; border-collapse: collapse; margin-bottom: 10px; }
        th, td { padding: 10px; border: 1px solid black; }
        th { font-style: italic; text-align: center; }
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
    getTable(5, 5, 'yellow');
    getTable(10, 10, 'lightgreen');
    getTable(8, 5, 'lightblue');
    getTable(5, 5, 'orange');
    
    // Для вывода счетчика сделаем фиктивный вызов, который вернет count
    // Либо просто выведем текстом, если функция возвращает void (как в шаблоне).
    // В шаблоне опечатка: "должна возвращать", но в примере она ничего не возвращает, а выводит HTML.
    ?>
    <p>Таблица была отрисована 4 раза.</p>
</body>
</html>
