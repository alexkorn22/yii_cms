<?php

use app\modules\admin\widgets\Summernote;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Page */
/* @var $form yii\widgets\ActiveForm */
/* @var $languages app\modules\admin\models\Language */

?>

<div class="page-form-wrapper">
    <nav>
        <div class="nav nav-tabs" id="lang-nav" role="tablist">
            <? foreach ($languages as $code => $name): ?>
                <a class="nav-item nav-link <?= $code === array_key_first($languages) ? 'active' : '' ?>"
                   data-toggle="tab"
                   href="#lang-nav-<?= $code ?>"
                   role="tab"><?= $name ?></a>
            <? endforeach; ?>
        </div>
    </nav>
    <div class="page-form card">

        <?php $form = ActiveForm::begin([
            'layout' => 'horizontal',
        ]); ?>

        <div class="card-body">
            <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <div class="tab-content" id="lang-navContent">
                <? foreach ($languages as $code => $name): ?>
                    <div class="tab-pane <?= $code === array_key_first($languages) ? 'active' : '' ?>"
                         id="lang-nav-<?= $code ?>"
                         role="tabpanel">
                        <?= $form->field($model->getTranslation($code), "[$code]title")->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model->getTranslation($code), "[$code]text")->widget(Summernote::class, [
                            'model' => $model->getTranslation($code),
                            'attribute' => "[$code]text"
                        ]) ?>

                        <?= $form->field($model->getTranslation($code), "[$code]meta_title")->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model->getTranslation($code), "[$code]meta_description")->textarea() ?>
                    </div>
                <? endforeach; ?>
            </div>
        </div>

        <div class="card-footer text-right">
            <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>