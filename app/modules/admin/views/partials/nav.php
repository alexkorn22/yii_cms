<?php

use app\modules\admin\helpers\Main;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use app\modules\admin\widgets\Menu;

?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-dark-info">
	<!-- Brand Logo -->
	<a href="<?= Yii::$app->homeUrl; ?>" target="_blank" class="brand-link">
		<span class="brand-image" style="opacity: .8; line-height: 1.8em"></span>
		<span class="brand-text font-weight-light"><?= Html::encode(Yii::$app->name); ?></span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<i class="fas fa-user-tie img-circle elevation-2"></i>
			</div>
			<div class="info flex-grow-1">
				<a href="#" class="d-block"><?= Html::encode(Yii::$app->user->identity->getShortName()) ?></a>
			</div>
			<div class="align-self-end">
				<?= Html::a(
					'<i class="fa fa-power-off"></i>',
					['/auth/logout'],
					[
						'title'       => Main::t('Выйти'),
						'data-method' => 'post',
						'class'       => 'd-block',
						'style'       => 'line-height: 2em;',
					]
				); ?>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<?= Menu::widget([
				'options' => [
					'class' => 'nav nav-pills nav-sidebar flex-column',
					'data-widget' => 'treeview',
					'role'           => 'menu',
					'data-accordion' => 'false',
				],
				'items'   => [
					[
						'label' => Main::t('Главная'),
						'icon' => 'fas fa-tachometer-alt',
						'url' => ['/admin/dashboard'],
						'active' => 'dashboard' === Yii::$app->controller->id,
					],
                    [
                        'label' => Main::t('Меню'),
                        'icon' => 'fas fa-bars',
                        'url' => ['/admin/menu'],
                        'active' => 'menu' === Yii::$app->controller->id,
                    ],
                    [
                        'label' => Main::t('Пользователи'),
                        'icon'  => 'fas fa-users',
                        'url'   => '#',
                        'items' => [
                            [
                                'label'  => Main::t('Список пользователей'),
                                'icon'   => 'fas fa-users',
                                'url'    => ['/admin/users'],
                                'active' => 'users' === Yii::$app->controller->id,
                            ],
                            [
                                'label'  => Main::t('Разрешения'),
                                'icon'   => 'fas fa-lock',
                                'url'    => ['/admin/rbac/permissions'],
                                'active' => 'permissions' === Yii::$app->controller->id,
                            ],
                        ],
                    ],
					[
						'label' => Main::t('Настройки'),
						'icon'  => 'fas fa-cog',
						'url'   => '#',
						'items' => [
							[
								'label' => Main::t('Общие'),
								'url' => ['/admin/settings/app'],
							],
						],
					],
					[
						'label' => 'Developer',
						'icon'  => 'fas fa-code',
						'url'   => '#',
						'items' => [
							['label' => 'Gii', 'url' => ['/gii'], 'attributes' => 'target="_blank"'],
							['label' => 'Debug', 'url' => ['/debug'], 'attributes' => 'target="_blank"'],
						],
					],
                    [
                        'label' => Main::t('Языки'),
                        'icon' => 'fas fa-language',
                        'url' => ['/admin/languages'],
                        'active' => 'languages' === Yii::$app->controller->id,
                    ],
                    [
                        'label' => Main::t('Страницы'),
                        'icon' => 'fas fa-file',
                        'url' => ['/admin/page'],
                        'active' => 'page' === Yii::$app->controller->id,
                    ],
				],
			]) ?>
		</nav>
	</div>

</aside>
