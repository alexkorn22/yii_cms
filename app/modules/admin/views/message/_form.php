<?php

use app\services\LanguageService;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\SourceMessage */
/* @var $form yii\widgets\ActiveForm */
/* @var $lang string */
?>

<div class="source-message-form card">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card-body">
        <label>Source language</label>
        <p><?= $model->message ?></p>

        <? foreach (LanguageService::getCodes() as $code): ?>
            <? if ($code === $lang): ?>
                <?= $form->field($model, "languages[$lang]")->label("Translation")->textarea(['rows' => 1]) ?>
            <? else: ?>
                <?= $form->field($model, "languages[$code]")->label(false)->hiddenInput() ?>
            <? endif; ?>
        <? endforeach; ?>
    </div>

    <div class="card-footer text-right">
        <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>