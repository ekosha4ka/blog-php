<?php

include 'partials/header.php';
require_once 'config/contstants.php';
$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Войти</h2>
        <?php if(isset($_SESSION['signup_success'])) : ?>
            <div class="alert__message success">
            <p>
                <?= $_SESSION['signup_success'];
                unset($_SESSION['signup_success']);
                ?>
            </p>
        </div>
        <?php endif ?>
        <?php  if(isset($_SESSION['signin'])) : ?>
            <div class="alert__message error">
                <p>
                    <?= $_SESSION['signin'];
                    unset($_SESSION['signin']);
                     ?> 
                </p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
            <input type="text" name="username_email" value="<?= $username_email ?>" placeholder="Имя пользователя или Email">
            <input type="password" name="password" value="<?= $password ?>" placeholder="Пароль">
            
            <button type="submit" name="submit" class="btn">Войти</button>
            <small>Нету аккаунта? <a href="signup.php">Регистрация</a></small>
        </form>
    </div>
</section>

<?php

include_once 'partials/footer.php';

?>