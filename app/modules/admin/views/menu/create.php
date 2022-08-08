<?php

/* @var $this yii\web\View */
/* @var $model app\models\activeRecord\Menu */

$this->title = Yii::t('admin', 'Create Menu');
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
