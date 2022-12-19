<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Page */
/* @var $languages app\modules\admin\models\Language */

$this->title = 'Update Page: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
?>
<div class="page-update">

    <?= $this->render('_form', [
        'model' => $model,
        'languages' => $languages
    ]) ?>

</div>
