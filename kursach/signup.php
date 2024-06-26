<?php
    session_start();
    include('connect.php');
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    // require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
 
    $email = mysqli_real_escape_string($connect,$_POST ['email']);
    $full_name = mysqli_real_escape_string($connect,$_POST ['full_name']);
    $login = mysqli_real_escape_string($connect,$_POST ['login']);
    $password = mysqli_real_escape_string($connect,$_POST ['password']);
    $md5_password = md5($password);

    $sql = "INSERT INTO users (id, full_name, login, email, password) VALUES (DEFAULT, '$full_name', '$login', '$email', '$md5_password')";
    
    $test=mysqli_query($connect, $sql);
    header('Location: form.php');
    
    header('test: '.$test);
    if ($connect) {
        die('Ошибка записи в БД' .mysqli_error($connect));
    }


  ?>

//     if ($password === $password_confirm) {

//         $path = 'uploads/' . time() . $_FILES['avatar']['name'];
//         if (!move_uploaded_file($_FILES['tmp_name'], '../' . $path)) {
//             $_SESSION['message'] = 'Ошибка при загрузке сообщения';
//             header('Location: register.php');
//         }

//         $password = md5($password);

//         mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`) VALUES (DEFAULT, '$full_name', '$login', '$email', '$password', '$path')");

//         $_SESSION['message'] = 'Регистрация прошла успешно!';
//         header('Location: form.php');


//     } else {
//         $_SESSION['message'] = 'Пароли не совпадают';
//         header('Location: register.php');
//     }

// ?>
