<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

     require_once 'connect.php';
   
    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $product_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $product = mysqli_query($connect, "SELECT * FROM `toys` WHERE `id` = '$product_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $product = mysqli_fetch_assoc($product);

    /*
     * Делаем выборку всех строк комментариев с полученным ID продукта выше
     */

    $comments = mysqli_query($connect, "SELECT * FROM `comment` WHERE `product_id` = '$product_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     */

    $comments = mysqli_fetch_all($comments);
    ?>

<!doctype html>
<html lang="ru">
<head> 
    <meta charset="UTF-8">
    <meta name="vievport" content="vidth=device-vidth, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link rel="stylesheet" type="text/css" href="categories.css"> -->
  
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
<link rel = "stylesheet" href = "product.css">
</head>

<body>

<div class="header">
    <div class="logo">
      <img src="logo.png">
    </div>

<!-- шапка -->
<nav role="navigation" class="primary-navigation">

  <ul>
    <li><a href="index.php">Главная</a></li>
    <li><a href="form.php">Профиль</a></li>
    <li><a href="categories.php">Игрушки</a></li>
    <li><a href="O-nas.php">О нас</a></li>
    <li><a href="obsuzhdenie.php">Обсуждение</a></li>
    <?php if($_SESSION['user']['role'] == 'admin') { ?>
    <li><a href="products.php">Добавление продукта</a></li>
    <?php } ?>
  </ul>
</nav>
</div>

    <p class="zagolovok"><?= $product['title'] ?></p>
    <div class="image"><img src="<?= $product['image'] ?>"/></div>
    <p class="podzagolovok"><?= $product['description'] ?></p>

    <hr>

<!-- 

<div class="podzagolovok">
<p class="zagolovok2">Оставьте комментарий!</p>
<form action="create_comment.php" method="post">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <textarea name="body"></textarea> <br><br>
    <button type="submit" name="add_comment">Add comment</button>
</form>

<hr>


    <h3>Комментарии</h3>
    <ul>
        <?php

            /*
             * Перебираем массив с комментариями и выводим
             */

            foreach ($comments as $comment) {
            ?>
                <li><?= $comment[2] ?></li>
            <?php
            }
        ?>
    </ul>
    </div> -->
</body>
</html> 