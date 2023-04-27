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
                <li><a href="index.php" class="active"><i class="uil uil-postcard"></i>
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
                    <li><a href="manage-categories.php"><i class="uil uil-edit-alt"></i>
                        <h5>Управление категориями</h5>
                    </a></li>
                <?php endif ?>
            </ul>
        </aside>
        <main>
            <h2>Управление пользователями</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Редактировать</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                        <td>Travel</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-user.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                        <td>Travel</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-user.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                        <td>Travel</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-user.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</section>




<?php

include '../partials/footer.php';

?>