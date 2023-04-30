<?php

include 'partials/header.php';

// извлечь категории из базы данных
$query = "SELECT * FROM categories ORDER BY title";
$categories = mysqli_query($connection, $query);
?>

<section class="dashboard">
    <?php if(isset($_SESSION['add-category-success'])) : ?>
        <div class="alert__message success">
            <p>
                <?= $_SESSION['add-category-success'];
                unset($_SESSION['add-category-success']);
                ?>
            </p>
        </div>
    <?php elseif (isset($_SESSION['edit-category-success'])) : ?>
        <div class="alert__message success">
            <p>
                <?= $_SESSION['edit-category-success'];
                unset($_SESSION['edit-category-success']);
                ?>
            </p>
        </div>
    <?php endif ?>
    <div class="container dashboard__container">
        <aside>
            <ul>
                <li><a href="add-post.php"><i class="uil uil-pen"></i>
                    <h5>Добавить публикацию</h5>
                </a></li>
                <li><a href="index.php"><i class="uil uil-postcard"></i>
                    <h5>Управление публикациями</h5>
                </a></li>
                <?php if(isset($_SESSION['user_is_admin'])): ?>
                    <li><a href="add-user.php"><i class="uil uil-user-plus"></i>
                        <h5>Добавить пользователя</h5>
                    </a></li>
                    <li><a href="manage-users.php"><i class="uil uil-users-alt"></i>
                        <h5>Управление пользователями</h5>
                    </a></li>
                    <li><a href="add-category.php"><i class="uil uil-list-ul"></i>
                        <h5>Добавить категории</h5>
                    </a></li>
                    <li><a href="manage-categories.php" class="active"><i class="uil uil-edit-alt"></i>
                        <h5>Управление категориями</h5>
                    </a></li>
                <?php endif ?>
            </ul>
        </aside>
        <main>
            <h2>Управление категориями</h2>
            <?php if(mysqli_num_rows($categories) > 0) : ?>
                <table>
                    <thead>
                        <tr>
                            <th>Название</th>
                            <th>Редактировать</th>
                            <th>Удалить</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($category = mysqli_fetch_assoc($categories)) : ?>
                        <tr>
                            <td><?= "{$category['title']}" ?></td>
                            <td><a href="<?php ROOT_URL ?>edit-category.php?id=<?= $category['id'] ?>" class="btn sm">Редактировать</a></td>
                            <td><a href="<?php ROOT_URL ?>delete-category.php?=<?= $category['id'] ?>" class="btn sm danger">Удалить</a></td>
                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            <?php else : ?>
                <div class="alert__message error"><?php "Категории отсутствуют" ?></div>
            <?php endif ?>
        </main>
    </div>
</section>
