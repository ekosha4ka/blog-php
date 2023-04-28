<?php

require 'config/database.php';

if(isset($_POST['submit'])) {
    // Получение данные формы
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


    if(!$title) {
        $_SESSION['add-category'] = "Добавьте название публикации";
    } elseif(!$description) {
        $_SESSION['add-category'] = "Добавьте описание публикации";
    }

    //перенаправление обратно на страницу категории с данными формы, если были введены неверные данные
    if(isset($_SESSION['add-category'])) {
        $_SESSION['add-category-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/add-category.php');
        die();
    } else {
        // вставить категорию в базу данных
        $query = "INSERT INTO categories (title, description) VALUES ('$title', '$description')";
        $result = mysqli_query($connection, $query);
        if(mysqli_errno($connection)) {
            $_SESSION['add-category'] = "Не удалось добавить категорию";
            header('location: ' . ROOT_URL . 'admin/add-category.php');
            die();
        } else {
            $_SESSION['add-category-success'] = "Категория $title был успешна добавлен";
            header('location: ' . ROOT_URL . 'admin/manage-categories.php');
            die();
        }
    }
}