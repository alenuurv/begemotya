<?php 

// Добавление нового продукта

// Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
require_once 'connect.php'; 

// Создаем переменные со значениями, которые были получены с $_POST
$title = $_POST['title'] ?? null;
$age = $_POST['age'] ?? null;
$description = $_POST['description'] ?? null;
$image = $_POST['image'] ?? null;

// Проверяем, что все необходимые данные были получены
if ($age && $title && $description && $image) {
    // Экранируем специальные символы в строках для использования в SQL-запросе
    $title = mysqli_real_escape_string($connect, $title);
    $age = mysqli_real_escape_string($connect, $age);
    $description = mysqli_real_escape_string($connect, $description);
    $image = mysqli_real_escape_string($connect, $image);
    
    // Делаем запрос на добавление новой строки в таблицу products
    $query = "INSERT INTO toys (title, image, description, age) VALUES ( '$title', '$image', '$description', '$age')";

    if (mysqli_query($connect, $query)) {
        // Переадресация на главную страницу
        header('Location: /');
        exit();
    } else {
        // Вывод ошибки при выполнении запроса
        echo 'Ошибка при выполнении запроса: ' . mysqli_error($connect);
    }
} else {
    echo 'Ошибка: не все данные были переданы.';
}
?>