<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */

/* @var $model app\forms\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login col-md-6 mx-auto">
	<h1><?= Html::encode($this->title) ?></h1>

	<p>Please fill out the following fields to login:</p>

	<?php $form = ActiveForm::begin([
		'id'          => 'login-form',
	]); ?>
	
	<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

	<?= $form->field($model, 'password')->passwordInput() ?>

	<?= $form->field($model, 'rememberMe')->checkbox() ?>

	<div class="form-group">
		<?= Html::submitButton('Login', ['class' => 'small button', 'name' => 'login-button']) ?>
	</div>
	
	<?php ActiveForm::end(); ?>
	
	<div class="pt-3">
		<p>Don't have an account? <?= Html::a('Register!', ['auth/register']) ?></p>
		<p>Forgot your password? <?= Html::a('Restore!', ['auth/password-request']) ?></p>
	</div>
</div>
