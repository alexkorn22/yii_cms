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
    <style>img.lazy{min-height:1px}</style>
    <link rel="preload" href="/js/lazyload.min.js" as="script">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<!--    <link rel="alternate" href="https://topcontent.com/buy-content-online/" hreflang="en">-->
<!--    <link rel="alternate" href="https://topcontent.com/ru/kupit-kontent-onlajn/" hreflang="ru">-->
<!--    <link rel="alternate" href="https://topcontent.com/no/kjop-innhold-pa-nett/" hreflang="nb">-->
<!--    <link rel="alternate" href="https://topcontent.com/sv/kop-content-online/" hreflang="sv">-->
<!--    <link rel="alternate" href="https://topcontent.com/fi/osta-sisaltoa-verkosta/" hreflang="fi">-->
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
    <style id="ugb-style-css-inline-css" type="text/css">
        :root {
            --content-width: 760px;
        }
    </style>
    <style type="text/css">div[id^="wpcf7-f20423-p"] button.cf7mls_next {   }div[id^="wpcf7-f20423-p"] button.cf7mls_back {   }div[id^="wpcf7-f20063-p"] button.cf7mls_next {   }div[id^="wpcf7-f20063-p"] button.cf7mls_back {   }div[id^="wpcf7-f19954-p"] button.cf7mls_next {   }div[id^="wpcf7-f19954-p"] button.cf7mls_back {   }div[id^="wpcf7-f19953-p"] button.cf7mls_next {   }div[id^="wpcf7-f19953-p"] button.cf7mls_back {   }div[id^="wpcf7-f19949-p"] button.cf7mls_next {   }div[id^="wpcf7-f19949-p"] button.cf7mls_back {   }div[id^="wpcf7-f15648-p"] button.cf7mls_next {   }div[id^="wpcf7-f15648-p"] button.cf7mls_back {   }div[id^="wpcf7-f12273-p"] button.cf7mls_next {   }div[id^="wpcf7-f12273-p"] button.cf7mls_back {   }div[id^="wpcf7-f11060-p"] button.cf7mls_next {   }div[id^="wpcf7-f11060-p"] button.cf7mls_back {   }div[id^="wpcf7-f10465-p"] button.cf7mls_next {   }div[id^="wpcf7-f10465-p"] button.cf7mls_back {   }div[id^="wpcf7-f9947-p"] button.cf7mls_next {   }div[id^="wpcf7-f9947-p"] button.cf7mls_back {   }div[id^="wpcf7-f9193-p"] button.cf7mls_next {   }div[id^="wpcf7-f9193-p"] button.cf7mls_back {   }div[id^="wpcf7-f4592-p"] button.cf7mls_next {   }div[id^="wpcf7-f4592-p"] button.cf7mls_back {   }div[id^="wpcf7-f4590-p"] button.cf7mls_next {   }div[id^="wpcf7-f4590-p"] button.cf7mls_back {   }div[id^="wpcf7-f4463-p"] button.cf7mls_next {   }div[id^="wpcf7-f4463-p"] button.cf7mls_back {   }div[id^="wpcf7-f4461-p"] button.cf7mls_next {   }div[id^="wpcf7-f4461-p"] button.cf7mls_back {   }div[id^="wpcf7-f4459-p"] button.cf7mls_next {   }div[id^="wpcf7-f4459-p"] button.cf7mls_back {   }div[id^="wpcf7-f4375-p"] button.cf7mls_next {   }div[id^="wpcf7-f4375-p"] button.cf7mls_back {   }div[id^="wpcf7-f3947-p"] button.cf7mls_next {   }div[id^="wpcf7-f3947-p"] button.cf7mls_back {   }div[id^="wpcf7-f3931-p"] button.cf7mls_next {   }div[id^="wpcf7-f3931-p"] button.cf7mls_back {   }div[id^="wpcf7-f2499-p"] button.cf7mls_next {   }div[id^="wpcf7-f2499-p"] button.cf7mls_back {   }div[id^="wpcf7-f2145-p"] button.cf7mls_next {   }div[id^="wpcf7-f2145-p"] button.cf7mls_back {   }div[id^="wpcf7-f1884-p"] button.cf7mls_next {   }div[id^="wpcf7-f1884-p"] button.cf7mls_back {   }div[id^="wpcf7-f1448-p"] button.cf7mls_next {   }div[id^="wpcf7-f1448-p"] button.cf7mls_back {   }div[id^="wpcf7-f27-p"] button.cf7mls_next {   }div[id^="wpcf7-f27-p"] button.cf7mls_back {   }</style>	<style type="text/css">
        .site-title,
        .site-description {
            position: absolute;
            clip: rect(1px, 1px, 1px, 1px);
        }
    </style>
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="mask-icon" href="fonts/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicon.ico">
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
        <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
        <div class="sticky-header" data-sticky-container>
            <div data-sticky data-options="marginTop:0;">
                <header id="masthead" class="site-header inverse" role="banner">
                    <div class="grid-container">

                        <div class="top-bar">
                            <div class="top-bar-left">
                                <div class="top-bar-title">
                                    <ul class="site-branding align-middle menu">
                                        <li class="site-logo"><a href="https://topcontent.com/ru/" class="custom-logo-link" rel="home"><img width="445" height="53" src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%20445%2053&#x27;%3E%3C/svg%3E" data-src="https://topcontent.com/wp-content/uploads/2018/10/TopContent_source_sans_pro2.png" class="custom-logo lazy" alt="Topcontent" data-srcset="https://topcontent.com/wp-content/uploads/2018/10/TopContent_source_sans_pro2.png 445w, https://topcontent.com/wp-content/uploads/2018/10/TopContent_source_sans_pro2-300x36.png 300w" data-sizes="(max-width: 445px) 100vw, 445px"></a></li>
                                        <li class="site-title">
                                            <a href="https://topcontent.com/ru/" rel="home">Topcontent</a>
                                        </li><!-- .site-title -->
                                    </ul><!-- .site-branding -->
                                </div><!-- .top-bar-title -->
                            </div><!-- .top-bar-left -->
                            <div class="top-bar-right show-for-large">
                                <nav id="site-navigation" role="navigation">
                                    <div class="menu-main-menu-ru-container"><ul class="dropdown menu" data-alignment="left" data-dropdown-menu><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-11843"><a href="#">Наши услуги</a>
                                                <ul class="dropdown menu" data-toggle>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-11844"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/kontent/">Контент для успеха вашего бизнеса</a>
                                                        <ul class="dropdown menu" data-toggle>
                                                            <li id="menu-item-11846" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11846"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/veb-kontent-dlya-sajtov/">Контент для веб сайта</a></li>
                                                            <li id="menu-item-11847" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11847"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/stati/">Статьи</a></li>
                                                            <li id="menu-item-12017" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12017"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/kontent-dlya-lendinga/">Контент для лендинга</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-11850"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/kontent-dlya-internet-magazinov-i-elektronnoj-kommertsii/">E-commerce контент</a>
                                                        <ul class="dropdown menu" data-toggle>
                                                            <li id="menu-item-12031" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12031"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/opisaniya-tovarov/">Описания товаров</a></li>
                                                            <li id="menu-item-12018" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12018"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/opisaniya-kategorij/">Описания категорий</a></li>
                                                            <li id="menu-item-11855" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11855"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/obzory-tovarov/">Обзоры товаров</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11856"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/kontent-dlya-affiliativnogo-marketinga/">Контент для аффилиативного маркетинга</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-12020"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/perevody/">Услуги по переводу</a>
                                                        <ul class="dropdown menu" data-toggle>
                                                            <li id="menu-item-11858" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11858"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/perevod-sajtov/">Перевод сайтов</a></li>
                                                            <li id="menu-item-11859" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11859"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/perevod-prilozhenij/">Перевод приложений</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-12016"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/igaming-kontent/">iGaming контент</a>
                                                        <ul class="dropdown menu" data-toggle>
                                                            <li id="menu-item-11862" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11862"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/obzory-kazino/">Обзоры казино</a></li>
                                                            <li id="menu-item-11861" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11861"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/obzory-kazino-igr/">Обзоры казино игр</a></li>
                                                            <li id="menu-item-11863" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11863"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/sportivnye-stavki-i-betting/">Спортивные ставки и беттинг</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11864"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/publikatsii-v-blogah/">Публикации в блогах</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12022"><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/turizm-i-puteshestviya/">Контент для туристических сайтов</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12148"><a href="#">Как заказать</a>
                                                <ul class="dropdown menu" data-toggle>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12025"><a href="https://topcontent.com/ru/kak-zakazat/sistema-samoobsluzhivaniya-self-service/">Система самообслуживания Self-Service</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12024"><a href="https://topcontent.com/ru/kak-zakazat/cms-integratsiya/">CMS интеграция</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11869"><a href="https://topcontent.com/ru/kak-zakazat/plagin-dlya-wpml/">Плагин для WPML</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13739"><a href="https://topcontent.com/ru/kak-zakazat/plagin-wordpress/">Плагин WordPress</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13738"><a href="https://topcontent.com/ru/kak-zakazat/avtomatizirovannaya-publikatsiya-kontenta/">Автоматизированная публикация контента</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11870"><a href="https://topcontent.com/ru/tseny/">Цены</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11871"><a href="https://topcontent.com/ru/pisatelyam/">Писателям</a></li>
                                            <li class="header-login menu-item menu-item-type-custom menu-item-object-custom menu-item-4570"><a href="https://app.topcontent.com/signin">Войти</a></li>
                                            <li class="button header-signup menu-item menu-item-type-custom menu-item-object-custom menu-item-4567"><a href="https://app.topcontent.com/signup">Регистрация</a></li>
                                        </ul></div>			</nav><!-- #site-navigation -->
                            </div><!-- .top-bar-right -->
                            <div class="lang-switcher">
                                <div class="globe-wrapper">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <nav id="site-navigation" role="navigation">
                                    <div class="menu-lang-switcher-container"><ul class="dropdown menu" data-alignment="left" data-dropdown-menu><li id="menu-item-12752" class="pll-parent-menu-item menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12752"><a href="#pll_switcher">RU</a>
                                                <ul class="dropdown menu" data-toggle>
                                                    <li id="menu-item-12752-en" class="lang-item lang-item-31 lang-item-en lang-item-first menu-item menu-item-type-custom menu-item-object-custom menu-item-12752-en"><a href="https://topcontent.com/buy-content-online/" hreflang="en-GB" lang="en-GB">EN</a></li>
                                                    <li id="menu-item-12752-no" class="lang-item lang-item-54 lang-item-no menu-item menu-item-type-custom menu-item-object-custom menu-item-12752-no"><a href="https://topcontent.com/no/kjop-innhold-pa-nett/" hreflang="nb-NO" lang="nb-NO">NO</a></li>
                                                    <li id="menu-item-12752-sv" class="lang-item lang-item-62 lang-item-sv menu-item menu-item-type-custom menu-item-object-custom menu-item-12752-sv"><a href="https://topcontent.com/sv/kop-content-online/" hreflang="sv-SE" lang="sv-SE">SV</a></li>
                                                    <li id="menu-item-12752-fi" class="lang-item lang-item-66 lang-item-fi menu-item menu-item-type-custom menu-item-object-custom menu-item-12752-fi"><a href="https://topcontent.com/fi/osta-sisaltoa-verkosta/" hreflang="fi" lang="fi">FI</a></li>
                                                </ul>
                                            </li>
                                        </ul></div>			</nav><!-- #site-navigation -->
                            </div>
                            <div class="top-bar-right menu-hamburger hide-for-large">
                                <ul class="menu">
                                    <li><a data-toggle="the-off-canvas"><i class="fa fa-lg fa-bars"></i></a></li>
                                </ul><!-- .menu -->
                            </div><!-- .menu-hamburger -->
                        </div><!-- .top-bar -->
                    </div><!-- .grid-container -->
                </header><!-- #masthead.site-header -->
            </div><!-- data-sticky -->
        </div><!-- .sticky-header data-sticky-container -->

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
        <footer class="footer">
            <div id="cookie-message" class="fixed-message hide" data-closable>
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="medium-8 cell text-center medium-text-left">
                            <p>Этот сайт использует файлы cookies. Продолжая использовать наш сайт, вы соглашаетесь с нашим использованием файлов cookies. </p>
                        </div><!-- medium-8.cell -->
                        <div class="medium-4 cell text-center medium-text-right">
                            <button class="small button" data-close><b>Принять</b></button>
                        </div><!-- .medium-4.cell -->
                    </div><!-- .grid-x -->
                </div><!-- .grid-container -->
            </div><!-- #cookie-message.fixed-message -->

            <div id="footer-wrapper">
                <div id="footer-widgets">
                    <div class="grid-container">
                        <div class="grid-x grid-padding-x  align-justify">
                            <section id="text-12" class="widget widget_text large-2 medium-3 small-6 cell">			<div class="textwidget"><div class="footer-company-wrapper">
                                        <p><img loading="lazy" class="alignnone size-full wp-image-11094 lazy" src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%20160%2024&#x27;%3E%3C/svg%3E" data-src="https://topcontent.com/wp-content/uploads/2018/10/cropped-TopContent_source_sans_pro2.png" alt="logo" width="160" height="24"></p>
                                        <div class="company-slogan">Качественный контент легко и быстро 🚀</div>
                                        <div class="footer_social_links"><a class="social-link social-link-facebook" href="https://www.facebook.com/TopcontentCOM/" target="_blank" rel="noopener"><br>
                                                <i class="fab fa-facebook-square social-icon-lg"></i></a><br>
                                            <a class="social-link social-link-twitter" href="https://twitter.com/topcontentcom" target="_blank" rel="noopener"><br>
                                                <i class="fab fa-twitter-square social-icon-lg "></i></a><br>
                                            <a class="social-link social-link-youtube" href="https://www.youtube.com/channel/UCEiAtlzYMvLOnh53Jx5Df_w" target="_blank" rel="noopener"><br>
                                                <i class="fab fa-youtube-square social-icon-lg"></i></a><br>
                                            <a class="social-link social-link-linkedin" href="https://www.linkedin.com/company/topcontentdotcom" target="_blank" rel="noopener"><br>
                                                <i class="fab fa-linkedin social-icon-lg"></i><br>
                                            </a></div>
                                    </div>
                                </div>
                            </section><section id="custom_html-29" class="widget_text widget widget_custom_html large-2 medium-3 small-6 cell"><div class="textwidget custom-html-widget"><div class="footer-link-wrapper"><a href="https://topcontent.com/ru/kupit-kontent-onlajn/">Как это работает</a></div>
                                    <div class="footer-link-wrapper show-link"><a href="https://topcontent.com/ru/pisatelyam/">Писателям</a></div>
                                    <div class="footer-widget-title">Услуги</div>
                                    <div class="widget-menu-wrapper">
                                        <ul class="widget menu">
                                            <li><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/kontent/">Контент</a></li>
                                            <li><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/kontent-dlya-internet-magazinov-i-elektronnoj-kommertsii/">E-commerce</a></li>
                                            <li><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/kontent-dlya-affiliativnogo-marketinga/">Аффилейт</a></li>
                                            <li><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/perevody/">Переводы</a></li>
                                            <li><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/igaming-kontent/">iGaming </a></li>
                                            <li><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/kontent-i-posty-dlya-blogov/">Публикации в блогах</a></li>
                                            <li><a href="https://topcontent.com/ru/nashi-uslugi/o-chem-my-pishem/turizm-i-puteshestviya/">Контент о туризме</a></li>
                                        </ul>
                                    </div></div></section><section id="custom_html-30" class="widget_text widget widget_custom_html large-2 medium-3 small-6 cell"><div class="textwidget custom-html-widget"><div class="footer-link-wrapper"><a href="https://topcontent.com/ru/tseny/">Цены</a></div>
                                    <div class="footer-link-wrapper show-link"><a href="https://topcontent.com/ru/kontakty/">Контакты</a></div>
                                    <div class="footer-widget-title">Как заказть</div>
                                    <div class="widget-menu-wrapper">
                                        <ul class="widget menu">
                                            <li><a href="https://topcontent.com/ru/kak-zakazat/sistema-samoobsluzhivaniya-self-service/">Система самообслуживания</a></li>
                                            <li><a href="https://topcontent.com/ru/kak-zakazat/cms-integratsiya/">CMS интеграция</a></li>
                                            <li><a href="https://topcontent.com/ru/kak-zakazat/plagin-dlya-wpml/">WPML плагин</a></li>
                                            <li><a href="https://topcontent.com/ru/kak-zakazat/plagin-wordpress/">Плагин WordPress</a></li>
                                        </ul>
                                    </div></div></section><section id="custom_html-31" class="widget_text widget widget_custom_html large-2 medium-3 small-6 cell"><div class="textwidget custom-html-widget"><div class="footer-link-wrapper hide-link"><a href="https://topcontent.com/ru/pisatelyam/">Писателям</a></div>
                                    <div class="footer-widget-title">Ресурсы</div>
                                    <div class="widget-menu-wrapper">
                                        <ul class="widget menu">
                                            <li><a href="https://topcontent.com/ru/blog-ru/">Блог Topcontent</a></li>
                                            <li><a href="https://help.topcontent.com/">Поддержка</a></li>
                                            <li><a href="https://topcontent.com/for-writers/blog/">Блог авторов</a></li>
                                            <li><a href="https://guides.topcontent.com/">Руководства для авторов</a></li>
                                        </ul>
                                    </div></div></section><section id="custom_html-32" class="widget_text widget widget_custom_html large-2 medium-3 small-6 cell"><div class="textwidget custom-html-widget"><div class="footer-link-wrapper hide-link"><a id="hp-contact" href="https://topcontent.com/ru/kontakty/">Контакты</a></div>
                                    <div class="footer-widget-title">Компания</div>
                                    <div class="widget-menu-wrapper">
                                        <ul class="widget menu">
                                            <li><a href="https://topcontent.com/ru/o-nas/">О нас</a></li>
                                            <li><a href="https://topcontent.com/ru/nash-podhod-k-rabote/">Подход к работе</a></li>
                                            <li><a href="https://topcontent.com/ru/vakansii/">Вакансии</a></li>
                                            <li><a href="https://topcontent.com/ru/partnerskaya-programma-topcontent/">Партнерская Программа</a></li>
                                        </ul>
                                    </div></div></section>			</div><!-- .grid-x -->
                    </div><!-- .grid-container -->
                </div><!-- #footer-widgets -->
                <div class="bottom-footer">
                    <div class="grid-container">
                        <div class="grid-x grid-padding-x  align-justify">
                            <div class="large-5 medium-6 small-8 cell">
					<span>
						© Topcontent
					</span>
                                <div class="footer-menu-wrapper">
                                    <nav id="site-navigation" role="navigation">
                                        <div class="menu-bottom-menu-ru-container"><ul class="dropdown menu footer-menu-lang" data-alignment="left" data-dropdown-menu><li id="menu-item-12765" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12765"><a href="https://topcontent.com/privacy-policy/">Privacy</a></li>
                                                <li id="menu-item-12766" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12766"><a href="https://topcontent.com/terms-and-conditions/">Legal</a></li>
                                                <li id="menu-item-12767" class="pll-parent-menu-item menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12767"><a href="#pll_switcher">RU</a>
                                                    <ul class="dropdown menu" data-toggle>
                                                        <li id="menu-item-12767-en" class="lang-item lang-item-31 lang-item-en lang-item-first menu-item menu-item-type-custom menu-item-object-custom menu-item-12767-en"><a href="https://topcontent.com/buy-content-online/" hreflang="en-GB" lang="en-GB">EN</a></li>
                                                        <li id="menu-item-12767-no" class="lang-item lang-item-54 lang-item-no menu-item menu-item-type-custom menu-item-object-custom menu-item-12767-no"><a href="https://topcontent.com/no/kjop-innhold-pa-nett/" hreflang="nb-NO" lang="nb-NO">NO</a></li>
                                                        <li id="menu-item-12767-sv" class="lang-item lang-item-62 lang-item-sv menu-item menu-item-type-custom menu-item-object-custom menu-item-12767-sv"><a href="https://topcontent.com/sv/kop-content-online/" hreflang="sv-SE" lang="sv-SE">SV</a></li>
                                                        <li id="menu-item-12767-fi" class="lang-item lang-item-66 lang-item-fi menu-item menu-item-type-custom menu-item-object-custom menu-item-12767-fi"><a href="https://topcontent.com/fi/osta-sisaltoa-verkosta/" hreflang="fi" lang="fi">FI</a></li>
                                                    </ul>
                                                </li>
                                            </ul></div>						</nav><!-- #site-navigation -->
                                </div>
                            </div>
                            <div id="custom_html-12" class="widget_text widget widget_custom_html large-4 medium-6 small-4 cell"><div class="textwidget custom-html-widget"><div class="payments-footer-wrapper">
                                        <div class="footer_social_links hide-social-links"><a class="social-link social-link-facebook" href="https://www.facebook.com/TopcontentCOM/" target="_blank" rel="noopener">
                                                <i class="fab fa-facebook-square social-icon-lg"></i></a>
                                            <a class="social-link social-link-twitter" href="https://twitter.com/topcontentcom" target="_blank" rel="noopener">
                                                <i class="fab fa-twitter-square social-icon-lg "></i></a>
                                            <a class="social-link social-link-youtube" href="https://www.youtube.com/channel/UCEiAtlzYMvLOnh53Jx5Df_w" target="_blank" rel="noopener">
                                                <i class="fab fa-youtube-square social-icon-lg"></i></a>
                                            <a class="social-link social-link-linkedin" href="https://www.linkedin.com/company/topcontentdotcom" target="_blank" rel="noopener">
                                                <i class="fab fa-linkedin social-icon-lg"></i>
                                            </a></div>
                                        <div class="we-accept">Мы принимаем</div>
                                        <div class="payments-logos"><img class="alignnone size-full wp-image-11105 lazy" src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%2029%2016&#x27;%3E%3C/svg%3E" data-src="https://topcontent.com/wp-content/uploads/2020/05/image-15.svg" alt width="29" height="16">
                                            <img class="alignnone size-full wp-image-11106 lazy" src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%2025%2016&#x27;%3E%3C/svg%3E" data-src="https://topcontent.com/wp-content/uploads/2020/05/mc_symbol-1.svg" alt width="25" height="16">
                                            <img class="alignnone size-full wp-image-11107 lazy" src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%2064%2016&#x27;%3E%3C/svg%3E" data-src="https://topcontent.com/wp-content/uploads/2020/05/pp-logo-150px-1.svg" alt width="64" height="16"></div>
                                    </div></div></div>							</div><!-- .grid-x -->
                    </div><!-- .grid-container -->
                </div><!-- #footer-widgets -->
            </div><!-- #footer-wrapper -->
        </footer></div><!-- .off-canvas-content -->
</div><!-- #page.off-canvas-wrapper -->

<script type="text/javascript" id="ugb-block-frontend-js-js-extra">
    /* <![CDATA[ */
    var stackable = {"restUrl":"https:\/\/topcontent.com\/wp-json\/"};
    /* ]]> */
</script>
<script type="text/javascript" id="Popup.js-js-before">
    var sgpbPublicUrl = "https:\/\/topcontent.com\/wp-content\/plugins\/popup-builder\/public\/";
    var SGPB_JS_LOCALIZATION = {"imageSupportAlertMessage":"Only image files supported","areYouSure":"Are you sure?","addButtonSpinner":"L","audioSupportAlertMessage":"Only audio files supported (e.g.: mp3, wav, m4a, ogg)","publishPopupBeforeElementor":"Please, publish the popup before starting to use Elementor with it!","publishPopupBeforeDivi":"Please, publish the popup before starting to use Divi Builder with it!","closeButtonAltText":"Close"};
</script>
<script type="text/javascript" id="PopupBuilder.js-js-before">
    var SGPB_POPUP_PARAMS = {"popupTypeAgeRestriction":"ageRestriction","defaultThemeImages":{"1":"https:\/\/topcontent.com\/wp-content\/plugins\/popup-builder\/public\/img\/theme_1\/close.png","2":"https:\/\/topcontent.com\/wp-content\/plugins\/popup-builder\/public\/img\/theme_2\/close.png","3":"https:\/\/topcontent.com\/wp-content\/plugins\/popup-builder\/public\/img\/theme_3\/close.png","5":"https:\/\/topcontent.com\/wp-content\/plugins\/popup-builder\/public\/img\/theme_5\/close.png","6":"https:\/\/topcontent.com\/wp-content\/plugins\/popup-builder\/public\/img\/theme_6\/close.png"},"homePageUrl":"https:\/\/topcontent.com\/","isPreview":false,"convertedIdsReverse":[],"dontShowPopupExpireTime":365,"conditionalJsClasses":[],"disableAnalyticsGeneral":false};
    var SGPB_JS_PACKAGES = {"packages":{"current":1,"free":1,"silver":2,"gold":3,"platinum":4},"extensions":{"geo-targeting":false,"advanced-closing":false}};
    var SGPB_JS_PARAMS = {"ajaxUrl":"https:\/\/topcontent.com\/wp-admin\/admin-ajax.php","nonce":"ce905c50df"};
</script>
<script type="text/javascript">
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        console.log(event.detail.contactFormId)
        if ( '10465' == event.detail.contactFormId ) {
            console.log('sent')
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({'event': 'quote_form_submitted'});
        }
    }, false );
</script>
<div class="sgpb-main-popup-data-container-19824" style="position:fixed;opacity: 0;filter: opacity(0%);transform: scale(0);">
    <div class="sg-popup-builder-content" id="sg-popup-content-wrapper-19824" data-id="19824" data-events="[{" param":"click","operator":"clickActionCustomClass","value":"pricing-page-pop-up","hiddenOption":[]}]" data-options="YTo1MDp7czoyNjoic2dwYi1mbG9hdGluZy1idXR0b24tc3R5bGUiO3M6NjoiY29ybmVyIjtzOjI5OiJzZ3BiLWZsb2F0aW5nLWJ1dHRvbi1wb3NpdGlvbiI7czoxMjoiYm90dG9tLXJpZ2h0IjtzOjk6InNncGItdHlwZSI7czo0OiJodG1sIjtzOjE1OiJzZ3BiLWlzLXByZXZpZXciO3M6MToiMCI7czoxNDoic2dwYi1pcy1hY3RpdmUiO3M6NzoiY2hlY2tlZCI7czozNDoic2dwYi1iZWhhdmlvci1hZnRlci1zcGVjaWFsLWV2ZW50cyI7YToxOntpOjA7YToxOntpOjA7YToxOntzOjU6InBhcmFtIjtzOjEyOiJzZWxlY3RfZXZlbnQiO319fXM6MjA6InNncGItY29udGVudC1wYWRkaW5nIjtzOjI6IjEyIjtzOjE4OiJzZ3BiLXBvcHVwLXotaW5kZXgiO3M6NDoiOTk5OSI7czoxNzoic2dwYi1wb3B1cC10aGVtZXMiO3M6MTI6InNncGItdGhlbWUtNiI7czoyNToic2dwYi1vdmVybGF5LWN1c3RvbS1jbGFzcyI7czoxODoic2dwYi1wb3B1cC1vdmVybGF5IjtzOjE4OiJzZ3BiLW92ZXJsYXktY29sb3IiO3M6MDoiIjtzOjIwOiJzZ3BiLW92ZXJsYXktb3BhY2l0eSI7czozOiIwLjgiO3M6MjU6InNncGItY29udGVudC1jdXN0b20tY2xhc3MiO3M6MTY6InNnLXBvcHVwLWNvbnRlbnQiO3M6MjY6InNncGItYmFja2dyb3VuZC1pbWFnZS1tb2RlIjtzOjk6Im5vLXJlcGVhdCI7czoxMjoic2dwYi1lc2Mta2V5IjtzOjI6Im9uIjtzOjI0OiJzZ3BiLWVuYWJsZS1jbG9zZS1idXR0b24iO3M6Mjoib24iO3M6MjM6InNncGItY2xvc2UtYnV0dG9uLWRlbGF5IjtzOjE6IjAiO3M6MjY6InNncGItY2xvc2UtYnV0dG9uLXBvc2l0aW9uIjtzOjg6InRvcFJpZ2h0IjtzOjI0OiJzZ3BiLWJ1dHRvbi1wb3NpdGlvbi10b3AiO3M6MjoiMTgiO3M6MjY6InNncGItYnV0dG9uLXBvc2l0aW9uLXJpZ2h0IjtzOjI6IjE4IjtzOjI3OiJzZ3BiLWJ1dHRvbi1wb3NpdGlvbi1ib3R0b20iO3M6MToiMCI7czoyNToic2dwYi1idXR0b24tcG9zaXRpb24tbGVmdCI7czowOiIiO3M6MTc6InNncGItYnV0dG9uLWltYWdlIjtzOjY0OiJodHRwczovL3RvcGNvbnRlbnQuY29tL3dwLWNvbnRlbnQvdXBsb2Fkcy8yMDIwLzAxL0ljb24tYmxhY2sucG5nIjtzOjIzOiJzZ3BiLWJ1dHRvbi1pbWFnZS13aWR0aCI7czoyOiIxNSI7czoyNDoic2dwYi1idXR0b24taW1hZ2UtaGVpZ2h0IjtzOjI6IjE1IjtzOjE3OiJzZ3BiLWJvcmRlci1jb2xvciI7czo3OiIjMDAwMDAwIjtzOjE4OiJzZ3BiLWJvcmRlci1yYWRpdXMiO3M6MToiMCI7czoyMzoic2dwYi1ib3JkZXItcmFkaXVzLXR5cGUiO3M6MToiJSI7czoxNjoic2dwYi1idXR0b24tdGV4dCI7czo1OiJDbG9zZSI7czoxODoic2dwYi1vdmVybGF5LWNsaWNrIjtzOjI6Im9uIjtzOjI1OiJzZ3BiLXBvcHVwLWRpbWVuc2lvbi1tb2RlIjtzOjE0OiJyZXNwb25zaXZlTW9kZSI7czozMzoic2dwYi1yZXNwb25zaXZlLWRpbWVuc2lvbi1tZWFzdXJlIjtzOjQ6ImF1dG8iO3M6MTA6InNncGItd2lkdGgiO3M6NToiNjQwcHgiO3M6MTE6InNncGItaGVpZ2h0IjtzOjU6IjQ4MHB4IjtzOjE0OiJzZ3BiLW1heC13aWR0aCI7czowOiIiO3M6MTU6InNncGItbWF4LWhlaWdodCI7czowOiIiO3M6MTQ6InNncGItbWluLXdpZHRoIjtzOjM6IjEyMCI7czoxNToic2dwYi1taW4taGVpZ2h0IjtzOjA6IiI7czoyNjoic2dwYi1vcGVuLWFuaW1hdGlvbi1lZmZlY3QiO3M6OToiTm8gZWZmZWN0IjtzOjI3OiJzZ3BiLWNsb3NlLWFuaW1hdGlvbi1lZmZlY3QiO3M6OToiTm8gZWZmZWN0IjtzOjI5OiJzZ3BiLWVuYWJsZS1jb250ZW50LXNjcm9sbGluZyI7czoyOiJvbiI7czoxNjoic2dwYi1wb3B1cC1vcmRlciI7czoxOiIwIjtzOjE2OiJzZ3BiLXBvcHVwLWRlbGF5IjtzOjE6IjAiO3M6Nzoic2dwYi1qcyI7czoyOiJKUyI7czo4OiJzZ3BiLWNzcyI7czozOiJDU1MiO3M6MTI6InNncGItcG9zdC1pZCI7czo1OiIxOTgyNCI7czoyNToic2dwYi1lbmFibGUtcG9wdXAtb3ZlcmxheSI7czoyOiJvbiI7czoyMjoic2dwYi1idXR0b24taW1hZ2UtZGF0YSI7czo2NDoiaHR0cHM6Ly90b3Bjb250ZW50LmNvbS93cC1jb250ZW50L3VwbG9hZHMvMjAyMC8wMS9JY29uLWJsYWNrLnBuZyI7czoyNjoic2dwYi1iYWNrZ3JvdW5kLWltYWdlLWRhdGEiO3M6MDoiIjtzOjE0OiJzZ3BiQ29uZGl0aW9ucyI7Tjt9">
    <div class="sgpb-popup-builder-content-19824 sgpb-popup-builder-content-html"><div class="sgpb-main-html-content-wrapper">
            <div class="wp-block-contact-form-7-contact-form-selector"><div role="form" class="wpcf7" id="wpcf7-f19954-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                    <form action="/ru/kupit-kontent-onlajn/#wpcf7-f19954-o1" method="post" class="wpcf7-form init" enctype="multipart/form-data" novalidate="novalidate" data-status="init">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="19954">
                            <input type="hidden" name="_wpcf7_version" value="5.5.1">
                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f19954-o1">
                            <input type="hidden" name="_wpcf7_container_post" value="0">
                            <input type="hidden" name="_wpcf7_posted_data_hash" value>
                            <input type="hidden" name="_wpcf7cf_hidden_group_fields" value>
                            <input type="hidden" name="_wpcf7cf_hidden_groups" value>
                            <input type="hidden" name="_wpcf7cf_visible_groups" value>
                            <input type="hidden" name="_wpcf7cf_repeaters" value="[]">
                            <input type="hidden" name="_wpcf7cf_steps" value="{}">
                            <input type="hidden" name="_wpcf7cf_options" value="{" form_id":19954,"conditions":[],"settings":{"animation":"yes","animation_intime":200,"animation_outtime":200,"conditions_ui":"normal","notice_dismissed":false,"notice_dismissed_rollback-cf7-5.3.2":true}}">
                        </div>
                        <center><h2>Давайте начнем</h2></center>
                        <div class="price-page-text-left"><p>Расскажите нам о ваших потребностях контента, и мы свяжемся с вами.</p></div>
                        <span class="wpcf7-form-control-wrap your-lastname"><input type="text" name="your-lastname" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Полное имя"></span>
                        <span class="wpcf7-form-control-wrap your-company"><input type="text" name="your-company" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Компания"></span>
                        <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail"></span>
                        <div class="price-page-text-left"><p>Детали вашего запроса:</p></div>
                        <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Какой тип контента вам нужно, сколько статей / слов, и на каких языках / язык комбинаций и т.д."></textarea></span>
                        <input type="hidden" name="utm" value class="wpcf7-form-control wpcf7-hidden"><span id="wpcf7-62d7ec408471b-wrapper" class="wpcf7-form-control-wrap website-wrap" style="display:none !important; visibility:hidden !important;"><label for="website" class="hp-message">Please leave this field empty.</label><input id="website" class="wpcf7-form-control wpcf7-text" type="text" name="website" value size="40" tabindex="-1" autocomplete="new-password"></span>
                        <div>Ваш файл - Максимальный размер файла 40Мб <span class="wpcf7-form-control-wrap your-file"><input type="file" name="your-file" size="40" class="wpcf7-form-control wpcf7-file" accept=".doc,.docx,.xls,.xlsx,.pages,.pdf,.txt,.rtf,.odt" aria-invalid="false"></span><br><br></div>
                        <input type="submit" value="Отправить" class="wpcf7-form-control has-spinner wpcf7-submit large expanded button pop-up_form_btn"><p style="display: none !important;"><label>Δ<textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js" name="_wpcf7_ak_js" value="1658318352256"><script>document.getElementById( "ak_js" ).setAttribute( "value", ( new Date() ).getTime() );</script></p><div class="wpcf7-response-output" aria-hidden="true"></div></form></div></div>



            <p></p>
        </div></div>
</div>
</div>
<script type="text/javascript" id="cf7mls-js-extra">
    /* <![CDATA[ */
    var cf7mls_object = {"ajax_url":"https:\/\/topcontent.com\/wp-admin\/admin-ajax.php","cf7mls_error_message":"","scroll_step":"true","disable_enter_key":"false","check_step_before_submit":"true"};
    /* ]]> */
</script>
<script type="text/javascript" id="contact-form-7-js-extra">
    /* <![CDATA[ */
    var wpcf7 = {"api":{"root":"https:\/\/topcontent.com\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
    /* ]]> */
</script>
<script type="text/javascript" id="wpcf7cf-scripts-js-extra">
    /* <![CDATA[ */
    var wpcf7cf_global_settings = {"ajaxurl":"https:\/\/topcontent.com\/wp-admin\/admin-ajax.php"};
    /* ]]> */
</script>
<script type="text/javascript">
    (function() {
        var expirationDate = new Date();
        expirationDate.setTime( expirationDate.getTime() + 31536000 * 1000 );
        document.cookie = "pll_language=ru; expires=" + expirationDate.toUTCString() + "; path=/; secure; SameSite=Lax";
    }());
</script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {

        for (let i = 0; i < document.forms.length; ++i) {
            let form = document.forms[i];
            if ($(form).attr("method") != "get") { $(form).append('<input type="hidden" name="gbPueXoafBQxhD" value="uXm5jly" />'); }
            if ($(form).attr("method") != "get") { $(form).append('<input type="hidden" name="eyYWBdhrRSXKnZ" value="ePFn4BaMx" />'); }
        }

        $(document).on('submit', 'form', function () {
            if ($(this).attr("method") != "get") { $(this).append('<input type="hidden" name="gbPueXoafBQxhD" value="uXm5jly" />'); }
            if ($(this).attr("method") != "get") { $(this).append('<input type="hidden" name="eyYWBdhrRSXKnZ" value="ePFn4BaMx" />'); }
            return true;
        });

        jQuery.ajaxSetup({
            beforeSend: function (e, data) {

                if (data.type !== 'POST') return;

                if (typeof data.data === 'object' && data.data !== null) {
                    data.data.append("gbPueXoafBQxhD", "uXm5jly");
                    data.data.append("eyYWBdhrRSXKnZ", "ePFn4BaMx");
                }
                else {
                    data.data = data.data + '&gbPueXoafBQxhD=uXm5jly&eyYWBdhrRSXKnZ=ePFn4BaMx';
                }
            }
        });

    });
</script>
<script>
    const url = new URL(window.location)
    const affIdFromUrl = url.searchParams.get('aff_id')
    if (affIdFromUrl) localStorage.setItem('affId', affIdFromUrl)

    const affIdSaved = localStorage.getItem('affId')
    if (affIdSaved) {
        $('a[href^="https://app.topcontent.com"]').each(function () {
            const url = new URL(this.href)
            url.searchParams.append('aff_id', affIdSaved)
            this.href = url.href
        })
    }
</script>
<script>
    ll = new LazyLoad({
        elements_selector: ".lazy",
    });
</script>

<script>window.w3tc_lazyload=1,window.lazyLoadOptions={elements_selector:".lazy",callback_loaded:function(t){var e;try{e=new CustomEvent("w3tc_lazyload_loaded",{detail:{e:t}})}catch(a){(e=document.createEvent("CustomEvent")).initCustomEvent("w3tc_lazyload_loaded",!1,!1,{e:t})}window.dispatchEvent(e)}}</script><script async src="js/lazyload.min_1.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>