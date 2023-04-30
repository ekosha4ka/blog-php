<?php

include 'partials/header.php';
if (isset($_GET['id'])) {
    
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM categories WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $category= mysqli_fetch_assoc($result);
} 
?>

<section class="form__section">
    <div class="container form__section-container"> 
        <h2>Редактировать категорию</h2>
        <div class="alert__message error">
            <p>This is an error message</p>
        </div>
        <form action="<?= ROOT_URL ?>admin/edit-category-logic.php" method="POST">
            <input type="hidden" value="<?= $category['id']?>" name="id">
            <input type="text" name="title" value="<?= $category['title'] ?>" placeholder="Название категории" >
            <textarea rows="4" name="description" placeholder="Описание"><?= $category['description'] ?></textarea>
            <button type="submit" name="submit" class="btn">Редактировать категорию</button>
        </form>
    </div>
</section>

<?php

include '../partials/footer.php';
?>