<?php

include 'partials/header.php';

?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Добавить категорию</h2>
        <div class="alert__message error">
            <p>This is an error message</p>
        </div>
        <form action="">
            <input type="text" placeholder="Название категории">
            <textarea rows="4" placeholder="Описание"></textarea>
            <button type="submit" class="btn">Добавить категорию</button>
        </form>
    </div>
</section>

<?php

include 'partials/footer.php';

?>