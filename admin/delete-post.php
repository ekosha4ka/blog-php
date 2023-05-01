<?php 

require 'config/database.php';

if(isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $post = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) == 1) {
        $thumbnail_name = $post['thumbnail'];
        $thumbnail_path = '../images/' . $thumbnail_name;
        if($thumbnail_path) {
            unlink($thumbnail_path);
        }
    }
    $delete_post = "DELETE FROM posts WHERE id=$id";
    $delete_post_result = mysqli_query($connection, $delete_post);
    if(mysqli_errno($connection)) {
        $_SESSION['delete-post'] = "Не можем удалить пост";
    } else {
        $_SESSION['delete-post-success'] = "Пост {$post['title']} был удален" ;
    }
}

header('location: ' . ROOT_URL . 'admin/');
die();
