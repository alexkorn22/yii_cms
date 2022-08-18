<?php

namespace app\controllers;

use app\components\enums\ViewParamsEnum;
use Yii;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\forms\LoginForm;
use app\forms\ContactForm;

class SiteController extends Controller
{
	/**
	 * @inheritdoc
	 */
	public function actions()
	{
		return [
			'error'   => [
				'class' => 'yii\web\ErrorAction',
			],
			'captcha' => [
				'class'           => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			],
		];
	}

	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionIndex()
	{
        $this->view->params[ViewParamsEnum::IS_MAIN_PAGE] = true;
        $this->view->params[ViewParamsEnum::NOT_USE_GRID_CONTAINER] = true;
		return $this->render('index');
	}
}
