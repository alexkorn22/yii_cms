<?php

use app\components\enums\VisibleEnum;
use app\modules\admin\widgets\BoxGridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\LanguageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Languages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="language-index">
    <?php $this->beginBlock('content-title'); ?>
    <?= Html::a('Add New', ['create'], ['class' => 'btn btn-sm btn-success']) ?>
    <?php $this->endBlock(); ?>

    <?= BoxGridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'label',
            'code',
            'position',
            array(
                'attribute' => 'visible',
                'value' => 'visibleAlias',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'visible',
                    VisibleEnum::listData(),
                    ['prompt' => 'All', 'class' => 'form-control']
                ),
            ),

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}'
            ],
        ],
    ]); ?>
</div>
