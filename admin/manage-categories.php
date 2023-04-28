<?php

include 'partials/header.php';

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
            <table>
                <thead>
                    <tr>
                        <th>Название</th>
                        <th>Редактировать</th>
                        <th>Удалить</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Путешествовать</td>
                        <td><a href="edit-category.php" class="btn sm">Редактировать</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Удалить</a></td>
                    </tr>
                    <tr>
                        <td>Еда</td>
                        <td><a href="edit-category.php" class="btn sm">Редактировать</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Удалить</a></td>
                    </tr>
                    <tr>
                        <td>Дикая жизнь</td>
                        <td><a href="edit-category.php" class="btn sm">Редактировать</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Удалить</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</section>
