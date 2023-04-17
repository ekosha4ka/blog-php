<?php

require 'config/database.php';

// получить данные формы регистрации, если была нажата кнопка регистрации
if(isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];

    // проверка входных данных
    if(!$firstname) {
        $_SESSION['signup'] = "Пожалуйста, введите Ваше имя.";
    } elseif(!$lastname) {
        $_SESSION['signup'] = "Пожалуйста, введите Ваше фамилию.";
    
    } elseif(!$username) {
        $_SESSION['signup'] = "Пожалуйста, введите Ваш имя пользователя.";

    }elseif(!$email) {
        $_SESSION['signup'] = "Пожалуйста, введите Вашу почту.";

    } elseif(strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['signup'] = "Пароль должен быть больше 8 символов.";

    } elseif(!$avatar['name']) {
        $_SESSION['signup'] = "Пожалуйста, добавьте Ваш аватар.";
    } else {
        // Если пароли не совпадают выводит данное поле
        if($createpassword !== $confirmpassword) {
            $_SESSION['signup'] = "Пароли не совпадают.";
        } else {
            // hash password
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

            // проверка, есть ли имя пользователя или почта в базе данных
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result > 0)) {
                $_SESSION['signup'] = "Имя пользователя или почта уже существует.";
            } else {
                // работа над аватаром
                
            }
        }

    }

} else {
     //если кнопка не была нажата, вернитесь к регистрации
     header('location: ' . ROOT_URL . 'signup.php');
     die();
}
