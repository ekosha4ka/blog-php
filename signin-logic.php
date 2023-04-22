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
        $fetch_user_query = "SELECT * FROM users WHERE username='$username_email' OR email=''$username_email'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);
     }
} else {
    header('location: ' . ROOT_URL . 'signin.php');
    die(); 
}