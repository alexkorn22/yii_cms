<?php

use app\modules\admin\helpers\Main;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model justcoded\yii2\settings\forms\AppSettingsForm */

$this->title                   = Main::t('Настройки приложения');
$this->params['breadcrumbs'][] = $this->title;
$this->params['heading']       = Main::t('Настройки');
$this->params['subheading']    = Main::t('Приложение');

?>
	
<div class="user-form card">

	<?php $form = ActiveForm::begin([
		'layout' => 'horizontal',
	]); ?>

	<?= $form->errorSummary($model); ?>
	
	<div class="card-body">
		<h4><?= Main::t('Email админа')?></h4>
		<?= $form->field($model, 'adminName')->textInput()->label(Main::t('Имя')) ?>
		<?= $form->field($model, 'adminEmail')->input('email')->label(Main::t('Email')) ?>

		<h4>System Email</h4>
		<?= $form->field($model, 'systemName')->textInput()->label('Name') ?>
		<?= $form->field($model, 'systemEmail')->input('email')->label('Email') ?>

		<h4>Authentication</h4>
		<?= $form->field($model, 'passwordResetToken')->input('number') ?>
		<?= $form->field($model, 'rememberMeExpiration')->input('number') ?>

        <h4><?= Main::t('Язык админки')?></h4>
        <?= $form->field($model, 'adminLanguage')->dropDownList([
                'ru' => 'Русский',
                'en' => 'English',
        ])->label(Main::t('Язык')) ?>

        <h4><?= Main::t('Язык сайта по умолчанию')?></h4>
        <?= $form->field($model, 'siteLanguage')->input('text')->label(Main::t('Язык')) ?>

	</div>
	<div class="card-footer text-right">
		<?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>
</div>