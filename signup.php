<?php
include 'partials/header.php';

$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Регистрация</h2>
        <?php  if(isset($_SESSION['signup'])) : ?>
            <div class="alert__message error">
                <p>
                    <?= $_SESSION['signup'];
                    unset($_SESSION['signup']);
                     ?> 
                </p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="Имя">
            <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Фамилия">
            <input type="text" name="username" value="<?= $username ?>" placeholder="Имя пользователя">
            <input type="email" name="email" value="<?= $email ?>" placeholder="Email">
            <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="Пароль">
            <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Повторить пароль">
            <div class="form__control">
                <label for="avatar">Выбрать аватар</label>
                <input type="file" name="avatar" id="avatar">
            </div>
            <button type="submit" name="submit" class="btn">Регистрация</button>
            <small>Уже есть аккаунт? <a href="signin.php">Войти в систему</a></small>
        </form>
    </div>
</section>

<?php

include 'partials/footer.php';

?>