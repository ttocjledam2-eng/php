<?php
declare(strict_types=1);

/**
 * Генерирует HTML-таблицу умножения заданного размера.
 * 
 * @param int $cols Количество столбцов
 * @param int $rows Количество строк
 * @return string HTML-код таблицы
 */
function generateMultiplicationTable(int $cols, int $rows): string {
    $html = "<table>";
    
    // Первая строка (заголовки)
    $html .= "<tr><th> </th>";
    for ($c = 1; $c <= $cols; $c++) {
        $html .= "<th>{$c}</th>";
    }
    $html .= "</tr>";

    // Остальные строки
    for ($r = 1; $r <= $rows; $r++) {
        $html .= "<tr><th>{$r}</th>";
        for ($c = 1; $c <= $cols; $c++) {
            $html .= "<td>" . ($c * $r) . "</td>";
        }
        $html .= "</tr>";
    }
    
    $html .= "</table>";
    return $html;
}

/*
ЗАДАНИЕ 1
- Создайте две целочисленные переменные $cols и $rows
- Присвойте созданным переменным произвольные значения в диапазоне от 1 до 10
*/
$cols = 10;
$rows = 10;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица умножения</title>
    <style>
        table { border: 2px solid black; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid black; }
        th { background-color: yellow; font-style: italic; text-align: center; }
    </style>
</head>
<body>
    <h1>Таблица умножения</h1>
    <?php
    /*
    ЗАДАНИЕ 2 и 3
    (Комментарии опущены для краткости, они есть в самом файле)
    */
    echo generateMultiplicationTable($cols, $rows);
    ?>
</body>
</html>
