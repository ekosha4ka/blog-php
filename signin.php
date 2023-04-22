<?php

include 'partials/header.php';
require_once 'config/contstants.php';
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
        <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
            <input type="text" name="username_email" placeholder="Имя пользователя или Email">
            <input type="password" name="password" placeholder="Пароль">
            
            <button type="submit" name="submit" class="btn">Войти</button>
            <small>Нету аккаунта? <a href="signup.php">Регистрация</a></small>
        </form>
    </div>
</section>

<?php

include_once 'partials/footer.php';

?>