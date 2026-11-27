<?php
declare(strict_types=1);

// ЗАДАНИЕ 1: Анонимная функция, меняющая местами аргументы по ссылке
$swap = function (&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
};

$a = 5;
$b = 8;
$swap($a, $b);
// Проверка (выведет true, true, если всё работает)
// var_dump(5 === $b, 8 === $a); 


// ЗАДАНИЕ 2: Функция map (аналог array_map)

/**
 * Применяет колбэк-функцию к каждому элементу массива.
 * 
 * @param array $array Исходный массив
 * @param callable $callback Функция, применяемая к каждому элементу
 * @return array Измененный массив
 */
function map(array $array, callable $callback): array {
    $result = [];
    foreach ($array as $key => $value) {
        $result[$key] = $callback($value);
    }
    return $result;
}

// Вызов функции map со стрелочной функцией возведения в квадрат
$numbers = [1, 2, 3, 4, 5];
$squaredNumbers = map($numbers, fn($n) => $n ** 2);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Работа с функциями (Задания 1-2)</title>
</head>
<body>
    <h1>Задание 1: Swap</h1>
    <p>До: a = 5, b = 8</p>
    <?php $swap($a, $b); ?>
    <p>После: a = <?= $a ?>, b = <?= $b ?></p>

    <h1>Задание 2: Map</h1>
    <p>Исходный массив: <?= implode(', ', $numbers) ?></p>
    <p>Возведенный в квадрат: <?= implode(', ', $squaredNumbers) ?></p>
</body>
</html>
