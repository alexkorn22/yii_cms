<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Language */

$this->title = 'Language: ' . $model->label;
$this->params['breadcrumbs'][] = ['label' => 'Languages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->label, 'url' => ['view', 'id' => $model->id]];
?>
<div class="language-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
