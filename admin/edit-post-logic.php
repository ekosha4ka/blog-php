<?php 

require 'config/database.php';

if(isset($_POST['submit'])) {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $previous_thumbnail_name = filter_var($_POST['previous_thumbnail_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);
    $is_featured = filter_var($_POST['is_featured'], FILTER_SANITIZE_NUMBER_INT);
    $thumbnail = $_FILES['thumbnail'];

    $is_featured = $is_featured == 1 ?: 0;
}


if(!$title) {
    $_SESSION['edit-post'] = "Введите название поста"; 
} elseif(!$category_id) {
    $_SESSION['edit-post'] = "Выберите категорию поста";
} elseif (!$body) {
    $_SESSION['edit-post'] = "Введите контент поста";
} elseif (!$thumbnail['name']) {
    $_SESSION['edit-post'] = "Выберите картинку публикации";
} else {
    // удалить и добавить новую картинку
    if($thumbnail['name']) {
        $previous_thumbnail_path = '../images/' . $previous_thumbnail_name;
        if ($previous_thumbnail_path) {
            unlink($previous_thumbnail_path); 
        }
    }
        // Работа с новой картинкой
        // меняем название картинки
    $time = time();
    $thumbnail_name = $time . $thumbnail['name'];
    $thumbnail_tmp_name = $thumbnail['tmp_name'];
    $thumbnail_destination_path = '../images/' . $thumbnail_name;


    // make sure file is an image
    $allowed_files = ['phg', 'jpg', 'jpeg'];
    $extention = explode('.', $thumbnail_name);
    $extention = end($extention);
    if(in_array($extention, $allowed_files)) {
        // make sure image is not too big 2mb+
        if($thumbnail['size'] < 2000000) {
            // upload thumbnail
            move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);
        } else {
            $_SESSION['add-post'] = "Файл является слишком большим";
        }
    } else { 
        $_SESSION['edit-post'] = "Файл не является png, jpg, jpeg";
    }

    if($_SESSION['edit-post']) {
        header('location: ' . ROOT_URL . 'admin/');
        die();
    } else {
        if($is_featured == 1) {
            $zero_all_is_featured_query = "UPDATE posts SET is_featured = 0"; 
            $zero_all_is_featured_result = mysqli_query($connection, $zero_all_is_featured_query);
        }

        $thumbnail_to_insert = $thumbnail_name ?? $previous_thumbnail_name;

        $query_update = "UPDATE posts SET title='$title', body='$body', thumbnail='$thumbnail_to_insert', category_id=$category_id, is_featured=$is_featured WHERE id=$id LIMIT 1";
        $result = mysqli_query($connection, $query_update);
    }

    if(!mysqli_errno($connection)) {
        $_SESSION['edit-post-success'] = "Пост успешно обновлен!";
        header('location: ' . ROOT_URL . 'admin/index.php');
        die();
    }
}