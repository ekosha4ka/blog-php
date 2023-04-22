<?php
require_once 'config/database.php';

if(isset($_POST['submit'])) {
    // get form data
     $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     
     if(!$username_email) {
        $_SESSION['signin'] = "Имя пользователя или почта не были введены.";
     } elseif(!$password) {
        $_SESSION['signin'] = "Введите пароль";
     } else {
        // Получаем данные с базы данных
        $fetch_user_query = "SELECT * FROM users WHERE username='$username_email' OR email='$username_email'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);

        if(mysqli_num_rows($fetch_user_result) == 1) {
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];
            // Сравнение паролей баз данных и введенным пользователям 
            if(password_verify($password, $db_password)) {
                $_SESSION['user-id'] = $user_record['id'];
                // Проверка, является ли пользователь админом
                if($user_record['is_admin'] == 1) {
                    $_SESSION['user_is_admin'] = true;
                }

                // Вход пользователя
                header('location: ' . ROOT_URL . 'admin/');
            } else {
                $_SESSION['signin'] = "Пароль не верный.";
            }
        } else {
            $_SESSION['signin'] = "Пользователь не был найден.";
        }
     }

     if(isset($_SESSION['signin'])) {
        $_SESSION['signin-data'] = $_POST;
        header('location: ' . ROOT_URL . 'signin.php');
        die();
     }
} else {
    header('location: ' . ROOT_URL . 'signin.php');
    die(); 
}