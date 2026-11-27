<?php
declare(strict_types=1);

/**
 * Функция для вывода меню на основе массива
 * 
 * @param array $menu Массив с пунктами меню (ключи 'link' и 'href')
 * @return void
 */
function renderMenu(array $menu): void {
    echo '<ul class="menu">';
    foreach ($menu as $item) {
        // Экранируем спецсимволы для безопасности (хороший тон)
        $link = htmlspecialchars($item['link']);
        $href = htmlspecialchars($item['href']);
        echo "<li><a href=\"{$href}\">{$link}</a></li>";
    }
    echo '</ul>';
}

/*
ЗАДАЧА
Отрисовать навигационное меню на странице,
используя массив в качестве структуры меню

ЗАДАНИЕ 1
- Создайте массив $leftMenu элементами которого будут являться ассоциативные массивы с ключами 'link' и 'href'
- Заполните массив соблюдая следующие условия:
  - Значением элемента с ключом 'link' является один из пунктов меню: 'Домой', 'О нас', 'Контакты', 'Таблица умножения', 'Калькулятор'
  - Значением элемента с ключом 'href' будет имя файла, на который указывает ссылка: index.php, about.php, contact.php, table.php, calc.php
*/

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
        .menu li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Меню</h1>
    <nav>
        <?php
        /*
        ЗАДАНИЕ 2
        - Отрисуйте вертикальное меню с помощью цикла foreach,
          передав ему в качестве аргумента массив $leftMenu.
        */
        renderMenu($leftMenu);
        ?>
    </nav>
</body>
</html>
