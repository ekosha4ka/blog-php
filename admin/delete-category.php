<?php 

require 'config/database.php';

if(isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM categories WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $category = mysqli_fetch_assoc($result);
    $delete_category = "DELETE FROM categories WHERE id=$id";
    $delete_category_result = mysqli_query($connection, $delete_category);
    if(mysqli_errno($connection)) {
        $_SESSION['delete-category'] = "Не можем удалить категорию";
    } else {
        $_SESSION['delete-category-success'] = "Категория '{$category['title']}'  была удалена" ;
    }
}

header('location: ' . ROOT_URL . 'admin/manage-categories.php');
die();
