<?php 

require 'config/database.php';

if(isset($_POST['submit'])) {
    $author_id = $_SESSION['user-id'];
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = filter_var($_POST['category_id'], FILTER_SANITIZE_NUMBER_INT);
    $is_featured = filter_var($_POST['is_featured'], FILTER_SANITIZE_NUMBER_INT);
    $thumbnail = $_FILES['thumbnail'];

    // set is_feathured to 0 if unchecked
    $is_featured = $is_featured == 1 ?: 0;

    // validate from data 
    if(!$title) {
        $_SESSION['add-post'] = "Введите название поста"; 
    } elseif(!$category_id) {
        $_SESSION['add-post'] = "Выберите категорию поста";
    } elseif (!$body) {
        $_SESSION['add-post'] = "Введите контент поста";
    } elseif (!$thumbnail['name']) {
        $_SESSION['add-post'] = "Выберите картинку публикации";
    } else {
        // WORK ON THUMBNAIL
        // rename the image
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
            $_SESSION['add-post'] = "Файл не является png, jpg, jpeg";
        }
    }


    // redirect back 
    if($_SESSION['add-post']) {
        $_SESSION['add-post-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/add-post.php');
        die();
    } else {
        if($is_featured == 1) {
            $zero_all_is_featured_query = "UPDATE posts SET is_featured = 0"; 
            $zero_all_is_featured_result = mysqli_query($connection, $zero_all_is_featured_query);
        }
    }
    $query = "INSERT INTO posts (title, body, thumbnail, category_id, author_id, is_featured) VALUES ('$title', '$body', '$thumbnail_name', $category_id, $author_id, $is_featured)";
    $result = mysqli_query($connection, $query);

    if(!mysqli_errno($connection)) {
        $_SESSION['add-post-success'] = "Добавление нового поста успешна!";
        header('location: ' . ROOT_URL . 'admin/index.php');
        die();
    }
}