<?php

use app\assets\WebpackAsset;
use app\assets\AssetBundle;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View
 * @var $content string
 */

AssetBundle::register($this);
WebpackAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <link rel="preload" href="/js/lazyload.min.js" as="script">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <?= Html::csrfMetaTags() ?>
    <title>Купить контент онлайн | Быстро выполним любой заказ на 15 языках | Topcontent</title>
    <meta name="description" content="Покупайте контент и переводы на 15 языках от Topcontent онлайн. Размещайте и отслеживайте статус своих заказов через наш удобный сервис самообслуживания.">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:locale:alternate" content="en_GB">
    <meta property="og:locale:alternate" content="nb_NO">
    <meta property="og:locale:alternate" content="sv_SE">
    <meta property="og:locale:alternate" content="fi_FI">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Купить контент онлайн | Быстро выполним любой заказ на 15 языках | Topcontent">
    <meta property="og:description" content="Покупайте контент и переводы на 15 языках от Topcontent онлайн. Размещайте и отслеживайте статус своих заказов через наш удобный сервис самообслуживания.">
    <meta property="og:site_name" content="Topcontent">
    <meta property="og:image" content="images/buy-content-online-1.png">
    <meta property="og:image:width" content="1600">
    <meta property="og:image:height" content="1000">


    <link rel="dns-prefetch" href="//s.w.org">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="mask-icon" href="/fonts/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="msapplication-TileColor" content="#ee6072">
    <meta name="theme-color" content="#ffffff">
    <?php $this->head() ?>
</head>

<body class="page-template page-template-templates page-template-buy-content-online-v2 page-template-templatesbuy-content-online-v2-php page page-id-11231 wp-custom-logo header-absolute group-blog">
<div id="page" class="site off-canvas-wrapper">
    <div class="off-canvas position-right inverse" id="the-off-canvas" data-off-canvas>
        <ul id="off-canvas-menu" class="vertical menu"><li id="menu-item-11843" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-11843"><a href="#">Наши услуги</a>
                <ul class="menu" data-toggle>
                    <li id="menu-item-11844" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-11844"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/kontent/">Контент для успеха вашего бизнеса</a></li>
                    <li id="menu-item-11850" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-11850"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/kontent-dlya-internet-magazinov-i-elektronnoj-kommertsii/">E-commerce контент</a></li>
                    <li id="menu-item-11856" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11856"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/kontent-dlya-affiliativnogo-marketinga/">Контент для аффилиативного маркетинга</a></li>
                    <li id="menu-item-12020" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-12020"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/perevody/">Услуги по переводу</a></li>
                    <li id="menu-item-12016" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-12016"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/igaming-kontent/">iGaming контент</a></li>
                    <li id="menu-item-11864" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11864"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/publikatsii-v-blogah/">Публикации в блогах</a></li>
                    <li id="menu-item-12022" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12022"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/turizm-i-puteshestviya/">Контент для туристических сайтов</a></li>
                </ul>
            </li>
            <li id="menu-item-12148" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12148"><a href="#">Как заказать</a>
                <ul class="menu" data-toggle>
                    <li id="menu-item-12025" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12025"><a href="https://topcontent.com/ru/kak-zakazat/sistema-samoobsluzhivaniya-self-service/">Система самообслуживания Self-Service</a></li>
                    <li id="menu-item-12024" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12024"><a href="https://topcontent.com/ru/kak-zakazat/cms-integratsiya/">CMS интеграция</a></li>
                    <li id="menu-item-11869" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11869"><a href="https://topcontent.com/ru/kak-zakazat/plagin-dlya-wpml/">Плагин для WPML</a></li>
                    <li id="menu-item-13739" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13739"><a href="https://topcontent.com/ru/kak-zakazat/plagin-wordpress/">Плагин WordPress</a></li>
                    <li id="menu-item-13738" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13738"><a href="https://topcontent.com/ru/kak-zakazat/avtomatizirovannaya-publikatsiya-kontenta/">Автоматизированная публикация контента</a></li>
                </ul>
            </li>
            <li id="menu-item-11870" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11870"><a href="https://topcontent.com/ru/tseny/">Цены</a></li>
            <li id="menu-item-11871" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11871"><a href="https://topcontent.com/ru/pisatelyam/">Писателям</a></li>
            <li id="menu-item-4570" class="header-login menu-item menu-item-type-custom menu-item-object-custom menu-item-4570"><a href="https://app.topcontent.com/signin">Войти</a></li>
            <li id="menu-item-4567" class="button header-signup menu-item menu-item-type-custom menu-item-object-custom menu-item-4567"><a href="https://app.topcontent.com/signup">Регистрация</a></li>
        </ul>		<button class="close-button" aria-label="Close menu" type="button" data-close>
            <span aria-hidden="true">×</span>
        </button><!-- .close-button -->
    </div><!-- #the-off-canvas.off-canvas -->
    <div class="off-canvas-content" data-off-canvas-content>

        <?= $this->render('//partials/header'); ?>

        <div id="content" class="site-content">
            <div class="entry-cover entry-cover-page inverse lazy" style data-bg="url(https://topcontent.com/wp-content/uploads/2021/01/buy_content_online.jpg)">
                <div class="dark-filter"></div>
                <div class="grid-container">
                    <div class="grid-x grid-padding-x align-middle align-center">
                        <div class="large-8 medium-10 cell">
                            <header class="entry-header text-center">
                                <h1 class="entry-title">Покупайте контент для своих сайтов</h1>
                                <div class="lead"><p><span style="font-weight: 400;">Благодаря нашему собственному сервису самообслуживания Topcontent Self-Service в распоряжении каждого зарегистрированного пользователя есть удобный личный кабинет, через который просто покупать контент онлайн, совершать оплату и отслеживать статус выполнения всех заказов.</span></p>
                                </div>
                                <a class="button" href="https://app.topcontent.com/signup?customer" target>Создать аккаунт</a>
                            </header><!-- .entry-header -->
                            <div class="scroll-down-wrapper text-center">
                                <a class="scroll-down" href="#why_us"><i class="fa fa-chevron-down"></i></a>
                            </div><!-- .scroll-down-wrapper -->
                        </div><!-- .cell -->
                    </div><!-- .grid-x -->
                </div><!-- .grid-container -->
            </div><!-- .cover -->

            <div class="grid-container">
                <div class="grid-x grid-padding-x align-center">
                    <div class="content-area large-8 medium-10 cell">
                        <main id="main" class="site-main" role="main">

                            <article id="post-11231" class="post-11231 page type-page status-publish has-post-thumbnail hentry">
                                <div class="entry-content">
                                </div><!-- .entry-content -->
                                <footer class="entry-footer">
                                </footer><!-- .entry-footer -->
                            </article><!-- #post-## -->
                        </main>
                        <!-- #main -->
                        <div class="buy-online__title text-center" id="why_us">
                            <h2>Почему контент для сайтов покупают именно у нас?</h2>
                        </div>
                        <div class="service-feature__block">
                            <div class="service-feature__img">
                                <img class="lazy" src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%2064%2064&#x27;%3E%3C/svg%3E" data-src="https://topcontent.com/wp-content/uploads/2020/03/rocket.svg" alt="service feature icon">
                            </div>
                            <!-- /.service-feature__img -->
                            <div class="service-feature__text">
                                <h3>С нам легко начать работать</h3>
                                <p><span style="font-weight: 400;">Создание аккаунта с личным кабинетом займет у вас меньше минуты! Оплата заказов осуществляется просто и безопасно — с баланса вашего счета, который вы полностью контролируете. Пополнить баланс можно с помощью кредитной карты, банковского перевода или электронного кошелька.</span></p>
                            </div>
                            <!-- /.service-feature__text -->
                        </div>
                        <!-- /.service-feature__block -->
                        <div class="service-feature__block">
                            <div class="service-feature__img">
                                <img class="lazy" src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%2064%2064&#x27;%3E%3C/svg%3E" data-src="https://topcontent.com/wp-content/uploads/2020/03/cart.svg" alt="service feature icon">
                            </div>
                            <!-- /.service-feature__img -->
                            <div class="service-feature__text">
                                <h3>Готовые шаблоны заказов</h3>
                                <p><span style="font-weight: 400;">Хотя наша система предоставляет вам полный контроль над выбором стиля, структуры и длины ваших постов или статей на заказ, у нас есть большой выбор</span> готовых<span style="font-weight: 400;"> шаблонов для различных видов контента. Вы можете выбрать подходящий вам и буквально за минуту разместить заказ!</span></p>
                            </div>
                            <!-- /.service-feature__text -->
                        </div>
                        <!-- /.service-feature__block -->
                        <div class="service-feature__block">
                            <div class="service-feature__img">
                                <img class="lazy" src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%2064%2064&#x27;%3E%3C/svg%3E" data-src="https://topcontent.com/wp-content/uploads/2020/03/speed.svg" alt="service feature icon">
                            </div>
                            <!-- /.service-feature__img -->
                            <div class="service-feature__text">
                                <h3>Быстрое вполнение заказов</h3>
                                <p><span style="font-weight: 400;">Покупайте статьи и контент для сайтов и скачивайте их в Word, HTML или другом формате на выш выбор сразу же по мере готовности вашего заказа. По вашему желанию мы сможем переслать готовый контент прямиком в вашу CMS.</span></p>
                            </div>
                            <!-- /.service-feature__text -->
                        </div>
                        <!-- /.service-feature__block -->
                        <div class="service-feature__block">
                            <div class="service-feature__img">
                                <img class="lazy" src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%2064%2064&#x27;%3E%3C/svg%3E" data-src="https://topcontent.com/wp-content/uploads/2020/03/chat.svg" alt="service feature icon">
                            </div>
                            <!-- /.service-feature__img -->
                            <div class="service-feature__text">
                                <h3>Гибкая система рецензирования</h3>
                                <p><span style="font-weight: 400;">У вас есть возможность предварительно просмотреть готовый текст в личном кабинете и отправить нам его обратно с вашими комментариями. Если вы считаете, что статью нужно улучшить, вы можете ее вернуть автору с вашими замечаниями и пожеланиями.</span></p>
                                <div class="service-feature__btn text-center">
                                    <a class="button" href="https://app.topcontent.com/signup?customer">Зарегистрируйтесь и заказывайте контент</a>
                                </div>
                            </div>
                            <!-- /.service-feature__text -->
                        </div>
                        <!-- /.service-feature__block -->
                    </div>
                    <!-- #primary -->
                </div>
                <!-- .grid-x -->
            </div>
            <!-- .grid-container -->

            <section id="how-it-works" class="default-section inverse">
                <div class="grid-container lead">
                    <div class="grid-x grid-padding-x align-center">
                        <div class="large-7 medium-10 cell">
                            <h2 class="text-center how-it-works__title">Как купить у нас контент?</h2>
                            <div class="how-it__works-features__section">
                                <div class="how-it__works-feature__block how-it__works-feature__arrow">
                                    <div class="how-it__works-feature__img">
                                        <img class="lazy" src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%201%201&#x27;%3E%3C/svg%3E" data-src="https://topcontent.com/wp-content/themes/nelumbo-topcontent/img/icons/24х24.png" alt="icon">
                                    </div>
                                    <!-- /.how-it__works-feature__img -->
                                    <div class="how-it__works-feature__text">
                                        Выберите нужный язык текста ваших статей и нажмите «Далее».                        </div>
                                    <!-- /.how-it__works-feature__text -->
                                </div>
                                <!-- /.how-it__works-feature__block -->
                                <div class="how-it__works-feature__block how-it__works-feature__arrow">
                                    <div class="how-it__works-feature__img">
                                        <img class="lazy" src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%201%201&#x27;%3E%3C/svg%3E" data-src="https://topcontent.com/wp-content/themes/nelumbo-topcontent/img/icons/doc.png" alt="doc">
                                    </div>
                                    <!-- /.how-it__works-feature__img -->
                                    <div class="how-it__works-feature__text">
                                        Добавьте статьи и нажмите «Далее».                        </div>
                                    <!-- /.how-it__works-feature__text -->
                                </div>
                                <!-- /.how-it__works-feature__block -->
                                <div class="how-it__works-feature__block how-it__works-feature__arrow">
                                    <div class="how-it__works-feature__img">
                                        <img class="lazy" src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%201%201&#x27;%3E%3C/svg%3E" data-src="https://topcontent.com/wp-content/themes/nelumbo-topcontent/img/icons/dimond.png" alt="dimond">
                                    </div>
                                    <!-- /.how-it__works-feature__img -->
                                    <div class="how-it__works-feature__text">
                                        Выберите тематику и желаемое качество текста.                        </div>
                                    <!-- /.how-it__works-feature__text -->
                                </div>
                                <!-- /.how-it__works-feature__block -->
                                <div class="how-it__works-feature__block">
                                    <div class="how-it__works-feature__img">
                                        <img class="lazy" src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%201%201&#x27;%3E%3C/svg%3E" data-src="https://topcontent.com/wp-content/themes/nelumbo-topcontent/img/icons/cart.png" alt="shoping cart">
                                    </div>
                                    <!-- /.how-it__works-feature__img -->
                                    <div class="how-it__works-feature__text">
                                        Оплатите заказ.                        </div>
                                    <!-- /.how-it__works-feature__text -->
                                </div>
                                <!-- /.how-it__works-feature__block -->
                            </div>
                            <!-- /.how-it__works-features -->
                            <div class="responsive-embed widescreen">
                                <iframe title="Topcontent - Ordering articles tutorial" width="640" height="360" src="https://www.youtube.com/embed/uPQ4VMmAwi4?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                </div>
                            <div class="text-center">
                                <div class="text-under-video">
                                    <p><span style="font-weight: 400;">Вот и все! Это очень просто!</span></p>
                                    <p><span style="font-weight: 400;">По мере готовности заказанного вами контента, вы получите уведомление по электронной почте. В личном кабинете Topcontent Self-Service вы сможете легко просмотреть и утвердить готовый заказ. Если же у вас будут замечания, вы сможете отправить нам текст обратно на правки и доработку.</span></p>
                                </div>
                                <div class="how-it__works-btns__wrapper">
                                    <div class="how-it__works__quote-btn__red">
                                        <a href="https://app.topcontent.com/signup?customer">Купить контент сейчас</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="quality-guarante">
                <div class="grid-container text-center">
                    <div class="grid-x grid-padding-x align-center">
                        <div class="content-area large-8 medium-10 cell">
                            <h2>Сколько это стоит?</h2>
                            <p><span style="font-weight: 400;">У нас простое и четкое ценообразование. Когда вы покупаете у нас уникальный контент, вы платите за слово готового текста в соответствии с выбранным качеством контента (Стандарт или Бизнес).</span></p>
                            <p><span style="font-weight: 400;">Чтобы купить контент, который вам нужен, просто пополните баланс вашего счета в личном кабинете.</span></p>
                            <p><a class="button" href="https://topcontent.com/ru/tseny-na-kontent-i-perevody-dlya-raznyh-yazykov/">Подробно о наших ценах</a></p>
                        </div>
                        <!-- .content-area -->
                    </div>
                    <!-- .grid-x -->
                </div>
                <!-- .grid-container -->
            </section>
            <section id="signup-footer" class="signup-section inverse">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="medium-8 cell text-center medium-text-left">
                            <h2 class="h3 section-headline">Заказать онлайн</h2>
                        </div><!-- .medium-8.cell -->
                        <div class="medium-4 cell text-center large-text-right">
                            <a id="footer-ordercontent-cta" class="inverse button" href="https://app.topcontent.com/signup">
                                Зарегистрируйтесь и закажите контент</a>
                        </div><!-- .medium-4.cell -->
                    </div><!-- .grid-x -->
                </div><!-- .grid-container -->
            </section><!-- #signup-footer.signup-section -->
        </div><!-- #content -->

        <?= $this->render('//partials/footer'); ?>
    </div><!-- .off-canvas-content -->
</div><!-- #page.off-canvas-wrapper -->
</div>
<script async src="/js/lazyload.min_1.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>