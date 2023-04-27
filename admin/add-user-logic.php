<?php
require 'config/database.php';


// получить данные формы пользователя, если кнопка была нажата
if(isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);
    $avatar = $_FILES['avatar'];

    // проверка входных данных
    if(!$firstname) {
        $_SESSION['add-user'] = "Пожалуйста, введите Ваше имя.";
    } elseif(!$lastname) {
        $_SESSION['add-user'] = "Пожалуйста, введите Ваше фамилию.";
    
    } elseif(!$username) {
        $_SESSION['add-user'] = "Пожалуйста, введите Ваш имя пользователя.";

    }elseif(!$email) {
        $_SESSION['add-user'] = "Пожалуйста, введите Вашу почту.";

    } elseif(strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['add-user'] = "Пароль должен быть больше 8 символов.";

    } elseif(!$avatar['name']) {
        $_SESSION['add-user'] = "Пожалуйста, добавьте Ваш аватар.";
    } else {
        // Если пароли не совпадают выводит данное поле
        if($createpassword !== $confirmpassword) {
            $_SESSION['add-user'] = "Пароли не совпадают.";
        } else {
            // hash password
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

            // проверка, есть ли имя пользователя или почта в базе данных
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result) > 0) {
                $_SESSION['add-user'] = "Имя пользователя или почта уже существует.";
            } else {
                // работа над аватаром
                $time = time(); // сделает каждое изображение уникальным, используя текущую временную метку 
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = 'images/' . $avatar_name;

                // Является ли файл изображением 
                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extention = explode('.', $avatar_name);
                $extention = end($extention);
                if(in_array($extention, $allowed_files)) {
                    //Проверка, что изображение не слишком большое 1mb
                    if($avatar['size'] < 1000000) {
                        // upload avatar
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    } else {
                        $_SESSION['add-user'] = 'Файл является слишком большим.';
                    }
               } else {
                    $_SESSION['add-user'] = 'Файл не является изображением формата png, jpg, jpeg.';
                }
            }
        }
    }
    
    // возвращение на регистрацию если была какая-то проблема.
    if(isset($_SESSION['add-user'])) {
        $_SESSION['add-user_data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/add-user.php');
        die();
    } else {
        // Добавление нового пользователя в список пользователей.
        $insert_user_query = "INSERT INTO users SET firstname='$firstname', lastname='$lastname', username='$username', email='$email', password='$hashed_password', avatar='$avatar_name', is_admin='$is_admin'";
        $insert_user_result = mysqli_query($connection, $insert_user_query);
        if(!mysqli_errno($connection)) {
            // Переход на страницу с успехом
            $_SESSION['add-user_success'] = "Регистрация пользователя $firstname $lastname успешна!";
            header('location: ' . ROOT_URL . 'admin/manage-users.php');
            die();
        }
    }

} else {
     //если кнопка не была нажата, вернитесь к регистрации
    header('location: ' . ROOT_URL . 'admin/add-user.php');
     die();
}
