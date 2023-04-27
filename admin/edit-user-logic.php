<?php 
require 'config/database.php';

if(isset($_POST['submit'])) {
    // получить обновленные данные формы
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

    if(!$firstname || $lastname) {
        $_SESSION['edit-user'] = "Неверный ввод формы";
    } else {
        // update user 
        $query = "UPDATE users SET firstname='$firstname', lastname='$lastname', is_admin=$is_admin WHERE id=$id LIMIT 1";
        $result = mysqli_query($connection, $query);
        if(mysqli_errno($connection)) {
            $_SESSION['edit-user'] = "Ошибка при обновление пользователя.";
        } else {
            $_SESSION['edit-user-success'] = "Пользователь $firstname $lastname был обновлен.";
        }
    }
}

header('location: ' . ROOT_URL . 'admin/manage-users.php');
die();