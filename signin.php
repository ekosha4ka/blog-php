<?php

include 'partials/header.php';

?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Войти</h2>
        <div class="alert__message success">
            <p>This is an success message</p>
        </div>
        <form action="">
            <input type="text" placeholder="Имя пользователя или Email">
            <input type="password" placeholder="Пароль">
            
            <button type="submit" class="btn">Войти</button>
            <small>Нету аккаунта? <a href="signup.php">Регистрация</a></small>
        </form>
    </div>
</section>

<?php

include 'partials/footer.php';

?>