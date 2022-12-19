<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\web\View;
use \app\widgets\LanguageSwitcher;

/**
 * @var $this View
 */
?>
<a class="skip-link screen-reader-text" href="#main">Skip to content</a>
<div class="sticky-header" data-sticky-container>
    <div data-sticky data-options="marginTop:0;">
        <header id="masthead"
                class="site-header inverse siteHeader  <?= ArrayHelper::getValue($this->params, 'isMainPage', false) ? '' : 'siteHeader__noMain' ?>"
                role="banner">
            <div class="grid-container">

                <div class="top-bar">
                    <div class="top-bar-left">
                        <div class="top-bar-title">
                            <ul class="site-branding align-middle menu">
                                <li class="site-logo"><a href="<?= Url::to('/') ?>"
                                                         class="custom-logo-link" rel="home"><img width="445"
                                                                                                  height="53"
                                                                                                  src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%20445%2053&#x27;%3E%3C/svg%3E"
                                                                                                  data-src="/images/TopContent_source_sans_pro2.png"
                                                                                                  class="custom-logo lazy"
                                                                                                  alt="Topcontent"
                                                                                                  data-srcset="/images/TopContent_source_sans_pro2.png 445w, /images/TopContent_source_sans_pro2-300x36.png 300w"
                                                                                                  data-sizes="(max-width: 445px) 100vw, 445px"></a>
                                </li>
                                <li class="site-title">
                                    <a href="<?= Yii::$app->urlManager->baseUrl ?>" rel="home">Topcontent</a>
                                </li><!-- .site-title -->
                            </ul><!-- .site-branding -->
                        </div><!-- .top-bar-title -->
                    </div><!-- .top-bar-left -->
                    <div class="top-bar-right show-for-large">
                        <nav id="site-navigation" role="navigation">
                            <div class="menu-main-menu-ru-container">
                                <ul class="dropdown menu" data-alignment="left" data-dropdown-menu>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-11843">
                                        <a href="#">Наши услуги</a>
                                        <ul class="dropdown menu" data-toggle>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-11844">
                                                <a href="<?= Yii::$app->urlManager->baseUrl ?>">Контент для успеха
                                                    вашего бизнеса</a>
                                                <ul class="dropdown menu" data-toggle>
                                                    <li id="menu-item-11846"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11846">
                                                        <a href="<?= Yii::$app->urlManager->baseUrl ?>">Контент для веб
                                                            сайта</a></li>
                                                    <li id="menu-item-11847"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11847">
                                                        <a href="<?= Yii::$app->urlManager->baseUrl ?>">Статьи</a></li>
                                                    <li id="menu-item-12017"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12017">
                                                        <a href="<?= Yii::$app->urlManager->baseUrl ?>">Контент для
                                                            лендинга</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-11850">
                                                <a href="<?= Url::to('/') ?>">E-commerce контент</a>
                                                <ul class="dropdown menu" data-toggle>
                                                    <li id="menu-item-12031"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12031">
                                                        <a href="<?= Url::to('/') ?>">Описания товаров</a></li>
                                                    <li id="menu-item-12018"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12018">
                                                        <a href="<?= Url::to('/') ?>">Описания категорий</a></li>
                                                    <li id="menu-item-11855"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11855">
                                                        <a href="<?= Url::to('/') ?>">Обзоры товаров</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11856">
                                                <a href="<?= Url::to('/') ?>">Контент для аффилиативного маркетинга</a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-12020">
                                                <a href="<?= Url::to('/') ?>">Услуги по переводу</a>
                                                <ul class="dropdown menu" data-toggle>
                                                    <li id="menu-item-11858"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11858">
                                                        <a href="<?= Url::to('/') ?>">Перевод сайтов</a></li>
                                                    <li id="menu-item-11859"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11859">
                                                        <a href="<?= Url::to('/') ?>">Перевод приложений</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-12016">
                                                <a href="<?= Url::to('/') ?>">iGaming контент</a>
                                                <ul class="dropdown menu" data-toggle>
                                                    <li id="menu-item-11862"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11862">
                                                        <a href="<?= Url::to('/') ?>">Обзоры казино</a></li>
                                                    <li id="menu-item-11861"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11861">
                                                        <a href="<?= Url::to('/') ?>">Обзоры казино игр</a></li>
                                                    <li id="menu-item-11863"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11863">
                                                        <a href="<?= Url::to('/') ?>">Спортивные ставки и беттинг</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11864">
                                                <a href="<?= Url::to('/') ?>">Публикации в блогах</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12022">
                                                <a href="<?= Url::to('/') ?>">Контент для туристических сайтов</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12148">
                                        <a href="#">Как заказать</a>
                                        <ul class="dropdown menu" data-toggle>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12025">
                                                <a href="<?= Url::to('/') ?>">Система самообслуживания Self-Service</a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12024">
                                                <a href="<?= Url::to('/') ?>">CMS интеграция</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11869">
                                                <a href="<?= Url::to('/') ?>">Плагин для WPML</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13739">
                                                <a href="<?= Url::to('/') ?>">Плагин WordPress</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13738">
                                                <a href="<?= Url::to('/') ?>">Автоматизированная публикация контента</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11870">
                                        <a href="<?= Url::to('/') ?>">Цены</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11871">
                                        <a href="<?= Url::to('/') ?>">Писателям</a></li>
                                    <li class="header-login menu-item menu-item-type-custom menu-item-object-custom menu-item-4570">
                                        <a href="<?= Url::to('/') ?>">Войти</a></li>
                                    <li class="button header-signup menu-item menu-item-type-custom menu-item-object-custom menu-item-4567">
                                        <a href="<?= Url::to('/') ?>">Регистрация</a></li>
                                </ul>
                            </div>
                        </nav><!-- #site-navigation -->
                    </div><!-- .top-bar-right -->
                    <div class="lang-switcher">
                        <nav id="site-navigation" role="navigation">
                            <div class="menu-lang-switcher-container">
                                <ul class="dropdown menu" data-alignment="left" data-dropdown-menu>
                                    <?= LanguageSwitcher::widget([
                                            'icon' => true
                                    ]) ?>
                                </ul>
                            </div>
                        </nav><!-- #site-navigation -->
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

