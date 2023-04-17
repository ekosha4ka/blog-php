<?php

include 'partials/header.php';

?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Редактировать пользователя</h2>
        <div class="alert__message error">
            <p>This is an error message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Имя">
            <input type="text" placeholder="Фамилия">
            <select>
                <option value="0">Автор</option>
                <option value="1">Админ</option>
            </select>
            <button type="submit" class="btn">Редактировать</button>
        </form>
    </div>
</section>

<?php

include 'partials/footer.php';

?>