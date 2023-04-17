<?php

include 'partials/header.php';

?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Добавить пост</h2>
        <div class="alert__message error">
            <p>This is an error message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Название поста">
            <select>
                <option value="1">Путешествование</option>
                <option value="1">Еда</option>
                <option value="1">Технологии</option>
                <option value="1">Дикая жизнь</option>
                <option value="1">Музыка</option>
                <option value="1">Искусство</option>
            </select>
            
            <textarea rows="10" placeholder="Описание"></textarea>
            <div class="form__control inline">
                <input type="checkbox" id="is_featured" checked>
                <label for="is_featured">Рекомендуемые</label>
            </div>
            <div class="form__control">
                <label for="thumbnail">Добавить фото</label>
                <input type="file" id="thumbnail">
            </div>
            <button type="submit" class="btn">Добавить пост</button>
        </form>
    </div>
</section>

<?php

include 'partials/footer.php';

?>