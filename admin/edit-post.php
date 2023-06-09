<?php

include  'partials/header.php';

// Вывод всех категории из базы данных 
$query = "SELECT * FROM categories";
$categories = mysqli_query($connection, $query);

if (isset($_GET['id'])) {
    
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $post = mysqli_fetch_assoc($result);
} else {
    header('location: ' . ROOT_URL . 'admin/index.php');
    die();
}

?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Редактировать пост</h2>
        
        <form action="<?= ROOT_URL ?>admin/edit-post-logic.php" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="id"  value="<?= $post['id']?>">
            <input type="hidden" name="previous_thumbnail_name"  value="<?= $post['thumbnail']?>">
            <input type="text" name="title" placeholder="Название поста" value="<?= $post['title']?>">
            <select name="category">
                <?php while($category = mysqli_fetch_assoc($categories)) : ?>
                    <option value="<?= $category['id'] ?>" ><?= $category['title'] ?></option>
                <?php endwhile ?>
            </select>
            <textarea rows="10" name="body" placeholder="Описание"><?= $post['body']?></textarea>
            
            <div class="form__control">
                <label for="thumbnail">Редактировать фото</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </div>
            <button type="submit" name="submit" class="btn">Редактировать пост</button>
        </form>
    </div>
</section>

<?php

include '../partials/footer.php';

?>
<?= var_dump($_GET) ?>