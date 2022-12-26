<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Language */
/* @var $messageSearchModel app\modules\admin\models\SourceMessageSearch */
/* @var $messageDataProvider yii\data\ActiveDataProvider */

$this->title = 'Language: ' . $model->label;
$this->params['breadcrumbs'][] = ['label' => 'Languages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->label, 'url' => ['view', 'id' => $model->id]];
?>
<div class="language-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?= Yii::t('app', 'Отображаемое имя') ?>

    <?= $this->render('_messages-form', [
        'searchModel' => $messageSearchModel,
        'dataProvider' => $messageDataProvider,
        'languageCode' => $model->code
    ]) ?>

</div>
