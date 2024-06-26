<?php 

// Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
require_once 'connect.php'; 

// Создаем переменные со значениями, которые были получены с $_POST
$id = $_POST['id'] ?? null;
$body = $_POST['body'] ?? null;

// Проверяем, что все необходимые данные были получены
if ($id && $body) {
    // Делаем запрос на добавление новой строки в таблицу comments
    $query = "INSERT INTO comment (id, product_id, body) VALUES (NULL, '$id', '$body')";
    if (mysqli_query($connect, $query)) {
        // Переадресация на страницу /product.php?id=
        header('Location: /product.php?id=' . $id);
        exit();
    } else {
        // Вывод ошибки при выполнении запроса
        echo 'Ошибка при выполнении запроса: ' . mysqli_error($connect);
    }
} else {
    echo 'Ошибка: не все данные были переданы.';
}
?>