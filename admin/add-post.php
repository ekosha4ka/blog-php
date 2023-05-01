<?php

include 'partials/header.php';


// Вывод всех категории из базы данных 
$query = "SELECT * FROM categories";
$categories = mysqli_query($connection, $query);
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Добавить публикацию</h2>
        <?php if(isset($_SESSION['add-post'])) : ?>
            <div class="alert__message error">
                <p>
                    <?= $_SESSION['add-post'];
                    unset($_SESSION['add-post']);
                    ?>
                </p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>admin/add-post-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="title" placeholder="Название поста">
            <select name="category_id">
                <?php while($category = mysqli_fetch_assoc($categories)) : ?>
                    <option value="<?= $category['id'] ?>" ><?= $category['title'] ?></option>
                <?php endwhile ?>
            </select>
            <textarea rows="10" name="body" placeholder="Описание"></textarea>
            <?php if(isset($_SESSION['user_is_admin'])) : ?>
                <div class="form__control inline">
                    <input type="checkbox" name="is_featured" id="is_featured" value="1" checked>
                    <label for="is_featured">Рекомендуемые</label>
                </div>
            <?php endif ?>
            <div class="form__control">
                <label for="thumbnail">Добавить фото</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </div>
            <button type="submit" name="submit" class="btn">Добавить пост</button>
        </form>
    </div>
</section>

<?php

include '../partials/footer.php';

?>