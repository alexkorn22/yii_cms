<?php

namespace app\modules\admin\controllers;

use app\modules\admin\forms\AppSettingsForm;
use justcoded\yii2\settings\actions\SettingsAction;

/**
 * Class SettingsController
 *
 * @package app\modules\admin\controllers
 */
class SettingsController extends Controller
{
	/**
	* @inheritdoc
	*/
	public function actions()
	{
		return [
			'app' => [
				'class' => SettingsAction::class,
				'modelClass' => AppSettingsForm::class,
			],
		];
	}
}