
<?php
session_start();

if (!$_SESSION['user']) {
    $_SESSION['message'] = 'Чтобы присоединиться к обсуждению, необходимо войти в аккаунт!';
    header('Location: form.php');
    exit; 
}
?>

<!DOCTYPE html>
<html lang="ru"> 

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

  </head>
  
  <body>
  <div class="textstyle"> 
  <div class="textstyle"> 
    <?= $_SESSION['user']['full_name'] ?>, оставьте комментарий!<br><br>
    <form action="add_comment.php" method="POST"> 
        <!-- <label>Имя:</label><br>  -->
        <input value="<?= $_SESSION['user']['full_name'] ?>" type="hidden" name="name" required> 
        <!-- <div style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?> </div>    -->
        <label>Комментарий:</label><br> 
        <textarea name="comment" rows="5" required></textarea><br><br> 
        <input type="submit" value="Отправить комментарий"> 
    </form> 
   <br>
    <h2>Комментарии</h2> 
  
    <?php include 'view_comments.php'; ?> 
  </div> 
</div> 

</body>
</html>