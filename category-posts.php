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
<nav>
    <div class="container nav__container">
        <a href="index.html" class="nav__logo">YELKHAN</a>
        <ul class="nav__items">
            <li><a href="blog.html">Блог</a></li>
            <li><a href="about.html">О нас</a></li>
            <li><a href="services.html">Сервисы</a></li>
            <li><a href="contact.html">Контакты</a></li>
            <!-- <li><a href="singin.html">Вход</a></li> -->
            <li class="nav__profile">
                <div class="avatar">
                    <img src="./images/image_avatar.jpg">
                    <ul>
                        <li><a href="dashboard.html">Приборная панель</a></li>
                        <li><a href="logout.html">Выход</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
        <button id="close__nav-btn"><i class="uil uil-times"></i></button>
    </div>
</nav>

<header class="category__title">
    <h2>Category Title</h2>
</header>
<!-- END CATEGORY TITLE -->

<section class="posts">
    <div class="container posts__container">
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/food.jpg" alt="">
            </div>  
            <div class="post__info">
                <a href="category-posts.html" class="category__button">Wild Life</a>
                <h3 class="post__title">
                    <a href="post.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                </h3>
                <p class="post_body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi soluta molestiae minus totam quisquam dolorem consectetur quam maiores, a modi dolorum, delectus quidem?                    </p>
            </div>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar1.jpg">
                </div>
                <div class="post_author-info">
                    <h5>By: Raimbek Taskozhin</h5>
                    <small>15 Апреля 2023, 18:48</small>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog1.jpg" alt="">
            </div>  
            <div class="post__info">
                <a href="" class="category__button">Wild Life</a>
                <h3 class="post__title">
                    <a href="post.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                </h3>
                <p class="post_body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi soluta molestiae minus totam quisquam dolorem consectetur quam maiores, a modi dolorum, delectus quidem?                    </p>
            </div>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar10.jpg">
                </div>
                <div class="post_author-info">
                    <h5>By: John Mall</h5>
                    <small>15 Апреля 2023, 18:48</small>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog10.jpg" alt="">
            </div>  
            <div class="post__info">
                <a href="" class="category__button">Wild Life</a>
                <h3 class="post__title">
                    <a href="post.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                </h3>
                <p class="post_body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi soluta molestiae minus totam quisquam dolorem consectetur quam maiores, a modi dolorum, delectus quidem?                    </p>
            </div>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/pexels-ruby-ruby-13069698.jpg">
                </div>
                <div class="post_author-info">
                    <h5>By: Kairat Kairzhanov</h5>
                    <small>15 Апреля 2023, 18:48</small>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog101.jpg" alt="">
            </div>  
            <div class="post__info">
                <a href="" class="category__button">Wild Life</a>
                <h3 class="post__title">
                    <a href="post.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                </h3>
                <p class="post_body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi soluta molestiae minus totam quisquam dolorem consectetur quam maiores, a modi dolorum, delectus quidem?                    </p>
            </div>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar11.jpg">
                </div>
                <div class="post_author-info">
                    <h5>By: Yelkhan Amangeldi</h5>
                    <small>15 Апреля 2023, 18:48</small>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog102.jpg" alt="">
            </div>  
            <div class="post__info">
                <a href="" class="category__button">Wild Life</a>
                <h3 class="post__title">
                    <a href="post.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                </h3>
                <p class="post_body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi soluta molestiae minus totam quisquam dolorem consectetur quam maiores, a modi dolorum, delectus quidem?                    </p>
            </div>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar12.jpg">
                </div>
                <div class="post_author-info">
                    <h5>By: Aigerim Bekzatovna</h5>
                    <small>15 Апреля 2023, 18:48</small>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog11.jpg" alt="">
            </div>  
            <div class="post__info">
                <a href="" class="category__button">Wild Life</a>
                <h3 class="post__title">
                    <a href="post.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                </h3>
                <p class="post_body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi soluta molestiae minus totam quisquam dolorem consectetur quam maiores, a modi dolorum, delectus quidem?                    </p>
            </div>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar13.jpg">
                </div>
                <div class="post_author-info">
                    <h5>By: Aigerim Bekzatovna</h5>
                    <small>15 Апреля 2023, 18:48</small>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog12.jpg" alt="">
            </div>  
            <div class="post__info">
                <a href="" class="category__button">Wild Life</a>
                <h3 class="post__title">
                    <a href="post.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                </h3>
                <p class="post_body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi soluta molestiae minus totam quisquam dolorem consectetur quam maiores, a modi dolorum, delectus quidem?                    </p>
            </div>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar14.jpg">
                </div>
                <div class="post_author-info">
                    <h5>By: Aigerim Bekzatovna</h5>
                    <small>15 Апреля 2023, 18:48</small>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/blog13.jpg" alt="">
            </div>  
            <div class="post__info">
                <a href="" class="category__button">Wild Life</a>
                <h3 class="post__title">
                    <a href="post.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                </h3>
                <p class="post_body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi soluta molestiae minus totam quisquam dolorem consectetur quam maiores, a modi dolorum, delectus quidem?                    </p>
            </div>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar15.jpg">
                </div>
                <div class="post_author-info">
                    <h5>By: Aigerim Bekzatovna</h5>
                    <small>15 Апреля 2023, 18:48</small>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post__thumbnail">
                <img src="./images/food.jpg" alt="">
            </div>  
            <div class="post__info">
                <a href="" class="category__button">Wild Life</a>
                <h3 class="post__title">
                    <a href="post.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                </h3>
                <p class="post_body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi soluta molestiae minus totam quisquam dolorem consectetur quam maiores, a modi dolorum, delectus quidem?                    </p>
            </div>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/pexels-ruby-ruby-13069698.jpg">
                </div>
                <div class="post_author-info">
                    <h5>By: Aigerim Bekzatovna</h5>
                    <small>15 Апреля 2023, 18:48</small>
                </div>
            </div>
        </article>
                <!-- ----------------------END POSTS---------------------- -->
    </div>
</section>
<section class="category__buttons">
    <div class="container category__buttons-container">
        <a href="" class="category__button">Искусство</a>
        <a href="" class="category__button">Дикая жизнь</a>
        <a href="" class="category__button">Путешествовать</a>
        <a href="" class="category__button">Технологии</a>
        <a href="" class="category__button">Еда</a>
        <a href="" class="category__button">Музыка</a>
    </div>
</section>
    <!-- ----------------------END CATEGORY BUTTONS---------------------- -->


    <footer>
    <div class="footer__socials">
        <a href="https://www.instagram.com/_ylkhn_/" target="_blank"><i class="uil uil-instagram"></i></a>
        <a href="https://www.youtube.com/" target="_blank"><i class="uil uil-youtube"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100046342577106" target="_blank"><i class="uil uil-facebook"></i></a>
        <a href="https://twitter.com/YAmangeldy" target="_blank"><i class="uil uil-twitter"></i></a>
    </div>
    <div class="container footer__container">
        <article>
            <h4>Категории</h4>
            <ul>
                <li><a href="">Искусство</a></li>
                <li><a href="">Дикая жизнь</a></li>
                <li><a href="">Путешествовать</a></li>
                <li><a href="">Технологии</a></li>
                <li><a href="">Еда</a></li>
                <li><a href="">Музыка</a></li>
            </ul>
        </article>
        <article>
            <h4>Поддержка</h4>
            <ul>
                <li><a href="">Онлайн консультация</a></li>
                <li><a href="">Контакты</a></li>
                <li><a href="">Почта</a></li>
                <li><a href="">Социальная помощь</a></li>
                <li><a href="">Локация</a></li>
            </ul>
        </article>
        <article>
            <h4>Ссылки</h4>
            <ul>
                <li><a href="">Домой</a></li>
                <li><a href="">Блог</a></li>
                <li><a href="">О нас</a></li>
                <li><a href="">Услуги</a></li>
                <li><a href="">Контакты</a></li>
            </ul>
        </article>
        <article>
            <h4>Блог</h4>
            <ul>
                <li><a href="">Безопасность</a></li>
                <li><a href="">Ремонт</a></li>
                <li><a href="">Недавняя</a></li>
                <li><a href="">Популярные</a></li>
                <li><a href="">Категории</a></li>
            </ul>
        </article>
        <div class="footer__copyright">
            <small>Copyright &copy; Yelkhan 2023</small>
        </div>
    </div>
    </footer>


    <script src="./main.js"></script>
</body>
</html>