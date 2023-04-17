<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blog Website</title>
<!-- CUSTOM STYLESHEET -->
<link rel="stylesheet" href="./style.css">
<!-- Icons CDN -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;800&display=swap" rel="stylesheet">
</head>
<body>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Регистрация</h2>
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
            <div class="form__control">
                <label for="avatar">Выбрать аватар</label>
                <input type="file" id="avatar">
            </div>
            <button type="submit" class="btn">Регистрация</button>
            <small>Уже есть аккаунт? <a href="signin.html">Войти в систему</a></small>
        </form>
    </div>
</section>

</body>
</html>