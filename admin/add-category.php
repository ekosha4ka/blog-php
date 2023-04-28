<?php

include 'partials/header.php';

// вернуть форму, если она недействительна
$title = $_SESSION['add-category-data']['title'] ?? null;
$description = $_SESSION['add-category-data']['description'] ?? null;

unset($_SESSION['add-category-data']);
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Добавить категорию</h2>
        <?php if(isset($_SESSION['add-category'])) : ?>
        <div class="alert__message error">
            <p>
                <?= $_SESSION['add-category'];
                unset($_SESSION['add-category']);
                ?>
            </p>
        </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>admin/add-category-logic.php" method="POST">
            <input type="text" name="title" value="<= $title ?>" placeholder="Название категории">
            <textarea rows="4" name="description" value="<= $description ?>" placeholder="Описание"></textarea>
            <button type="submit" name="submit" class="btn">Добавить категорию</button>
        </form>
    </div>
</section>

<?php

include '../partials/footer.php';

?>