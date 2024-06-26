<?php  
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require_once 'connect.php';  

$products = mysqli_query($connect, "SELECT * FROM toys"); 

if ($products) { 
   $products = mysqli_fetch_all($products, MYSQLI_ASSOC); 
?>

<!DOCTYPE html>
<html lang="ru">
  
<head> 
    <meta charset="UTF-8">
    <meta name="vievport" content="vidth=device-vidth, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <!-- <link rel = "stylesheet" href = "kursach.css"> -->
  
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

<link rel = "stylesheet" href = "form.css">

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

<title>Products</title> 
    <style> 
        th, td { 
            padding: 30px; 
            font-family: 'Neucha', cursive;
        } 

        th { 
            background: #eec600;; 
            color: #fff; 
        } 

        td { 
            background: #F2E5C2;; 
        } 

    </style> 

</head>

<body> 

<form action="create.php" method="post"> 
    <p>Название</p> 
    <input type="text" name="title"> 
    <p>Описание</p> 
    <textarea name="description"></textarea>
    <p>Возраст</p> 
    <select name="age">
        <option value="1">До года</option>
        <option value="2">1-2 года</option>
        <option value="3">3-6 лет</option>
        <option value="4">6 лет и старше</option>
        </select>  
    <p>Фото</p> 
    <input type="text" name="image"> <br> <br> 
    <button type="submit">Отправить</button> 
</form> 

<table> 
    <tr> 
        <th>Название</th> 
        <th>Возраст</th> 
        <th>Описание</th> 
        <th>Фото</th> 
        <th></th>
        <th></th>
    </tr> 
    <?php foreach ($products as $product): ?> 
        <tr> 
            <td><?= $product['title'] ?></td>
            <td><?= $product['age'] ?></td> 
            <td><?= $product['description'] ?></td> 
            <td><?= $product['image'] ?></td>    
            <td><a href="update.php?id=<?= $product['id'] ?>">Редактировать</a></td> 
            <td><a style="color: red;" href="delete.php?id=<?= $product['id'] ?>">Удалить</a></td> 
        </tr> 
    <?php endforeach; ?> 
</table> 

</body> 
</html> 

<?php
} 
else { 
    echo "Ошибка при выполнении запроса: " . mysqli_error($connect); 
} 
?>