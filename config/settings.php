<?php

return [
	'class'     => 'app\components\Settings',
	'modelsMap' => [
		'app' => \app\modules\admin\forms\AppSettingsForm::class,
	],
	'defaults' => [
		'app' => [
			'adminEmail' => 'admin@example.com',
			'adminName'  => 'John Doe',
			'systemEmail' => 'noreply@example.com',
			'systemName'  => 'Support',
			'passwordResetToken' => 3600,
			'rememberMeExpiration' => 3600 * 24 * 30, // 30 days
		],
	],
];