<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\PageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-index">

    <?php $this->beginBlock('content-title'); ?>
    <?= Html::a('Create Page', ['create'], ['class' => 'btn btn-sm btn-success']) ?>
    <?php $this->endBlock(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'link',
            'name',
            'title',
            [
                'attribute' => 'text',
                'enableSorting' => false,
                'headerOptions' => ['style' => 'width: 40%'],
                'format' => 'html',
                'value' => function ($model) {
                    return Html::decode($model->text);
                }
            ],
            //'meta_title',
            //'meta_description',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
            ],
        ],
    ]); ?>
</div>
