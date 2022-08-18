<?php

use app\assets\WebpackAsset;
use app\assets\AssetBundle;
use app\components\enums\ViewParamsEnum;
use yii\helpers\ArrayHelper;
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
    <title><?= Html::encode($this->title) ?></title>
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

        <div
                id="content"
                class="site-content siteContent <?= ArrayHelper::getValue($this->params, ViewParamsEnum::IS_MAIN_PAGE, false) ? '' : 'siteContent__noMain' ?> <?= ArrayHelper::getValue($this->params, ViewParamsEnum::NOT_USE_GRID_CONTAINER, false) ? '' : 'siteContent__noMain grid-container' ?>"
        >

            <?= $content ?>

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