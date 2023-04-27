<?php

include 'partials/header.php';

?>
<section class="form__section">
    <div class="container form__section-container">
        <h2>Добавить пользователя</h2>
        <div class="alert__message error">
            <p>This is an error message</p>
        </div>
        <form action="<?= ROOT_URL ?>add-user-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="firstname" placeholder="Имя">
            <input type="text" name="lastname" placeholder="Фамилия">
            <input type="text" name="username" placeholder="Имя пользователя">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="createpassword" placeholder="Пароль">
            <input type="password" name="confirmpassword" placeholder="Повторить пароль">
            <select name="userrole">
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

include 'partials/footer.php';
