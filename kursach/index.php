<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
  
<head> 
    <meta charset="UTF-8">
    <meta name="vievport" content="vidth=device-vidth, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <link rel = "stylesheet" href = "kursach.css">
  
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

<link rel = "shortcut icon" href = "ico.png">

<link rel = "stylesheet" href = "kursach.css">

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

<div class="zagolovok"> 
  Детство - проходящая пора. В руках родителей и их помощников возможность подарить ребенку счастливое детство. 
  Помогая родителям в этом нелегком деле, мы оберегаем возможность детей развиваться, сохранять здоровье и радоваться каждому моменту жизни.
  А наш информационный ресурс об интерактивных игрушках поможет выбрать то, что подходит именно Вам!
</div>
<div class="podzagolovok">
  Что такое игрушки? 
  Зачем они ребенку? Какие у них особенности? 
  Как выбирать их в магазине? 
  – На эти вопросы мы и постараемся ответить.
</div>

<div class="row row-cols-1 row-cols-md-2 g-2">
  <div class="col">
    <div class="card">
      <img src="card1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <!-- <h5 class="card-title">Заголовок карточки</h5> -->
        <p class="card-text">История игрушек: От простых предметов до сложных цифровых разработок</p>
        <a href="statia1.php" class="btn btn-primary">Читать...</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="card2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <!-- <h5 class="card-title">Заголовок карточки</h5> -->
        <p class="card-text">Как выбрать интерактивную игрушку?</p>
        <a href="statia2.php" class="btn btn-primary">Читать...</a>
      </div>
    </div>
  </div>

</body>

</html>
