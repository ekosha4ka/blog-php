<?php

include 'partials/header.php';

?>
<section class="form__section">
    <div class="container form__section-container">
        <h2>Добавить пользователя</h2>
        <div class="alert__message error">
            <p>This is an error message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Имя">
            <input type="text" placeholder="Фамилия">
            <input type="text" placeholder="Никнейм">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Пароль">
            <input type="password" placeholder="Повторить пароль">
            <select>
                <option value="0">Автор</option>
                <option value="1">Админ</option>

            </select>
            <div class="form__control">
                <label for="avatar">Выбрать аватар</label>
                <input type="file" id="avatar">
            </div>
            <button type="submit" class="btn">Добавить</button>
        </form>
    </div>
</section>

<?php

include 'partials/footer.php';

?>