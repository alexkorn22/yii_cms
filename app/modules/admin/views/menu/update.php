<?php

/* @var $this yii\web\View */
/* @var $model app\models\activeRecord\Menu */

$this->title = Yii::t('admin', 'Изменить {modelClass}: ', [
    'modelClass' => 'меню',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Меню'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('admin', 'Изменить');
?>
<div class="menu-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
