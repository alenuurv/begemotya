<?php

// Обновление информации о продукте

// Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
require_once 'connect.php';

// Создаем переменные со значениями, которые были получены с $_POST
$id = ($_SERVER['REQUEST_METHOD'] == 'POST' ? $_POST['id'] : $_GET['id']) ?? null;

// Проверяем, что все необходимые данные были переданы
if ($id) {
    // Экранируем специальные символы в строках для использования в SQL-запросе
    $id = mysqli_real_escape_string($connect, $id);
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = mysqli_real_escape_string($connect, $_POST['title'] ?? null);
        $age = mysqli_real_escape_string($connect, $_POST['age'] ?? null);
        $description = mysqli_real_escape_string($connect, $_POST['description'] ?? null);
        $image = mysqli_real_escape_string($connect, $_POST['image'] ?? null);
        // Делаем запрос на изменение строки в таблице toys
        $query = "UPDATE toys SET title = '$title', image = '$image', description = '$description', age = '$age' WHERE toys.id = '$id'";
        if (mysqli_query($connect, $query)) {
            // Переадресация на главную страницу
            header('Location: /products.php');
        } else {
            // Вывод ошибки при выполнении запроса
            echo 'Ошибка при выполнении запроса: ' . mysqli_error($connect);
        }
        exit();
    } else if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $product = mysqli_query($connect, "SELECT * FROM toys WHERE id=".mysqli_real_escape_string($connect, $id));
        $product = mysqli_fetch_all($product, MYSQLI_ASSOC)[0];
    }
} else {
    echo 'Ошибка: не все данные были переданы.';
}


?>

<!doctype html>
<html lang="en">
<head>
<head>
<meta charset="UTF-8">
    <meta name="vievport" content="vidth=device-vidth, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="categories.css">
  
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap" rel="stylesheet">
    
  <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
  <link rel = "shortcut icon" href = "icon.jpg">  

  
<title>Бегемотя</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel = "stylesheet" href = "commsstyle.css">

<link rel = "stylesheet" href = "form.css">
   
</head>

<body>
<div class="header">
    <div class="logo">
      <img src="logo.png">
    </div>
</head>

<body>

    <!-- шапка -->
<nav role="navigation" class="primary-navigation">
  
  <ul>
    <li><a href="index.php">Главная</a></li>
    <li><a href="form.php">Профиль</a></li>
    <li><a href="categories.php">Игрушки</a></li>
    <li><a href="O-nas.html">О нас</a></li>
    <li><a href="obsuzhdenie.php">Обсуждение</a></li>
    <?php if($_SESSION['user']['role'] != 'admin') { ?>
    <li><a href="products.php">Добавление продукта</a></li>
    <?php } ?>
  </ul>
</nav>
    <br>
    <br>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <input type="text" name="title" value="<?= $product['title'] ?>">
        <p>Описание</p>
        <textarea name="description"><?= $product['description'] ?></textarea>
        <p>Возраст</p> 
    <select name="age">
        <option value="1" selected="<?=($product['age'] == '1') ?>">До года</option>
        <option value="2" selected="<?=($product['age'] == '2') ?>">1-2 года</option>
        <option value="3" selected="<?=($product['age'] == '3') ?>">3-6 лет</option>
        <option value="4" selected="<?=($product['age'] == '4') ?>">6 лет и старше</option>
        </select>
        <p>Фото</p>
        <input type="text" name="image" value="<?= $product['image'] ?>"> <br> <br>
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>