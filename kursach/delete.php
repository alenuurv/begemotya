<?php

// Удаление продукта

// Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
require_once 'connect.php';

// Получаем ID продукта из адресной строки
$id = $_GET['id'] ?? null;

// Проверяем, что ID продукта был передан
if ($id) {
    // Экранируем специальные символы в строке для использования в SQL-запросе
    $id = mysqli_real_escape_string($connect, $id);

    // Делаем запрос на удаление строки из таблицы toys
    $query = "DELETE FROM toys WHERE toys.id = '$id'";
    if (mysqli_query($connect, $query)) {
        // Переадресация на главную страницу
        header('Location: /products.php');
        exit();
    } else {
        // Вывод ошибки при выполнении запроса
        echo 'Ошибка при выполнении запроса: ' . mysqli_error($connect);
    }
} else {
    echo 'Ошибка: ID продукта не был передан.';
}
?>