<?php

include 'partials/header.php';
$firstname = $_SESSION['add-user_data']['firstname'] ?? null;
$lastname = $_SESSION['add-user_data']['lastname'] ?? null;
$username = $_SESSION['add-user_data']['username'] ?? null;
$email = $_SESSION['add-user_data']['email'] ?? null;
$is_admin = $_SESSION['add-user_data']['userrole'] ?? null;
$createpassword = $_SESSION['add-user_data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['add-user_data']['confirmpassword'] ?? null;
 
?>
<section class="form__section">
    <div class="container form__section-container">
        <h2>Добавить пользователя</h2>
        <?php  if(isset($_SESSION['add-user'])) : ?>
            <div class="alert__message error">
                <p>
                    <?= $_SESSION['add-user'];
                    unset($_SESSION['add-user']);
                     ?> 
                </p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>admin/add-user-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="Имя"> 
            <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Фамилия">
            <input type="text" name="username" value="<?= $username ?>" placeholder="Имя пользователя">
            <input type="email" name="email" value="<?= $email ?>" placeholder="Email">
            <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="Пароль">
            <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Повторить пароль">
            <select name="userrole" value="<?= $is_admin ?>">
                <option value="0">Автор</option>
                <option value="1">Админ</option>

            </select>
            <div class="form__control">
                <label for="avatar">Выбрать аватар</label>
                <input type="file" name="avatar" id="avatar">
            </div>
            <button type="submit" name="submit" class="btn">Добавить</button>
        </form>
    </div>
</section>

<?php

include_once '../partials/footer.php';

?>