<?php

use app\models\activeRecord\MenuItem;
use app\modules\admin\helpers\Main;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\activeRecord\Menu */
/* @var $form yii\widgets\ActiveForm */

$items = MenuItem::getTree($model->id);

$params = Json::encode([
    'menuId' => $model->id,
    'idEl' => 'rootView',
]);

$this->registerJs('Admin.RunMenuView(' . $params . ')', View::POS_LOAD);
?>

<div class="menu-form box box-primary">
    <div class="box-body table-responsive">
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">

            <div class="col-md-6">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'label')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2">
                <div><label class="control-label">&nbsp</label></div>
                <?= Html::submitButton(Yii::t('admin', 'Сохранить'), ['class' => 'btn btn-success btn-flat']) ?>
            </div>


        </div>
        <?php ActiveForm::end(); ?>
        <div id="rootView" class="mt-2"></div>
    </div>
</div>
