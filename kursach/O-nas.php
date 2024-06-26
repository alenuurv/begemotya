<!DOCTYPE html>
<html lang="ru">
  

<head> 
    <meta charset="UTF-8">
    <meta name="vievport" content="vidth=device-vidth, initial-scale=1.0">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="O-nas.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap" rel="stylesheet">
    
  <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
  <link rel = "shortcut icon" href = "icon.jpg">  

<title>О нас</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel = "stylesheet" href = "O-nas.css">

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
  
<div class="zagolovok2">Мы - сеть магазинов детских товаров "Бегемотя" и это наш информационный ресурс.</div>
<div class="text">Мы знаем свое дело и всесторонне развиваемся. Наша задача - помочь сделать детей счастливее.</div>
<div class="text2">Мы заботимся об экологии. Наши сотрудники активно участвуют в субботниках, а магазины работают и на прием батареек. Позже мы отправляем их на утилизацию.</div>
<div class="text3">А этот сайт создан для помощи родителям 	&#129392; </div>

<div class="zagolovok">
  Активность Бегемотика
  </div>

 <!-- карусель -->
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="1.jpg" class="d-block w-100" alt="Тут был бегемотик">
      </div>
      <div class="carousel-item">
        <img src="2.jpg" class="d-block w-100" alt="Тут был бегемотик">
      </div>
      <div class="carousel-item">
        <img src="4.jpg" class="d-block w-100" alt="Тут был бегемотик">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  </body>
  
  </html>
  