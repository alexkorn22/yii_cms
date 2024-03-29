<?php

\Yii::setAlias('@app', dirname(__DIR__) . '/app');

$db       = require __DIR__ . '/db.php';
$settings = require __DIR__ . '/settings.php';

dotenv()->required('APP_KEY')->notEmpty();

$config = [
	'id'         => 'main',
	'basePath'   => dirname(__DIR__) . '/app',
    'name' => 'Top-content',
	'runtimePath'   => dirname(__DIR__) . '/runtime',
	'vendorPath'   => dirname(__DIR__) . '/vendor',
	'bootstrap'  => ['languageSelector', '\app\components\bootstraps\PageBootstrap', 'log', 'settings'],
    'sourceLanguage'   => 'ru',
	'aliases'    => [
		'@config'=> '@app/../config',
		'@bower' => '@vendor/bower-asset',
		'@npm'   => '@vendor/npm-asset',
	],
	'modules' => [
		'admin' => \app\modules\admin\Module::class,
	],
	'components' => [
		'request'      => [
			'cookieValidationKey' => env('APP_KEY'),
		],
		'response' => [
			// "Clickjacking" attack fix.
			'on beforeSend' => function ($event) {
				$event->sender->headers->add('X-Frame-Options', 'SAMEORIGIN');
			},
		],
		'db'           => $db,
		'user'         => [
			'identityClass'   => 'app\models\User',
			'loginUrl' => ['auth/login'],
			'enableAutoLogin' => true,
		],
		'authManager' => [
			'class' => \justcoded\yii2\rbac\components\DbManager::class,
		],
		'urlManager' => [
            'class' => 'app\components\UrlManager',
			'enablePrettyUrl' => true,
			'showScriptName' => false,
            'enableLanguageDetection' => false,
			'rules' => require(__DIR__ . '/routes.php'),
		],
        'languageSelector' => [
            'class' => 'app\components\LanguageSelector',
            'defaultLanguage' => 'ru',
        ],
		'formatter' => [
			'class' => \app\i18n\Formatter::class,
		],
		'cache' => [
			'class' => \yii\caching\FileCache::class,
		],
		'i18n' => [
			'translations' => [
	            "app*" => [
                    'class' => 'yii\i18n\DbMessageSource',
                    'forceTranslation' => true,
                ],
                "*" => [
                    'class' => 'yii\i18n\DbMessageSource',
                    'forceTranslation' => true,
                ]
			],
		],
		'assetManager' => [
			'forceCopy' => YII_DEBUG,
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
		'mailer'       => [
			'class'            => \yii\swiftmailer\Mailer::class,
			// send all mails to a file by default. You have to set
			// 'useFileTransport' to false and configure a transport
			// for the mailer to send real emails.
			'useFileTransport' => true,
		],
		'log'          => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets'    => [
				[
					'class'  => \yii\log\FileTarget::class,
					'levels' => ['error', 'warning'],
				],
			],
		],
		'settings' => $settings,
        'view' => [
            'class' => 'yii\web\View',
            'renderers' => [
                'twig' => [
                    'class' => 'yii\twig\ViewRenderer',
                    'cachePath' => '@runtime/Twig/cache',
                    'options' => [
                        'auto_reload' => true,
                    ],
                    'globals' => [
                        'html' => ['class' => '\yii\helpers\Html'],
                    ],
                    'uses' => ['yii\bootstrap'],
                    'extensions' => [
                        'Twig\Extension\StringLoaderExtension',
                        '\yii\twig\html\HtmlHelperExtension'
                    ]
                ],
            ],
        ],
	],
	// enable Bootstrap4 in Kartik widgets like Select2.
	'params' => [
		'bsVersion' => 4,
	],
];

if (YII_ENV_DEV) {
	// configuration adjustments for 'dev' environment.
	$config['bootstrap'][]      = 'debug';
	$config['modules']['debug'] = [
		'class' => \yii\debug\Module::class,
		// uncomment the following to add your IP if you are not connecting from localhost.
		'allowedIPs' => ['*'],
	];

	$config['bootstrap'][]    = 'gii';
	$config['modules']['gii'] = [
		'class' => \yii\gii\Module::class,
		// uncomment the following to add your IP if you are not connecting from localhost.
		'allowedIPs' => ['*'],
        'generators' => [ // HERE
            'crud' => [
                'class' => 'yii\gii\generators\crud\Generator',
                'templates' => [
                    'adminlte' => '@config/gii/templates/crud/simple',
                ]
            ]
        ],
	];
}

return $config;
