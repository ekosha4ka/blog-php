<?php

include 'partials/header.php';

// Вывод рекомендумого поста из база данных
$featured_query = "SELECT * FROM posts WHERE is_featured=1";
$featured_result = mysqli_query($connection, $featured_query);
$featured = mysqli_fetch_assoc($featured_result);
?>
<?php if(mysqli_num_rows($featured_result) == 1) : ?>
    <!-- Рекомендумые -->
    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="./images/<?= $featured['thumbnail'] ?>">
            </div>
            <div class="post__info">
                <?php 
                // Предназначена для вывода категории и последующий переходом на все посты категории
                $category_id = $featured['category_id'];
                $category_query = "SELECT * FROM categories WHERE id=$category_id";
                $category_result = mysqli_query($connection, $category_query);
                $category = mysqli_fetch_assoc($category_result);
                $category_title = $category['title']
                ?>
                <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $category['id'] ?>" class="category__button"><?= $category_title ?></a>
                <h2 class="post__title"><a href="<?= ROOT_URL ?>post.php?id=<?= $featured['id'] ?>"><?= $featured['title'] ?></a></h2>
                <p class="post__body"><?= substr($featured['body'], 0, 300) ?>...</p>
            </div>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/image_avatar.jpg">
                </div>
                <div class="post__author-info">
                    <h5>Amangeldi Yelkhan</h5>
                    <small>15 Апреля 2023, 17:05</small>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>
    <!-- ----------------------Конец рекомендумого---------------------- -->


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


 <?php

    require 'partials/footer.php';

 ?>