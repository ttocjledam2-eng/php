<?php
declare(strict_types=1);

/**
 * Генерирует HTML-меню на основе массива.
 * 
 * @param array $menu Массив с пунктами меню (ключи 'link' и 'href')
 * @param bool $vertical Флаг вертикального отображения (true - вертикально, false - горизонтально)
 * @return void
 */
function getMenu(array $menu, bool $vertical = true): void {
    $class = $vertical ? 'menu' : 'menu horizontal';
    echo "<ul class='{$class}'>";
    foreach ($menu as $item) {
        $link = htmlspecialchars($item['link']);
        $href = htmlspecialchars($item['href']);
        echo "<li><a href=\"{$href}\">{$link}</a></li>";
    }
    echo "</ul>";
}

// Массив с данными меню
$leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'about.php'],
    ['link' => 'Контакты', 'href' => 'contact.php'],
    ['link' => 'Таблица умножения', 'href' => 'table.php'],
    ['link' => 'Калькулятор', 'href' => 'calc.php']
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню</title>
    <style>
        .menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        .horizontal li {
            display: inline;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Меню</h1>
    
    <h2>Вертикальное меню (по умолчанию)</h2>
    <?php
    /*
    ЗАДАНИЕ 3
    - Отрисуйте вертикальное меню вызывая функцию getMenu() с одним параметром
    */
    getMenu($leftMenu);
    ?>
    
    <h2>Горизонтальное меню (параметр false)</h2>
    <?php
    /*
    ЗАДАНИЕ 4
    - Отрисуйте горизонтальное меню вызывая функцию getMenu() со вторым параметром равным false
    */
    getMenu($leftMenu, false);
    ?>
</body>
</html>
