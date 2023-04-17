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
                <li><a href="manage-users.php"><i class="uil uil-users-alt"></i>
                    <h5>Управление пользователями</h5>
                </a></li>
                <li><a href="add-category.php"><i class="uil uil-list-ul"></i>
                    <h5>Добавить категории</h5>
                </a></li>
                <li><a href="manage-categories.php" class="active"><i class="uil uil-edit-alt"></i>
                    <h5>Управление категориями</h5>
                </a></li>
            </ul>
        </aside>
        <main>
            <h2>Управление категориями</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Путешествовать</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Еда</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Дикая жизнь</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</section>




<?php

include 'partials/footer.php';

?>