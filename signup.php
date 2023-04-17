<?php

include 'partials/header.php';

?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Регистрация</h2>
        <div class="alert__message error">
            <p>This is an error message</p>
        </div>
        <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="firstname" placeholder="Имя">
            <input type="text" name="lastname" placeholder="Фамилия">
            <input type="text" name="username" placeholder="Имя пользователя">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="createpassword" placeholder="Пароль">
            <input type="password" name="confirmpassword" placeholder="Повторить пароль">
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