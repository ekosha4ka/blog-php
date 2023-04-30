<?php 
require 'config/database.php';

if(isset($_POST['submit'])) {
    // получить обновленные данные формы
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$title || !$description) {
        $_SESSION['edit-category'] = "Неверный ввод формы";
    } else {
        // update user 
        $query = "UPDATE categories SET title='$title', description='$description' WHERE id=$id";
        $result = mysqli_query($connection, $query);
        if(mysqli_errno($connection)) {
            $_SESSION['edit-category'] = "Ошибка при обновление пользователя.";
        } else {
            $_SESSION['edit-category-success'] = "Категория $title был обновлен.";
        }
    }
}

header('location: ' . ROOT_URL . 'admin/manage-categories.php');
die();