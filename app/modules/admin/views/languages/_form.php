<?php

use app\modules\admin\controllers\LanguagesController;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Language */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="language-form card">

    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
    ]); ?>

    <div class="card-body">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'label')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'position')->textInput([
            'value' => $model->isNewRecord ? strval(LanguagesController::getHighestPosition() + 1) : $model->position,
            'type' => 'number'

        ]) ?>

        <?= $form->field($model, 'visible')->checkbox() ?>
    </div>

    <div class="card-footer text-right">
        <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
