<?php

include 'partials/header.php';

?>

<section class="dashboard">
    <div class="container dashboard__container">
        <aside>
            <ul>
                <li><a href="add-post.php"><i class="uil uil-pen"></i>
                    <h5>Добавить публикацию</h5>
                </a></li>
                <li><a href="dashboard.php"><i class="uil uil-postcard"></i>
                    <h5>Управление публикациями</h5>
                </a></li>
                <li><a href="add-user.php"><i class="uil uil-user-plus"></i>
                    <h5>Добавить пользователя</h5>
                </a></li>
                <li><a href="manage-users.php" class="active"><i class="uil uil-users-alt"></i>
                    <h5>Управление пользователями</h5>
                </a></li>
                <li><a href="add-category.php"><i class="uil uil-list-ul"></i>
                    <h5>Добавить категории</h5>
                </a></li>
                <li><a href="manage-categories.php"><i class="uil uil-edit-alt"></i>
                    <h5>Управление категориями</h5>
                </a></li>
            </ul>
        </aside>
        <main>
            <h2>Управление пользователями</h2>
            <table>
                <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Редактировать</th>
                        <th>Delete</th>
                        <th>Админ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Yelkhan</td>
                        <td>Amangeldi</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-user.php" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Aigerim</td>
                        <td>Bekzatovna</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-user.php" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Kairat</td>
                        <td>Kairzhanov</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-user.php" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</section>




<?php

include 'partials/footer.php';

?>