<?php

use app\widgets\LanguageSwitcher;
use yii\helpers\Url;
use yii\web\View;

/**
 * @var $this View
 */
?>

<section id="signup-footer" class="signup-section inverse">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-8 cell text-center medium-text-left">
                <h2 class="h3 section-headline">Заказать онлайн</h2>
            </div><!-- .medium-8.cell -->
            <div class="medium-4 cell text-center large-text-right">
                <a id="footer-ordercontent-cta" class="inverse button" href="<?= Url::to(['login/index']) ?>">
                    Зарегистрируйтесь и закажите контент
                </a>
            </div><!-- .medium-4.cell -->
        </div><!-- .grid-x -->
    </div><!-- .grid-container -->
</section><!-- #signup-footer.signup-section -->

<footer class="footer">
    <div id="cookie-message" class="fixed-message hide" data-closable>
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="medium-8 cell text-center medium-text-left">
                    <p>Этот сайт использует файлы cookies. Продолжая использовать наш сайт, вы соглашаетесь с нашим
                        использованием файлов cookies. </p>
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
                    <section id="text-12" class="widget widget_text large-2 medium-3 small-6 cell">
                        <div class="textwidget">
                            <div class="footer-company-wrapper">
                                <p><img loading="lazy" class="alignnone size-full wp-image-11094 lazy"
                                        src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%20160%2024&#x27;%3E%3C/svg%3E"
                                        data-src="/images/cropped-TopContent_source_sans_pro2.png" alt="logo"
                                        width="160" height="24"></p>
                                <div class="company-slogan">Качественный контент легко и быстро 🚀</div>
                                <div class="footer_social_links"><a class="social-link social-link-facebook"
                                                                    href="<?= Url::to('/') ?>" target="_blank"
                                                                    rel="noopener"><br>
                                        <i class="fab fa-facebook-square social-icon-lg"></i></a><br>
                                    <a class="social-link social-link-twitter" href="<?= Url::to('/') ?>"
                                       target="_blank" rel="noopener"><br>
                                        <i class="fab fa-twitter-square social-icon-lg "></i></a><br>
                                    <a class="social-link social-link-youtube" href="h<?= Url::to('/') ?>"
                                       target="_blank" rel="noopener"><br>
                                        <i class="fab fa-youtube-square social-icon-lg"></i></a><br>
                                    <a class="social-link social-link-linkedin" href="<?= Url::to('/') ?>"
                                       target="_blank" rel="noopener"><br>
                                        <i class="fab fa-linkedin social-icon-lg"></i><br>
                                    </a></div>
                            </div>
                        </div>
                    </section>
                    <section id="custom_html-29"
                             class="widget_text widget widget_custom_html large-2 medium-3 small-6 cell">
                        <div class="textwidget custom-html-widget">
                            <div class="footer-link-wrapper"><a href="<?= Url::to('/') ?>">Как это работает</a></div>
                            <div class="footer-link-wrapper show-link"><a href="<?= Url::to('/') ?>">Писателям</a></div>
                            <div class="footer-widget-title">Услуги</div>
                            <div class="widget-menu-wrapper">
                                <ul class="widget menu">
                                    <li><a href="<?= Url::to('/') ?>">Контент</a></li>
                                    <li><a href="<?= Url::to('/') ?>">E-commerce</a></li>
                                    <li><a href="<?= Url::to('/') ?>">Аффилейт</a></li>
                                    <li><a href="<?= Url::to('/') ?>">Переводы</a></li>
                                    <li><a href="<?= Url::to('/') ?>">iGaming </a></li>
                                    <li><a href="<?= Url::to('/') ?>">Публикации в блогах</a></li>
                                    <li><a href="<?= Url::to('/') ?>">Контент о туризме</a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section id="custom_html-30"
                             class="widget_text widget widget_custom_html large-2 medium-3 small-6 cell">
                        <div class="textwidget custom-html-widget">
                            <div class="footer-link-wrapper"><a href="<?= Url::to('/') ?>">Цены</a></div>
                            <div class="footer-link-wrapper show-link"><a href="<?= Url::to('/') ?>">Контакты</a></div>
                            <div class="footer-widget-title">Как заказть</div>
                            <div class="widget-menu-wrapper">
                                <ul class="widget menu">
                                    <li><a href="<?= Url::to('/') ?>">Система самообслуживания</a></li>
                                    <li><a href="<?= Url::to('/') ?>">CMS интеграция</a></li>
                                    <li><a href="<?= Url::to('/') ?>">WPML плагин</a></li>
                                    <li><a href="<?= Url::to('/') ?>">Плагин WordPress</a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section id="custom_html-31"
                             class="widget_text widget widget_custom_html large-2 medium-3 small-6 cell">
                        <div class="textwidget custom-html-widget">
                            <div class="footer-link-wrapper hide-link"><a href="<?= Url::to('/') ?>">Писателям</a></div>
                            <div class="footer-widget-title">Ресурсы</div>
                            <div class="widget-menu-wrapper">
                                <ul class="widget menu">
                                    <li><a href="<?= Url::to('/') ?>">Блог Topcontent</a></li>
                                    <li><a href="<?= Url::to('/') ?>">Поддержка</a></li>
                                    <li><a href="<?= Url::to('/') ?>">Блог авторов</a></li>
                                    <li><a href="<?= Url::to('/') ?>">Руководства для авторов</a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section id="custom_html-32"
                             class="widget_text widget widget_custom_html large-2 medium-3 small-6 cell">
                        <div class="textwidget custom-html-widget">
                            <div class="footer-link-wrapper hide-link"><a id="hp-contact" href="<?= Url::to('/') ?>">Контакты</a>
                            </div>
                            <div class="footer-widget-title">Компания</div>
                            <div class="widget-menu-wrapper">
                                <ul class="widget menu">
                                    <li><a href="<?= Url::to('/') ?>">О нас</a></li>
                                    <li><a href="<?= Url::to('/') ?>">Подход к работе</a></li>
                                    <li><a href="<?= Url::to('/') ?>">Вакансии</a></li>
                                    <li><a href="<?= Url::to('/') ?>">Партнерская Программа</a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div><!-- .grid-x -->
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
                                <div class="menu-bottom-menu-ru-container">
                                    <ul class="dropdown menu footer-menu-lang" data-alignment="left" data-dropdown-menu>
                                        <li id="menu-item-12765"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12765">
                                            <a href="<?= Url::to('/') ?>">Privacy</a></li>
                                        <li id="menu-item-12766"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12766">
                                            <a href="<?= Url::to('/') ?>">Legal</a></li>
                                        <?= LanguageSwitcher::widget() ?>
                                    </ul>
                                </div>
                            </nav><!-- #site-navigation -->
                        </div>
                    </div>
                    <div id="custom_html-12"
                         class="widget_text widget widget_custom_html large-4 medium-6 small-4 cell">
                        <div class="textwidget custom-html-widget">
                            <div class="payments-footer-wrapper">
                                <div class="footer_social_links hide-social-links"><a
                                            class="social-link social-link-facebook" href="<?= Url::to('/') ?>"
                                            target="_blank" rel="noopener">
                                        <i class="fab fa-facebook-square social-icon-lg"></i></a>
                                    <a class="social-link social-link-twitter" href="<?= Url::to('/') ?>"
                                       target="_blank" rel="noopener">
                                        <i class="fab fa-twitter-square social-icon-lg "></i></a>
                                    <a class="social-link social-link-youtube" href="<?= Url::to('/') ?>"
                                       target="_blank" rel="noopener">
                                        <i class="fab fa-youtube-square social-icon-lg"></i></a>
                                    <a class="social-link social-link-linkedin" href="<?= Url::to('/') ?>"
                                       target="_blank" rel="noopener">
                                        <i class="fab fa-linkedin social-icon-lg"></i>
                                    </a></div>
                                <div class="we-accept">Мы принимаем</div>
                                <div class="payments-logos"><img class="alignnone size-full wp-image-11105 lazy"
                                                                 src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%2029%2016&#x27;%3E%3C/svg%3E"
                                                                 data-src="/images/image-15.svg" alt width="29"
                                                                 height="16">
                                    <img class="alignnone size-full wp-image-11106 lazy"
                                         src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%2025%2016&#x27;%3E%3C/svg%3E"
                                         data-src="/images/mc_symbol-1.svg" alt width="25" height="16">
                                    <img class="alignnone size-full wp-image-11107 lazy"
                                         src="data:image/svg+xml,%3Csvg%20xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%20viewBox=&#x27;0%200%2064%2016&#x27;%3E%3C/svg%3E"
                                         data-src="/images/pp-logo-150px-1.svg" alt width="64" height="16"></div>
                            </div>
                        </div>
                    </div>
                </div><!-- .grid-x -->
            </div><!-- .grid-container -->
        </div><!-- #footer-widgets -->
    </div><!-- #footer-wrapper -->
</footer>
