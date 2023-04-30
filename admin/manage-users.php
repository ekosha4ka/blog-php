<?php

include 'partials/header.php';
 // извлекать пользователей из базы данных, но не текущего пользователя
$current_admin_id = $_SESSION['user-id'];
$query = "SELECT * FROM users WHERE NOT id=$current_admin_id";
$users = mysqli_query($connection, $query);   
?>

<section class="dashboard">
    <?php if(isset($_SESSION['add-user_success'])) : ?>
        <div class="alert__message success container">
            <p>
                <?= $_SESSION['add-user_success'];
                unset($_SESSION['add-user_success']);
                ?>
            </p>
        </div>
    <?php elseif(isset($_SESSION['edit-user-success'])) : ?>
        <div class="alert__message success container">
            <p>
                <?= $_SESSION['edit-user-success'];
                unset($_SESSION['edit-user-success']);
                ?>
            </p>
        </div>
    <?php elseif(isset($_SESSION['delete-user-success'])) : ?>
        <div class="alert__message success container">
            <p>
                <?= $_SESSION['delete-user-success'];
                unset($_SESSION['delete-user-success']);
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
                    <li><a href="manage-users.php" class="active"><i class="uil uil-users-alt"></i>
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
            <?php if(mysqli_num_rows($users) > 0) : ?>
                <table>
                    <thead>
                        <tr>
                            <th>Имя и Фамилия</th>
                            <th>Имя пользователя</th>
                            <th>Редактировать</th>
                            <th>Удалить</th>
                            <th>Админ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($user = mysqli_fetch_assoc($users)) : ?>
                        <tr>
                            <td><?= "{$user['firstname']} {$user['lastname']}" ?></td>
                            <td><?= $user['username'] ?></td>
                            <td><a href="<?php ROOT_URL ?>edit-user.php?id=<?= $user['id'] ?>" class="btn sm">Редактировать</a></td>
                            <td><a href="<?php ROOT_URL ?>delete-user.php?id=<?= $user['id'] ?>" class="btn sm danger">Удалить</a></td>
                            <td><?= $user['is_admin'] ? 'Да' : 'Нет' ?></td>
                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            <?php else : ?>
                <div class="alert__message error"><?= "Пользователи отсутствуют." ?></div>
            <?php endif ?>
        </main>
    </div>
</section>




<?php

include '../partials/footer.php';

?>